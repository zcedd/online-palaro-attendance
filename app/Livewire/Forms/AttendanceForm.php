<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Attendance;
use Livewire\Attributes\Validate;

class AttendanceForm extends Form
{
    public ?int $attendance_type_id;

    public ?int $qr_code_id;

    public ?int $venue_id;

    public $check_in_at;

    public $check_out_at;

    public ?string $gps_latitude;

    public ?string $gps_longitude;

    public function rules()
    {
        return [
            'attendance_type_id' => 'required|integer',
            'qr_code_id' => 'required|integer',
            'venue_id' => 'required|integer',
            'check_in_at' => 'required|date',
            'check_out_at' => 'nullable|date',
            'gps_latitude' => 'required|string',
            'gps_longitude' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [];
    }

    public function validationAttributes(): array
    {
        return [
            'attendance_type_id' => 'attendance type',
            'qr_code_id' => 'QR code',
            'venue_id' => 'venue',
        ];
    }

    public function create()
    {
        $this->validate();
        Attendance::create($this->all());
        $this->reset();
    }
}
