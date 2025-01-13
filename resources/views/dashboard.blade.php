<x-app-layout>
    <x-slot name="header">
        Dashboard
    </x-slot>
    <x-slot name="sub_header">This is a subheader</x-slot>

    <div class="container">
        <x-welcome />
        <button type="button" class="btn btn-primary" wire:click="$toggle('exampleModal')">
            Launch demo modal
        </button>

        <x-confirmation-modal wire:model.live="exampleModal" color="success">
            <x-slot name="title">Header</x-slot>
            <x-slot name="content">
                <p>sdjfnsdfkds</p>
            </x-slot>
            <x-slot name="footer">asd</x-slot>
        </x-confirmation-modal>
    </div>
</x-app-layout>