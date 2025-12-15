<x-layouts.main-article>
    <h1>Edit User</h1>
    <h2>{{ $user->name }}</h2>

    <form wire:submit.prevent="updateUser">
        <x-cds.input
            label="Name"
            wire:model="user.name"
            required
        />

        <x-cds.input
            label="Email"
            type="email"
            wire:model="user.email"
            required
        />

        <x-cds.button type="submit">
            Save Changes
        </x-cds.button>
        <x-cds.button href="{{ route('admin.users') }}">
            Cancel
        </x-cds.button>
    </form>
</x-layouts.main-article>
