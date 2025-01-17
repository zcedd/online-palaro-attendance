<?php

namespace App\Livewire\Delegation\Registration;

use App\Models\Sport;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Computed;
use App\Livewire\Forms\DelegateForm;

class TeamMemberSection extends Component
{
    public DelegateForm $delegateForm;

    public bool $addTeamMemberOffcanvas = false;

    public ?string $formAction;

    #[On('addTeamMemberOffcanvas')]
    public function addTeamMemberOffcanvas()
    {
        $this->addTeamMemberOffcanvas = true;
        $this->formAction = 'addTeamMember';
    }

    public function addTeamMember()
    {
        $this->delegateForm->create();
    }

    #[Computed(persist: true)]
    public function sports()
    {
        return Sport::all();
    }

    public function render()
    {
        return view('livewire.delegation.registration.team-member-section');
    }
}
