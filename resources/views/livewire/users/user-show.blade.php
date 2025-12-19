<x-layouts.main-article>
    <h1>User: {{ $user->name }}</h1>

    <div class="mb-5">
        <flux:heading level="3" class="mb-0">
            Name
        </flux:heading>
        <div>{{ $user->name }}</div>
    </div>

    <div class="mb-5">
        <flux:heading level="3" class="mb-0">
            Email
        </flux:heading>
        <div>{{ $user->email }}</div>
    </div>

    <x-cds.button :href="route('examples/users/edit', $user)">
        Edit
    </x-cds.button>

    <x-cds.button :href="route('examples/table')">
        Back to Users
    </x-cds.button>
</x-layouts.main-article>
