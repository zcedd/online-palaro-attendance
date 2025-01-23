<div>
    <x-form-section-vertical submit="{{ $formAction }}">
        <x-slot name="title">
            Emergency Contact Information
        </x-slot>
        <x-slot name="description">
            Please provide the contact person's information in case of emergency.
        </x-slot>
        <x-slot name="form">
            <x-action-message on="savedEmergencyContact">
                {{ __('Saved.') }}
            </x-action-message>
            <div class="mb-3">
                <x-label for="contact-person" value="{{ __('Contact Person') }}" />
                <x-input id="contact-person" type="text"
                    class="{{ $errors->has('form.contact_person') ? 'is-invalid' : '' }}"
                    wire:model.defer="form.contact_person" />
                <x-input-error for="form.contact_person" />
            </div>
            <div class="mb-3">
                <x-label for="contact-number" value="{{ __('Contact Number') }}" />
                <x-input id="contact-number" type="number"
                    class="{{ $errors->has('form.contact_number') ? 'is-invalid' : '' }}"
                    wire:model.defer="form.contact_number" />
                <x-input-error for="form.contact_number" />
            </div>
            <div class="mb-3">
                <x-label for="contact-email" value="{{ __('Contact Email') }}" />
                <x-input id="contact-email" type="text"
                    class="{{ $errors->has('form.contact_email') ? 'is-invalid' : '' }}"
                    wire:model.defer="form.contact_email" />
                <x-input-error for="form.contact_email" />
            </div>
        </x-slot>
        <x-slot name="actions">
            <x-button class="btn-primary">
                <x-loading target="{{ $formAction }}" size="sm" />
                {{ ($formAction == 'createDelegationTeam') ? 'Create' : 'Update' }}
            </x-button>
        </x-slot>
    </x-form-section-vertical>
</div>