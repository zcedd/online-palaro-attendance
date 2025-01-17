<?php

namespace App\Livewire\Delegation\Registration;

use App\Models\Delegate;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Facades\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;

final class TeamMemberTable extends PowerGridComponent
{
    public string $tableName = 'team-member-table-j2nhlb-table';

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            PowerGrid::header()
                ->showSearchInput(),
            PowerGrid::footer()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Delegate::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('first_name')
            ->add('middle_name')
            ->add('last_name')
            ->add('suffix')
            ->add('gender')
            ->add('birthday_formatted', fn(Delegate $model) => Carbon::parse($model->birthday)->format('d/m/Y'))
            ->add('contact_number')
            ->add('email')
            ->add('profile_photo_path')
            ->add('address');
    }

    public function columns(): array
    {
        return [
            Column::make('First name', 'first_name')
                ->sortable()
                ->searchable(),

            Column::make('Middle name', 'middle_name')
                ->sortable()
                ->searchable(),

            Column::make('Last name', 'last_name')
                ->sortable()
                ->searchable(),

            Column::make('Suffix', 'suffix')
                ->sortable()
                ->searchable(),

            Column::make('Gender', 'gender')
                ->sortable()
                ->searchable(),

            Column::make('Birthday', 'birthday_formatted', 'birthday')
                ->sortable(),

            Column::make('Contact number', 'contact_number')
                ->sortable()
                ->searchable(),

            Column::make('Email', 'email')
                ->sortable()
                ->searchable(),

            Column::make('Profile photo path', 'profile_photo_path')
                ->sortable()
                ->searchable(),

            Column::make('Address', 'address')
                ->sortable()
                ->searchable(),

            Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [];
    }

    public function header(): array
    {
        return  [
            Button::add('add')
                ->slot('Add')
                ->class('btn btn-primary')
                ->dispatch('addTeamMemberOffcanvas', []),
        ];
    }

    protected function getListeners()
    {
        return array_merge(
            parent::getListeners(),
            [
                'RefreshTableComponent' => '$refresh',
            ]
        );
    }

    public function actions(Delegate $row): array
    {
        return [
            Button::add('update')
                ->slot('Update')
                ->id()
                ->class('btn btn-secondary')
                ->dispatch('updateTeamMemberOffcanvas', ['rowId' => $row->id]),
            Button::add('delete')
                ->slot('Delete')
                ->id()
                ->class('btn btn-danger')
                ->dispatch('deleteTeamMemberOffcanvas', ['rowId' => $row->id])
        ];
    }

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
