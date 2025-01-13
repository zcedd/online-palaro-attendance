<?php

namespace App\Livewire\Dashboard;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $name, $email, $password;
    public $CreateUser;

    protected $listeners = ['CreateUser'];

    public function CreateUser(){
        $this->CreateUser = true;
    }

    public function create(){
        $user = $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = new User($user);
        $user->save();
        $this->CreateUser = false;
        $this->reset();
        $this->dispatch('RefreshComponent');
    }

    public function render()
    {
        return view('livewire.dashboard.index');
    }
}
