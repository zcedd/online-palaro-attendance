<?php

namespace App\Livewire\Attendance\Venue\Option;

use Livewire\Component;

class Index extends Component
{
    public int $venueId;

    public function mount($venueId)
    {
        $this->venueId = $venueId;
    }

    public function render()
    {
        return view('livewire.attendance.venue.option.index');
    }
}
