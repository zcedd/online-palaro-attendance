<?php

namespace App\Livewire\Delegation\Registration;

use App\Models\Sport;
use Livewire\Component;
use App\Models\SportEvent;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;
use App\Models\DelegationRole;
use Livewire\Attributes\Computed;
use App\Livewire\Forms\DelegateForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;

class TeamMemberSection extends Component
{
    use WithFileUploads;

    public DelegateForm $delegateForm;

    public bool $teamMemberOffcanvas = false;

    public bool $deleteTeamMemberModal = false;

    public ?string $formAction;

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
            $this->dispatch('teamMemberSaved');
            $this->dispatch('refreshTableComponent');
        } catch (QueryException $qe) {
            dd($qe);
            $this->dispatch('somethingWentWrong');
        }
    }

    #[On('updateTeamMemberOffcanvas')]
    public function updateTeamMemberOffcanvas($rowId)
    {
        $this->formAction = 'updateTeamMember';
        $this->delegateForm->getExistingForm($rowId);
        $this->teamMemberOffcanvas = true;
    }

    public function updateTeamMember()
    {
        try {
            $this->delegateForm->update();
            $this->dispatch('teamMemberSaved');
            $this->dispatch('refreshTableComponent');
        } catch (QueryException $qe) {
            $this->dispatch('somethingWentWrong');
        }
    }

    #[On('deleteTeamMemberModal')]
    public function deleteTeamMemberModal($rowId)
    {
        $this->deleteTeamMemberModal = true;
        $this->formAction = 'updateTeamMember';
        $this->delegateForm->getExistingForm($rowId);
    }

    public function deleteTeamMember()
    {
        try {
            $this->delegateForm->delete();
            $this->deleteTeamMemberModal = false;
            $this->dispatch('teamMemberDeleted');
            $this->dispatch('refreshTableComponent');
        } catch (QueryException $qe) {
            $this->dispatch('somethingWentWrong');
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

    public function addDelegationRole(): void
    {
        $this->delegateForm->delegation_role_id[] = '';
    }

    public function removeDelegationRole($arrayKey): void
    {
        unset($this->delegateForm->delegation_role_id[$arrayKey]);
    }

    #[Computed(persist: true)]
    public function sports()
    {
        return Sport::all();
    }

    #[Computed(persist: true)]
    public function sportEvents()
    {
        return SportEvent::all();
    }

    #[Computed(persist: true)]
    public function delegationRoles()
    {
        return DelegationRole::all();
    }

    public function render()
    {
        return view('livewire.delegation.registration.team-member-section');
    }
}
