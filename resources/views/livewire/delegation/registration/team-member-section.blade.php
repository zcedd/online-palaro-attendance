<div>
    <div class="card">
        <div class="card-body">
            <x-section-title class="mb-4">
                <x-slot name="title">Members List</x-slot>
                <x-slot name="description">
                    <span class="small">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit, sequi.
                    </span>
                </x-slot>
            </x-section-title>

            <x-action-message on="somethingWentWrong" color="danger">
                Opps! Something went wrong. Please try again.
            </x-action-message>

            <x-action-message on="teamMemberDeleted">
                Team member has been deleted.
            </x-action-message>

            <livewire:delegation.registration.team-member-table />
        </div>
    </div>

    <x-delete-confirmation-modal wire:model="deleteTeamMemberModal">
        <x-slot name="title">
            Delete Team Member
        </x-slot>
        <x-slot name="content">
            Are you sure you want to delete this team member?
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('deleteTeamMemberModal')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>
            <x-button class="btn-danger" wire:click="deleteTeamMember">
                <x-loading target="deleteTeamMember" size="sm" />
                Delete
            </x-button>
        </x-slot>
    </x-delete-confirmation-modal>


    <x-offcanvas wire:model.live="teamMemberOffcanvas">
        <x-slot name="title">
            Add Delegate Information
        </x-slot>
        <x-form-section-vertical submit="{{ $formAction }}">
            <x-slot name="form">
                <x-slot name="title">
                    Personal Information
                </x-slot>
                <x-slot name="description">
                    <span class="small">
                        Please provide the delegate's personal information.
                    </span>
                </x-slot>
                <div class="row g-2">
                    <div class="col">
                        <x-form-panel-vertical>
                            <x-slot name="label">
                                <x-label for="first-name" class="form-label required">First name</x-label>
                            </x-slot>
                            <x-input type="text"
                                class="{{ $errors->has('delegateForm.first_name') ? 'is-invalid' : '' }}"
                                id="first-name" wire:model="delegateForm.first_name" />
                            <x-input-error for="delegateForm.first_name" />
                        </x-form-panel-vertical>
                    </div>
                    <div class="col">
                        <x-form-panel-vertical>
                            <x-slot name="label">
                                <x-label for="middle-name" class="form-label">Middle name</x-label>
                            </x-slot>
                            <x-input type="text"
                                class="{{ $errors->has('delegateForm.middle_name') ? 'is-invalid' : '' }}"
                                id="middle-name" wire:model="delegateForm.middle_name" />
                            <x-input-error for="delegateForm.middle_name" />
                        </x-form-panel-vertical>
                    </div>
                    <div class="col">
                        <x-form-panel-vertical>
                            <x-slot name="label">
                                <x-label for="last-name" class="form-label required">Last name</x-label>
                            </x-slot>
                            <x-input type="text"
                                class="{{ $errors->has('delegateForm.last_name') ? 'is-invalid' : '' }}" id="last-name"
                                wire:model="delegateForm.last_name" />
                            <x-input-error for="delegateForm.first_name" />
                        </x-form-panel-vertical>
                    </div>
                    <div class="col">
                        <x-form-panel-vertical>
                            <x-slot name="label">
                                <x-label for="suffix-name" class="form-label">Suffix name</x-label>
                            </x-slot>
                            <x-select class="{{ $errors->has('delegateForm.suffix') ? 'is-invalid' : '' }}" id="suffix"
                                wire:model.live="delegateForm.suffix">
                                <option selected></option>
                                <option value="Sr">Sr.</option>
                                <option value="Jr">Jr.</option>
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                                <option value="IV">IV</option>
                                <option value="V">V</option>
                                <option value="VI">VI</option>
                                <option value="VII">VII</option>
                                <option value="VIII">VIII</option>
                            </x-select>
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
                            <x-select class="{{ $errors->has('delegateForm.gender') ? 'is-invalid' : '' }}" id="gender"
                                wire:model.live="delegateForm.gender">
                                <option selected></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </x-select>
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

                <x-section-title class="mt-4">
                    <x-slot name="title">Delegation Information</x-slot>
                    <x-slot name="description">
                        <span class="small">
                            Please provide the delegate's delegation information.
                        </span>
                    </x-slot>
                </x-section-title>
                <x-form-panel-vertical>
                    <x-slot name="label">
                        <x-label for="delegation-role" class="form-label required">
                            Role
                        </x-label>
                    </x-slot>
                    @foreach($delegateForm->delegation_role_id as $key=>$delegationRoleId)
                    <div class="row g-2 mb-3">
                        <div class="col-10">
                            <x-select
                                class="{{ $errors->has('delegateForm.delegation_role_id.'.$key) ? 'is-invalid' : '' }}"
                                id="delegation-role-{{ $key }}" wire:model="delegateForm.delegation_role_id.{{ $key }}">
                                <option selected></option>
                                @foreach ($this->delegationRoles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </x-select>
                            <x-input-error for="delegateForm.delegation_role_id.{{ $key }}" />
                        </div>
                        <div class="col-2">
                            <x-button type="button" id="remove-sport-event-{{ $key }}"
                                wire:click="removeDelegationRole({{ $key }})" class="form-control btn-danger">Remove
                            </x-button>
                        </div>
                    </div>
                    @endforeach
                </x-form-panel-vertical>
                <div class="mb-3">
                    <x-button type="button" id="add-delegation-role" wire:click="addDelegationRole"
                        class="form-control btn-primary">
                        Add Role
                    </x-button>
                </div>

                <x-section-title class="mt-4">
                    <x-slot name="title">Sport Information</x-slot>
                    <x-slot name="description">
                        <span class="small">
                            Please provide the delegate's sport information.
                        </span>
                    </x-slot>
                </x-section-title>
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
                <x-form-panel-vertical>
                    <x-slot name="label">
                        <x-label for="sport-event" class="form-label required">Sport event</x-label>
                    </x-slot>
                    @foreach($delegateForm->sport_event_id as $key=>$sportEventId)
                    <div class="row g-2 mb-3">
                        <div class="col-10">
                            <x-select
                                class="{{ $errors->has('delegateForm.sport_event_id.'.$key) ? 'is-invalid' : '' }}"
                                id="sport-event-{{ $key }}" wire:model="delegateForm.sport_event_id.{{ $key }}">
                                <option selected></option>
                                @if ($this->delegateForm->sport_id)
                                @forelse ($this->sportEvents->where('sport_id', $delegateForm->sport_id) as $sportEvent)
                                <option value="{{$sportEvent->id}}">
                                    {{ $sportEvent->category . " : " . $sportEvent->name }}
                                    {{ $sportEvent->subcategory ? " - " . $sportEvent->subcategory : "" }}
                                </option>
                                @empty
                                <option value="null">Select sport first</option>
                                @endforelse
                                @endif
                            </x-select>
                            <x-input-error for="delegateForm.sport_event_id.{{ $key }}" />
                        </div>
                        <div class="col-2 align-items-end d-flex">
                            <x-button type="button" id="remove-sport-event-{{ $key }}"
                                wire:click="removeSportEvent({{ $key }})" class="form-control btn-danger">Remove
                            </x-button>
                        </div>
                    </div>
                    @endforeach
                </x-form-panel-vertical>
                <div class="mb-3">
                    <x-button type="button" wire:click="addSportEvent" class="form-control btn-primary">
                        Add Sport Event
                    </x-button>
                </div>
                <x-section-title class="mt-4">
                    <x-slot name="title">Address Information</x-slot>
                    <x-slot name="description">
                        <span class="small">
                            Please provide the delegate's address information.
                        </span>
                    </x-slot>
                </x-section-title>
                <x-form-panel-vertical>
                    <x-slot name="label">
                        <x-label for="address" class="form-label required">Address</x-label>
                    </x-slot>
                    <x-input type="text" class="{{ $errors->has('delegateForm.address') ? 'is-invalid' : '' }}"
                        id="address" wire:model="delegateForm.address" />
                    <x-input-error for="delegateForm.address" />
                </x-form-panel-vertical>
                <x-section-title class="mt-4">
                    <x-slot name="title">Contact Information</x-slot>
                    <x-slot name="description">
                        <span class="small">
                            Please provide the delegate's contact information.
                        </span>
                    </x-slot>
                </x-section-title>
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
                <x-section-title class="mt-4">
                    <x-slot name="title">Medical Information</x-slot>
                    <x-slot name="description">
                        <span class="small">
                            Please provide the delegate's medical information.
                        </span>
                    </x-slot>
                </x-section-title>
                <x-form-panel-vertical>
                    <x-slot name="label">
                        <x-label for="blood-type" class="form-label required">Blood Type</x-label>
                    </x-slot>
                    <x-input type="text" class="{{ $errors->has('delegateForm.blood_type') ? 'is-invalid' : '' }}"
                        id="blood-type" wire:model="delegateForm.blood_type" />
                    <x-input-error for="delegateForm.blood_type" />
                </x-form-panel-vertical>
                <x-form-panel-vertical>
                    <x-slot name="label">
                        <x-label for="allergy" class="form-label required">Allergy</x-label>
                    </x-slot>
                    <x-input type="text" class="{{ $errors->has('delegateForm.allergy') ? 'is-invalid' : '' }}"
                        id="allergy" wire:model="delegateForm.allergy" />
                    <x-input-error for="delegateForm.allergy" />
                </x-form-panel-vertical>
                <x-form-panel-vertical>
                    <x-slot name="label">
                        <x-label for="chronic-illness" class="form-label required">Chronic Illness</x-label>
                    </x-slot>
                    <x-textarea class="{{ $errors->has('delegateForm.chronic_illness') ? 'is-invalid' : '' }}"
                        id="chronic-illness" wire:model="delegateForm.chronic_illness" />
                    <x-input-error for="delegateForm.chronic_illness" />
                </x-form-panel-vertical>
                <x-form-panel-vertical>
                    <x-slot name="label">
                        <x-label for="current-medication" class="form-label required">Current Medication</x-label>
                    </x-slot>
                    <x-textarea class="{{ $errors->has('delegateForm.current_medication') ? 'is-invalid' : '' }}"
                        id="current-medication" wire:model="delegateForm.current_medication" />
                    <x-input-error for="delegateForm.current_medication" />
                </x-form-panel-vertical>
                <x-form-panel-vertical>
                    <x-slot name="label">
                        <x-label for="past-medical-history" class="form-label required">Past Medical History</x-label>
                    </x-slot>
                    <x-textarea class="{{ $errors->has('delegateForm.past_medical_history') ? 'is-invalid' : '' }}"
                        id="past-medical-history" wire:model="delegateForm.past_medical_history" />
                    <x-input-error for="delegateForm.past_medical_history" />
                </x-form-panel-vertical>
                <x-form-panel-vertical>
                    <x-slot name="label">
                        <x-label for="vaccine-received" class="form-label required">Vaccine Received</x-label>
                    </x-slot>
                    <x-textarea class="{{ $errors->has('delegateForm.vaccine_received') ? 'is-invalid' : '' }}"
                        id="vaccine-received" wire:model="delegateForm.vaccine_received" />
                    <x-input-error for="delegateForm.vaccine_received" />
                </x-form-panel-vertical>
                <x-form-panel-vertical>
                    <x-slot name="label">
                        <x-label for="physical-limitation" class="form-label required">Physical Limitation</x-label>
                    </x-slot>
                    <x-textarea class="{{ $errors->has('delegateForm.physical_limitation') ? 'is-invalid' : '' }}"
                        id="vaccine-received" wire:model="delegateForm.physical_limitation" />
                    <x-input-error for="delegateForm.physical_limitation" />
                </x-form-panel-vertical>
                <x-form-panel-vertical>
                    <x-slot name="label">
                        <x-label for="recent-illness" class="form-label required">Recent Illness</x-label>
                    </x-slot>
                    <x-textarea class="{{ $errors->has('delegateForm.recent_illness') ? 'is-invalid' : '' }}"
                        id="recent-illness" wire:model="delegateForm.recent_illness" />
                    <x-input-error for="delegateForm.recent_illness" />
                </x-form-panel-vertical>
                <x-form-panel-vertical>
                    <x-slot name="label">
                        <x-label for="family-medical-history" class="form-label required">Family Medical History
                        </x-label>
                    </x-slot>
                    <x-textarea class="{{ $errors->has('delegateForm.family_medical_history') ? 'is-invalid' : '' }}"
                        id="family-medical-history" wire:model="delegateForm.family_medical_history" />
                    <x-input-error for="delegateForm.family_medical_history" />
                </x-form-panel-vertical>
                <x-form-panel-vertical>
                    <x-slot name="label">
                        <x-label for="special-medical-need" class="form-label required">Special Medical Need
                        </x-label>
                    </x-slot>
                    <x-textarea class="{{ $errors->has('delegateForm.special_medical_need') ? 'is-invalid' : '' }}"
                        id="special-medical-need" wire:model="delegateForm.special_medical_need" />
                    <x-input-error for="delegateForm.special_medical_need" />
                </x-form-panel-vertical>
            </x-slot>

            <x-slot name="actions">
                <x-action-message on="teamMemberSaved" class="me-1 mb-0" />
                <x-action-message on="somethingWentWrong" color="danger" class="me-1 mb-0">
                    Opps! Something went wrong. Please try again.
                </x-action-message>

                <x-secondary-button wire:click="$toggle('teamMemberOffcanvas')" wire:loading.attr="disabled"
                    class="me-1">
                    {{ __('Cancel') }}
                </x-secondary-button>
                <x-button class="btn-primary">
                    <x-loading target="addTeamMember, updateTeamMember" size="sm" />
                    {{ ($formAction == 'addTeamMember') ? 'Create' : 'Update' }}
                </x-button>
            </x-slot>
        </x-form-section-vertical>
    </x-offcanvas>
</div>