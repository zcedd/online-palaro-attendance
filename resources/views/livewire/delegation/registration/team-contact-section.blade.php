<div>
    <x-form-section-vertical submit="{{ $formAction }}">
        <x-slot name="title">
            Emergency Contact Information
        </x-slot>
        <x-slot name="description">
            Please provide the contact person's information in case of emergency.
        </x-slot>
        <x-slot name="form">
            <div class="row g-2">
                <div class="col-md-6">
                    <div class="mb-3">
                        <x-label for="contact-person" class="form-label required" value="{{ __('Contact Person') }}" />
                        <x-input id="contact-person" type="text"
                            class="{{ $errors->has('form.contact_person') ? 'is-invalid' : '' }}"
                            wire:model="form.contact_person" />
                        <x-input-error for="form.contact_person" />
                    </div>
                    <div class="mb-3">
                        <x-label for="contact-number" class="form-label required" value="{{ __('Contact Number') }}" />
                        <x-input id="contact-number" type="number"
                            class="{{ $errors->has('form.contact_number') ? 'is-invalid' : '' }}"
                            wire:model="form.contact_number" />
                        <x-input-error for="form.contact_number" />
                    </div>
                    <div class="mb-3">
                        <x-label for="contact-email" class="form-label required" value="{{ __('Contact Email') }}" />
                        <x-input id="contact-email" type="text"
                            class="{{ $errors->has('form.contact_email') ? 'is-invalid' : '' }}"
                            wire:model="form.contact_email" />
                        <x-input-error for="form.contact_email" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <x-label for="alternative-contact-person" class="form-label"
                            value="{{ __('Alternative Contact Person') }}" />
                        <x-input id="alternative-contact-person" type="text"
                            class="{{ $errors->has('form.alternative_contact_person') ? 'is-invalid' : '' }}"
                            wire:model="form.alternative_contact_person" />
                        <x-input-error for="form.alternative_contact_person" />
                    </div>
                    <div class="mb-3">
                        <x-label for="alternative-contact-number" class="form-label"
                            value="{{ __('Alternative Contact Number') }}" />
                        <x-input id="alternative-contact-number" type="number"
                            class="{{ $errors->has('form.alternative_contact_number') ? 'is-invalid' : '' }}"
                            wire:model.defer="form.alternative_contact_number" />
                        <x-input-error for="form.alternative_contact_number" />
                    </div>
                    <div class="mb-3">
                        <x-label for="alternative-contact-email" class="form-label"
                            value="{{ __('Alternative Contact Email') }}" />
                        <x-input id="alternative-contact-email" type="text"
                            class="{{ $errors->has('form.alternative_contact_email') ? 'is-invalid' : '' }}"
                            wire:model.defer="form.alternative_contact_email" />
                        <x-input-error for="form.alternative_contact_email" />
                    </div>
                </div>
            </div>
        </x-slot>
        <x-slot name="actions">
            <x-action-message on="savedEmergencyContact" class="me-1 mb-0" />
            <x-action-message on="somethingWentWrong" color="danger" class="me-1 mb-0">
                Opps! Something went wrong. Please try again.
            </x-action-message>

            <x-button class="btn-primary">
                <x-loading target="{{ $formAction }}" size="sm" />
                {{ ($formAction == 'createDelegationTeam') ? 'Create' : 'Update' }}
            </x-button>
        </x-slot>
    </x-form-section-vertical>
</div>