<?php

namespace App\Livewire\Delegation\Registration;

use Livewire\Component;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public bool $certify = false;

    public function submit()
    {
        $this->validate([
            'certify' => 'required|accepted',
        ]);
        dd('submit');
    }

    #[Computed(persist: true)]
    public function user()
    {
        return Auth::user();
    }

    public function render()
    {
        return view('livewire.delegation.registration.index');
    }
}
