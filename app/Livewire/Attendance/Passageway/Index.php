<?php

namespace App\Livewire\Attendance\Passageway;

use App\Models\Venue;
use App\Models\QrCode;
use Livewire\Component;
use App\Models\Delegate;
use App\Models\Attendance;
use Livewire\Attributes\On;
use App\Livewire\Forms\AttendanceForm;
use App\Livewire\Attendance\Scanner\Index as ScannerComponent;
use App\Services\Attendance\QrCode as QrCodeService;

class Index extends Component
{
    public Venue $venue;

    public ?Delegate $delegate;

    public AttendanceForm $form;

    #[On('qrScanned')]
    public function onScanned($scannedResult)
    {
        $result = QrCode::where('qr_code_data', $scannedResult)->with('delegate.delegation', 'delegate.delegationRole')->first();

        if ($result) {
            $this->delegate = $result->delegate;
            $this->form->qr_code_id = $result->id;
            $this->dispatch('getGeoLocation');
        } else {
            dd($result);
        }
    }

    #[On('geoLocationResult')]
    public function geoLocationResult(array $result)
    {
        try {
            $this->form->gps_latitude = $result['latitude'];
            $this->form->gps_longitude = $result['longitude'];
            $this->form->check_in_at = now();
            $this->form->venue_id = $this->venue->id;
            $this->form->attendance_type_id = 1;
            $this->form->create();

            $this->dispatch('resumeScanner')->to(ScannerComponent::class);
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function mount($venueId)
    {
        $this->venue = Venue::find($venueId);
    }

    public function render()
    {
        return view('livewire.attendance.passageway.index');
    }
}
