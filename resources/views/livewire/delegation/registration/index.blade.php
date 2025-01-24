<div>
    <h4>Welcome to SPARK!</h4>
    <p>In preparation for your arrival in Ilocos Norte for the Palarong Pambansa 2025, you are required to input your
        delegates’ information. This will enable us to prepare better, to give you an INcredible Ilocos Norte
        experience.</p>

    <div class="mb-3">
        <livewire:delegation.registration.team-contact-section />
    </div>

    <div class="mb-3">
        <livewire:delegation.registration.team-member-section />
    </div>

    <x-form-section-vertical submit="submit">
        <x-slot name="title">
            Certification and Submission
        </x-slot>
        <x-slot name="description">
            By submitting this form, you agree to the terms and conditions of the Palarong Pambansa 2025.
        </x-slot>
        <x-slot name="form">
            <div class="mb-2">
                <div class="form-check">
                    <x-checkbox id="certify" wire:model="certify"
                        class="{{ $errors->has('certify') ? 'is-invalid' : '' }}" />
                    <x-label class="form-label" for="certify">I certify that the information provided is true and
                        correct.
                    </x-label>
                    <x-input-error for="certify" />
                </div>
            </div>
        </x-slot>
        <x-slot name="actions">
            <x-button type="submit" class="btn-primary">Submit</x-button>
        </x-slot>
    </x-form-section-vertical>
</div>