<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Delegate;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class DelegateForm extends Form
{
    use WithFileUploads;

    public ?int $delegation_id;

    public ?int $delegation_team_id;

    public ?string $first_name;

    public ?string $middle_name;

    public ?string $last_name;

    public ?string $suffix;

    public ?string $gender;

    public ?string $birthday;

    public ?string $contact_number;

    public ?string $email;

    public $profile_photo;

    public ?string $profile_photo_path;

    public ?string $address;

    public ?int $sport_id;

    public array $sport_event_id = [];

    public ?Delegate $existingForm;

    public function rules()
    {
        return [
            'delegation_id' => 'required|integer',
            'delegation_team_id' => 'required|integer',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable',
            'last_name' => 'required|string|max:255',
            'suffix' => 'nullable',
            'gender' => 'required|string|max:255',
            'birthday' => 'required',
            'contact_number' => 'required',
            'email' => 'nullable',
            'address' => 'required',
            'sport_id' => 'nullable',
            'profile_photo_path' => 'nullable',
            'profile_photo' => 'required|image'
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
        $this->validate();
        $delegate = Delegate::create($this->all());
        $this->attachPhoto($delegate);
        $this->attachSportEvent($delegate);
        $this->reset();
    }

    public function getExistingForm($id)
    {
        $this->existingForm = Delegate::find($id);
        $this->fill($this->existingForm);
    }

    public function update()
    {
        $this->existingForm->update($this->all());
    }

    public function delete()
    {
        $this->existingForm->delete();
    }

    public function attachPhoto(Delegate $delegate)
    {
        if ($this->profile_photo) {
            $this->profile_photo_path = $this->profile_photo->store($delegate->id, 'delegate-profile-photo');
        }
        $delegate->update(['profile_photo_path' => $this->profile_photo_path]);
    }

    private function attachSportEvent(Delegate $delegate)
    {
        $delegate->sportEvent()->attach($this->sport_event_id);
    }
}
