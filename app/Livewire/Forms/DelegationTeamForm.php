<?php

namespace App\Livewire\Forms;

use App\Models\DelegationTeam;
use Livewire\Attributes\Validate;
use Livewire\Form;

class DelegationTeamForm extends Form
{
    public ?int $delegation_id;

    public ?int $user_id;

    public ?string $contact_person;

    public ?int $contact_number;

    public ?string $contact_email;

    public ?string $alternative_contact_person;

    public ?int $alternative_contact_number;

    public ?string $alternative_contact_email;

    public ?DelegationTeam $existingForm;

    public function rules()
    {
        return [
            'delegation_id' => 'required|integer',
            'user_id' => 'required|integer',
            'contact_person' => 'required|string|max:255',
            'contact_number' => 'required|integer',
            'contact_email' => 'required|email|max:255',
            'alternative_contact_person' => 'nullable|string|max:255',
            'alternative_contact_number' => 'nullable|integer',
            'alternative_contact_email' => 'nullable|email|max:255',
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
        $existingForm = DelegationTeam::create($this->all());
        $this->existingForm = $existingForm;
    }

    public function getExistingForm($id)
    {
        $this->existingForm = DelegationTeam::find($id);
        $this->fill($this->existingForm);
    }

    public function update()
    {
        $this->existingForm->update($this->all());
    }
}
