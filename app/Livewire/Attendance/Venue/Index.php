<?php

namespace App\Livewire\Attendance\Venue;

use App\Models\Venue;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class Index extends Component
{
    public Collection $venues;

    public function render()
    {
        $this->venues = Venue::whereHas('venueType', function (Builder $query) {
            $query->where('name', 'Competition venue');
        })->get();

        return view('livewire.attendance.venue.index');
    }
}
