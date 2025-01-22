<div>
    <div class="card text-start">
        <div class="card-body">
            <h4 class="card-title">Emergency Contact Details</h4>
            <form wire:submit="{{ $formAction }}" id="{{ $formAction }}">
                <x-form-panel>
                    <x-slot name="label">
                        <x-label for="contact-person" class="form-label required">Contact Person</x-label>
                    </x-slot>
                    <x-input type="text" class="{{ $errors->has('form.contact_person') ? 'is-invalid' : '' }}"
                        id="contact-person" wire:model="form.contact_person" />
                    <x-input-error for="form.contact_person" />
                </x-form-panel>
                <x-form-panel>
                    <x-slot name="label">
                        <x-label for="contact-number" class="form-label required">Contact Number</x-label>
                    </x-slot>
                    <x-input type="number" class="{{ $errors->has('form.contact_number') ? 'is-invalid' : '' }}"
                        id="contact-number" wire:model="form.contact_number" />
                    <x-input-error for="form.contact_number" />
                </x-form-panel>
                <x-form-panel>
                    <x-slot name="label">
                        <x-label for="contact-email" class="form-label required">Contact Email</x-label>
                    </x-slot>
                    <x-input type="text" class="{{ $errors->has('form.contact_email') ? 'is-invalid' : '' }}"
                        id="contact-email" wire:model="form.contact_email" />
                    <x-input-error for="form.contact_email" />
                </x-form-panel>
                <x-button form="{{ $formAction }}" class="btn-primary">
                    <x-loading target="createDelegationTeam, updateDelegationTeam" size="sm" />
                    {{ ($formAction == 'createDelegationTeam') ? 'Create' : 'Update' }}
                </x-button>
            </form>
        </div>
    </div>
</div>