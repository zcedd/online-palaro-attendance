<?php

namespace App\Livewire\Forms;

use App\Models\Delegate;
use Livewire\Attributes\Validate;
use Livewire\Form;

class DelegateForm extends Form
{
    public ?int $delegation_id;

    public ?string $first_name;

    public ?string $middle_name;

    public ?string $last_name;

    public ?string $suffix;

    public ?string $gender;

    public ?string $birthday;

    public ?int $contact_number;

    public ?string $email;

    public ?string $profile_photo_path;

    public ?string $address;

    public function rules()
    {
        return [
            'delegation_id' => 'required',
            'first_name' => 'required',
            'middle_name' => 'nullable',
            'last_name' => 'required',
            'suffix' => 'required',
            'gender' => 'required',
            'birthday' => 'required',
            'contact_number' => 'required',
            'email' => 'required|unique:delegates, email',
            'profile_photo_path' => 'required',
            'address' => 'required',
        ];
    }

    public function messages(): array
    {
        return [];
    }

    public function validationAttributes(): array
    {
        return [];
    }

    public function create()
    {
        $this->validate();
        Delegate::create($this->all());
        $this->reset();
    }
}
