<?php

namespace App\Livewire\Delegation\Registration;

use App\Models\Sport;
use Livewire\Component;
use App\Models\SportEvent;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;
use Livewire\Attributes\Computed;
use App\Livewire\Forms\DelegateForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;

class TeamMemberSection extends Component
{
    use WithFileUploads;

    public DelegateForm $delegateForm;

    public bool $addTeamMemberOffcanvas = false;

    public ?string $formAction;

    public $sportEvents = [];

    #[On('addTeamMemberOffcanvas')]
    public function addTeamMemberOffcanvas()
    {
        $this->addTeamMemberOffcanvas = true;
        $this->formAction = 'addTeamMember';
    }

    public function addTeamMember()
    {
        try {
            $this->delegateForm->delegation_id = Auth::user()->delegation_id;
            $this->delegateForm->delegation_team_id = Auth::user()->delegationTeam->id;
            $this->delegateForm->create();
        } catch (QueryException $qe) {
            dd($qe);
        }
        // catch (\Throwable $th) {
        //     dd($th);
        // }
    }

    #[Computed(persist: true)]
    public function sports()
    {
        return Sport::all();
    }

    public function getSportEvents()
    {
        $this->sportEvents = SportEvent::where('sport_id', $this->delegateForm->sport_id)->get();
    }

    public function render()
    {
        return view('livewire.delegation.registration.team-member-section');
    }
}
