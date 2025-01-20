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

    public ?string $profile_photo;

    public ?string $profile_photo_path;

    public ?string $address;

    public ?int $sport_id;

    public function rules()
    {
        return [
            'delegation_id' => 'required|integer',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable',
            'last_name' => 'required|string|max:255',
            'suffix' => 'nullable',
            'gender' => 'required|string|max:255',
            'birthday' => 'required',
            'contact_number' => 'required',
            'email' => 'required|unique:delegates, email',
            'address' => 'required',
            'sport_id' => 'nullable',
            'profile_photo_path' => 'nullable',
            'profile_photo' => 'nullable|image'
        ];
    }

    public function messages(): array
    {
        return [];
    }

    public function validationAttributes(): array
    {
        return [
            'sport_id' => 'sport'
        ];
    }

    public function create()
    {
        dd($this->all());
        $this->validate();
        Delegate::create($this->all());
        $this->reset();
    }
}
