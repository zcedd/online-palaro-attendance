<div>
    {{-- Be like water. --}}
    <x-slot name="header">
        Manage User Accounts
    </x-slot>

    <x-slot name="subheader">
        Create, update and delete accounts.
    </x-slot>

    <div class="container">
        {{--
        <livewire:administrator.users.users /> --}}
    </div>

    <x-dialog-modal wire:model="createUserModal">
        <x-slot name="title">User Account</x-slot>
        <x-slot name="content">
            <x-form-panel>
                <x-slot name="label">Full Name </x-slot>
                <x-input type="text" name="name" wire:model.live="name"></x-input>
            </x-form-panel>
            <x-form-panel>
                <x-slot name="label">Email</x-slot>
                <x-input type='text' name="email" wire:model.live="email"></x-input>
            </x-form-panel>
            <x-form-panel>
                <x-slot name="label">Password</x-slot>
                <x-input type='password' name="password" wire:model.live="password"></x-input>
            </x-form-panel>
            <x-form-panel>
                <x-slot name="label">Role</x-slot>
                <x-dropdown name="role" wire:model.live="role">
                    @foreach($roles as $role)
                    <option value="{{$role}}">{{$role}}</option>
                    @endforeach
                </x-dropdown>
            </x-form-panel>
        </x-slot>
        <x-slot name="footer">
            <x-button class="btn-primary" wire:click="SaveUser" type="save">Save</x-button>
        </x-slot>
    </x-dialog-modal>
</div>