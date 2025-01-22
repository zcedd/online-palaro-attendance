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

    public bool $teamMemberOffcanvas = false;

    public ?string $formAction;

    public $sportEvents = [];

    #[On('addTeamMemberOffcanvas')]
    public function addTeamMemberOffcanvas()
    {
        $this->teamMemberOffcanvas = true;
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

    #[On('updateTeamMemberOffcanvas')]
    public function updateTeamMemberOffcanvas($rowId)
    {
        $this->teamMemberOffcanvas = true;
        $this->formAction = 'updateTeamMember';
        $this->delegateForm->getExistingForm($rowId);
    }

    public function updateTeamMember()
    {
        try {
            $this->delegateForm->update();
        } catch (QueryException $qe) {
            dd($qe);
        }
    }

    #[On('deleteTeamMemberOffcanvas')]
    public function deleteTeamMemberOffcanvas($id)
    {
        $this->teamMemberOffcanvas = true;
        $this->formAction = 'updateTeamMember';
        $this->delegateForm->getExistingForm($id);
    }

    public function deleteTeamMember()
    {
        try {
            $this->delegateForm->delete();
        } catch (QueryException $qe) {
            dd($qe);
        }
    }

    public function addSportEvent(): void
    {
        $this->delegateForm->sport_event_id[] = '';
    }

    public function removeSportEvent($arrayKey): void
    {
        unset($this->delegateForm->sport_event_id[$arrayKey]);
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
