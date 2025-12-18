<x-layouts.main-article>
    <h1>Edit User</h1>
    <h2>{{ $user->getOriginal('name') }}</h2>

    <form wire:submit.prevent="save">
        <x-cds.callout-error heading="Please address these errors" />

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
        <x-cds.button :href="route('admin.users')" variant="secondary">
            Cancel
        </x-cds.button>
    </form>
</x-layouts.main-article>
