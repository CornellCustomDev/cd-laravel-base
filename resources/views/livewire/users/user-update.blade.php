<x-layouts.main-article>
    <h1>Edit User</h1>
    <h2>{{ $name }}</h2>

    <form wire:submit.prevent="save">
        <x-cds.input
            label="Name"
            wire:model="name"
            required
        />

        <x-cds.input
            label="Email"
            type="email"
            wire:model="email"
            required
        />

        <x-cds.button type="submit">
            Save Changes
        </x-cds.button>
        <x-cds.button onclick="history.back()">
            Cancel
        </x-cds.button>
    </form>
</x-layouts.main-article>
