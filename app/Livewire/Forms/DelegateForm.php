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

    public ?int $sport_id = null;

    public array $sport_event_id = [''];

    public array $delegation_role_id = [''];

    public ?string $blood_type;

    public ?string $allergy;

    public ?string $chronic_illness;

    public ?string $current_medication;

    public ?string $past_medical_history;

    public ?string $vaccine_received;

    public ?string $physical_limitation;

    public ?string $recent_illness;

    public ?string $family_medical_history;

    public ?string $special_medical_need;

    public ?int $venue_id;

    public ?string $meal_preference;

    public ?string $special_request;

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
            'profile_photo' => 'nullable|image',
            'delegation_role_id.*' => 'required',
            'sport_event_id.*' => 'required',

            'blood_type' => 'nullable',
            'allergy' => 'nullable',
            'chronic_illness' => 'nullable',
            'current_medication' => 'nullable',
            'past_medical_history' => 'nullable',
            'vaccine_received' => 'nullable',
            'physical_limitation' => 'nullable',
            'recent_illness' => 'nullable',
            'family_medical_history' => 'nullable',
            'special_medical_need' => 'nullable',

            'venue_id' => 'nullable',
            'meal_preference' => 'nullable',
            'special_request' => 'nullable',
        ];
    }

    public function messages(): array
    {
        return [];
    }

    public function validationAttributes(): array
    {
        return [
            'sport_id' => 'sport',
            'delegation_role_id.*' => 'role',
            'sport_event_id.*' => 'sport event',
        ];
    }

    public function create()
    {
        $this->validate();
        $delegate = Delegate::create($this->all());
        $this->attachPhoto($delegate);
        $this->syncSportEvent($delegate);
        $this->syncDelegationRole($delegate);
        $this->createMedicalInformation($delegate);
        $this->createLogisticInformation($delegate);
        $this->reset();
    }

    public function getExistingForm($id)
    {
        $this->existingForm = Delegate::with('sportEvent', 'medicalInformation', 'logisticInformation')->find($id);
        $this->fill($this->existingForm);
        $this->fill($this->existingForm->medicalInformation);
        $this->fill($this->existingForm->logisticInformation);
        $this->sport_event_id = $this->existingForm->sportEvent->pluck('id')->toArray();
        $this->delegation_role_id = $this->existingForm->delegationRole->pluck('id')->toArray();
    }

    public function update()
    {
        $this->validate();
        $this->existingForm->update($this->all());
        $this->attachPhoto($this->existingForm);
        $this->syncSportEvent($this->existingForm);
        $this->syncDelegationRole($this->existingForm);
        $this->updateMedicalInformation($this->existingForm);
        $this->updateLogisticInformation($this->existingForm);
    }

    public function delete()
    {
        $this->existingForm->delete();
    }

    public function attachPhoto(Delegate $delegate)
    {
        if ($this->profile_photo) {
            $this->profile_photo_path = $this->profile_photo->store($delegate->id, 'delegate-profile-photo');
            $delegate->update(['profile_photo_path' => $this->profile_photo_path]);
        }
    }

    private function syncSportEvent(Delegate $delegate)
    {
        $delegate->sportEvent()->sync($this->sport_event_id);
    }

    private function syncDelegationRole(Delegate $delegate)
    {
        $delegate->delegationRole()->sync($this->delegation_role_id);
    }

    private function createMedicalInformation(Delegate $delegate)
    {
        $delegate->medicalInformation()->create($this->all());
    }

    private function updateMedicalInformation(Delegate $delegate)
    {
        $delegate->medicalInformation()->update($this->all());
    }

    private function createLogisticInformation(Delegate $delegate)
    {
        $delegate->logisticInformation()->create($this->all());
    }

    private function updateLogisticInformation(Delegate $delegate)
    {
        $delegate->logisticInformation()->update($this->all());
    }
}
