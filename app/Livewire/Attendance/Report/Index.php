<?php

namespace App\Livewire\Attendance\Report;

use App\Models\Venue;
use Livewire\Component;

class Index extends Component
{
    public Venue $venue;

    public function mount(int $venueId)
    {
        $this->venue = Venue::findOrFail($venueId);
    }

    public function render()
    {
        return view('livewire.attendance.report.index');
    }
}
