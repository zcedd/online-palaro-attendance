<?php

namespace App\Livewire\Administrator\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    public $name, $email, $password, $role;
    public $createUserModal;

    protected $listeners = ['CreateUserModal'];

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'role' => 'required'
        ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function  CreateUserModal(){
        $this->createUserModal = true;
    }

    public function SaveUser(){
        $user = $this->validate();
        $user['password'] =  Hash::make($this->password);
        $status = $this->dispatch('CreateUser', $user);

    }

    public function render()
    {
        $this->roles = Role::all()->pluck('name');
        return view('livewire.administrator.users.index');
    }
}
