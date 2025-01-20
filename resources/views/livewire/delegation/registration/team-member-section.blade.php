<div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Members</h4>
            <livewire:delegation.registration.team-member-table />
        </div>
    </div>


    <x-offcanvas wire:model.live="addTeamMemberOffcanvas">
        <x-slot name="title">
            Add Delegate Information
        </x-slot>
        <form wire:submit="{{ $formAction }}" id="{{ $formAction }}">
            <h4 class="text-muted">Personal Information</h4>
            <div class="row g-2">
                <div class="col">
                    <x-form-panel-vertical>
                        <x-slot name="label">
                            <x-label for="first-name" class="form-label required">First name</x-label>
                        </x-slot>
                        <x-input type="text" class="{{ $errors->has('delegateForm.first_name') ? 'is-invalid' : '' }}"
                            id="first-name" wire:model="delegateForm.first_name" />
                        <x-input-error for="delegateForm.first_name" />
                    </x-form-panel-vertical>
                </div>
                <div class="col">
                    <x-form-panel-vertical>
                        <x-slot name="label">
                            <x-label for="middle-name" class="form-label">Middle name</x-label>
                        </x-slot>
                        <x-input type="text" class="{{ $errors->has('delegateForm.middle_name') ? 'is-invalid' : '' }}"
                            id="middle-name" wire:model="delegateForm.middle_name" />
                        <x-input-error for="delegateForm.middle_name" />
                    </x-form-panel-vertical>
                </div>
                <div class="col">
                    <x-form-panel-vertical>
                        <x-slot name="label">
                            <x-label for="last-name" class="form-label required">Last name</x-label>
                        </x-slot>
                        <x-input type="text" class="{{ $errors->has('delegateForm.last_name') ? 'is-invalid' : '' }}"
                            id="last-name" wire:model="delegateForm.last_name" />
                        <x-input-error for="delegateForm.first_name" />
                    </x-form-panel-vertical>
                </div>
                <div class="col">
                    <x-form-panel-vertical>
                        <x-slot name="label">
                            <x-label for="suffix-name" class="form-label">Suffix name</x-label>
                        </x-slot>
                        <x-input type="text" class="{{ $errors->has('delegateForm.suffix') ? 'is-invalid' : '' }}"
                            id="suffix-name" wire:model="delegateForm.suffix" />
                        <x-input-error for="delegateForm.suffix" />
                    </x-form-panel-vertical>
                </div>
            </div>
            <div class="row g-2">
                <div class="col">
                    <x-form-panel-vertical>
                        <x-slot name="label">
                            <x-label for="birthday" class="form-label required">Birthday</x-label>
                        </x-slot>
                        <x-input type="date" class="{{ $errors->has('delegateForm.birthday') ? 'is-invalid' : '' }}"
                            id="birthday" wire:model="delegateForm.birthday" />
                        <x-input-error for="delegateForm.birthday" />
                    </x-form-panel-vertical>
                </div>
                <div class="col">
                    <x-form-panel-vertical>
                        <x-slot name="label">
                            <x-label for="gender" class="form-label required">Gender</x-label>
                        </x-slot>
                        <x-input type="text" class="{{ $errors->has('delegateForm.gender') ? 'is-invalid' : '' }}"
                            id="gender" wire:model="delegateForm.gender" />
                        <x-input-error for="delegateForm.gender" />
                    </x-form-panel-vertical>
                </div>
                <div class="col">
                    <x-form-panel-vertical>
                        <x-slot name="label">
                            <x-label for="profile-photo" class="form-label required">Profile photo</x-label>
                        </x-slot>
                        <x-input type="file"
                            class="{{ $errors->has('delegateForm.profile_photo') ? 'is-invalid' : '' }}"
                            id="profile-photo" wire:model="delegateForm.profile_photo" />
                        <x-input-error for="delegateForm.profile_photo" />
                    </x-form-panel-vertical>
                </div>
            </div>
            <x-form-panel-vertical>
                <x-slot name="label">
                    <x-label for="sport" class="form-label required">Sport</x-label>
                </x-slot>
                <x-select class="{{ $errors->has('delegateForm.sport_id') ? 'is-invalid' : '' }}" id="sport"
                    wire:model.live="delegateForm.sport_id">
                    <option selected></option>
                    @foreach ($this->sports as $sport)
                    <option value="{{$sport->id}}">{{$sport->name}}</option>
                    @endforeach
                </x-select>
                <x-input-error for="delegateForm.sport_id" />
            </x-form-panel-vertical>
            <h4 class="text-muted">Address Details</h4>
            <x-form-panel-vertical>
                <x-slot name="label">
                    <x-label for="address" class="form-label required">Address</x-label>
                </x-slot>
                <x-input type="text" class="{{ $errors->has('delegateForm.address') ? 'is-invalid' : '' }}" id="address"
                    wire:model="delegateForm.address" />
                <x-input-error for="delegateForm.address" />
            </x-form-panel-vertical>
            <h4 class="text-muted">Contact Details</h4>
            <div class="row g-2">
                <div class="col">
                    <x-form-panel-vertical>
                        <x-slot name="label">
                            <x-label for="contact-number" class="form-label required">Contact Number</x-label>
                        </x-slot>
                        <x-input type="text"
                            class="{{ $errors->has('delegateForm.contact_number') ? 'is-invalid' : '' }}"
                            id="contact-number" wire:model="delegateForm.contact_number" />
                        <x-input-error for="delegateForm.contact_number" />
                    </x-form-panel-vertical>
                </div>
                <div class="col">
                    <x-form-panel-vertical>
                        <x-slot name="label">
                            <x-label for="email" class="form-label required">Contact Email</x-label>
                        </x-slot>
                        <x-input type="text" class="{{ $errors->has('delegateForm.email') ? 'is-invalid' : '' }}"
                            id="email" wire:model="delegateForm.email" />
                        <x-input-error for="delegateForm.email" />
                    </x-form-panel-vertical>
                </div>
            </div>
            <x-button form="{{ $formAction }}" class="btn-primary">
                <x-loading target="addTeamMember, updateTeamMember" size="sm" />
                {{ ($formAction == 'addTeamMember') ? 'Create' : 'Update' }}
            </x-button>
        </form>
    </x-offcanvas>
</div>