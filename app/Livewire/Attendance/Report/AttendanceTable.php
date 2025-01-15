<?php

namespace App\Livewire\Attendance\Report;

use App\Models\Venue;
use App\Models\Attendance;
use App\Models\Delegation;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Components\SetUp\Exportable;

final class AttendanceTable extends PowerGridComponent
{
    use WithExport;

    public Venue $venue;

    public string $tableName = 'attendance-table-gorwkb-table';

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            PowerGrid::exportable(fileName: 'my-export-file')
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            PowerGrid::header()
                ->showSearchInput(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Attendance::query()
            ->join('qr_codes', 'attendances.qr_code_id', 'qr_codes.id')
            ->join('delegates', 'qr_codes.delegate_id', 'delegates.id')
            ->join('delegations', 'delegates.delegation_id', 'delegations.id')
            ->whereHas('venue', function ($query) {
                $query->where('id', $this->venue->id);
            })
            ->select([
                'attendances.id',
                'delegations.name as delegation_name',
                DB::raw("CONCAT(delegates.first_name, ' ', delegates.last_name, ' ', delegates.suffix) as delegate_full_name"),
                'attendances.check_in_at',
            ]);
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('delegation_name')
            ->add('full_name')
            ->add('check_out_at_formatted', fn(Attendance $model) => Carbon::parse($model->check_in_at)->format('M d, Y h:i a'));
    }

    public function columns(): array
    {
        return [
            Column::make('Delegation', 'delegation_name')
                ->sortable()
                ->searchable(),

            Column::make('Fullname', 'delegate_full_name')
                ->sortable()
                ->searchable(),

            Column::make('Check in at', 'check_out_at_formatted', 'check_in_at')
                ->sortable()
                ->searchable(),
        ];
    }

    public function filters(): array
    {
        return [
            Filter::multiSelect('delegation_name', 'delegations.name')
                ->dataSource(Delegation::all())
                ->optionValue('name')
                ->optionLabel('name'),
            Filter::datepicker('check_out_at_formatted', 'check_in_at'),
        ];
    }

    /*
    public function actions(Attendance $row): array
    {
        return [
            Button::add('edit')
                ->slot('Edit: ' . $row->id)
                ->id()
                ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
                ->dispatch('edit', ['rowId' => $row->id])
        ];
    }
    */

    /*
    public function actionRules($row): array
    {
        return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
