<?php

namespace App\Livewire\Delegation\Registration;

use App\Models\User;
use Livewire\Component;
use App\Livewire\Forms\DelegateForm;
use App\Livewire\Forms\DelegationTeamForm;
use Illuminate\Support\Facades\Auth;

class TeamContactSection extends Component
{
    public DelegationTeamForm $form;

    public ?string $formAction;

    public User $user;

    public function createDelegationTeam()
    {
        $this->form->delegation_id = $this->user->delegation_id;
        $this->form->user_id = $this->user->id;
        $this->form->create();
    }

    public function updateDelegationTeam()
    {
        $this->form->delegation_id = $this->user->delegation_id;
        $this->form->user_id = $this->user->id;
        $this->form->update();
    }

    public function mount()
    {
        $this->user = Auth::user();
        if ($this->user->delegationTeam) {
            $this->form->getExistingForm($this->user->delegationTeam->id);
            $this->formAction = 'updateDelegationTeam';
        } else {
            $this->formAction = 'createDelegationTeam';
        }
    }

    public function render()
    {
        return view('livewire.delegation.registration.team-contact-section');
    }
}
