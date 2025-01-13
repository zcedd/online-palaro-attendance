<div>
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-12">
                <h2>SVG Icons</h2>
                <p>This template uses svg icons from different sources, e.g. fontawesome. This enables us to not
                    explicitly
                    include icons' cdn.</p>
                <p>Make sure to include .awesome-icon to svg.</p>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <h2>Creating buttons and button-like links</h2>
                <p> To create icon action button <x-button class="pointer">
                        <x-awesome.add></x-awesome.add>
                    </x-button> use</p>
                <pre>&lt;x-button class="pointer"&gt;&lt;x-awesome.add&gt;&lt;/x-awesome.add&gt;&lt;/x-button&gt;</pre>
                <p> To create text action button <x-button class="btn btn-light">Add</x-button> use</p>
                <pre>&lt;x-button class="btn btn-light"&gt;Add&lt;/x-button&gt;</pre>
                <p> To create icon-text action button <x-button class="btn btn-light">
                        <x-awesome.add></x-awesome.add> Add
                    </x-button> use</p>
                <pre>&lt;x-button class="btn btn-light"&gt;&lt;x-awesome.add&gt;&lt;/x-awesome.add&gt; Add&lt;/x-button&gt;</pre>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2>Using Powergrid</h2>
                Important:
                <ul>
                    <li>Use svg icons from resources->views->component->awesome e.g.
                        <pre>&lt;x-awesome.edit&gt;&lt;/x-awesome.edit&gt;</pre>
                    </li>
                </ul>
                <livewire:dashboard.user-table />
            </div>
        </div>
    </div>

    <x-dialog-modal wire:model="CreateUser">
        <x-slot name="title">Example</x-slot>
        <x-slot name="content">
            <x-form-panel>
                <x-slot name="label">Full Name </x-slot>
                <x-input type="text" wire:model.live="name"></x-input>
            </x-form-panel>
            <x-form-panel>
                <x-slot name="label">Email</x-slot>
                <x-input type='text' wire:model.live="email"></x-input>
            </x-form-panel>
            <x-form-panel>
                <x-slot name="label">Password</x-slot>
                <x-input type='password' wire:model.live="password"></x-input>
            </x-form-panel>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$toggle('CreateUser')">Cancel</x-secondary-button>
            <x-button class="btn btn-primary" wire:click="create">Create</x-button>
        </x-slot>
    </x-dialog-modal>
</div>