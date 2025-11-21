<div>
<x-cds.layout.app title="CD Laravel Base" subtitle="Custom Development">
    <article id="main-article">
        <div class="region padded">
            <div class="container">
                <div class="layout">
                    <div class="article">
                        <h1>Table</h1>

                        <p>
                            This is a sample table using the Cornell Design System styles.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="region padded-small tint">
            <div class="container container-full">
                <div class="section">
                    <h2>Table</h2>
                    <flux:separator />
                </div>
                <div class="layout layout-1-1 padded-small">
                    <div class="section">
                        <h3>Flux Components</h3>

                        <table class="cds-table cds-table-striped cds-table-hover cds-table-bordered">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>created_at</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                <flux:separator class="mb-4" />

{{-- <flux:table>
    <flux:table.columns>
        <flux:table.column>Customer</flux:table.column>
        <flux:table.column sortable :sorted="$sortBy === 'name'" :direction="$sortDirection" wire:click="sort('name')">Name</flux:table.column>
        <flux:table.column sortable :sorted="$sortBy === 'email'" :direction="$sortDirection" wire:click="sort('email')">Email</flux:table.column>
        <flux:table.column sortable :sorted="$sortBy === 'created_at'" :direction="$sortDirection" wire:click="sort('created_at')">Created At</flux:table.column>
    </flux:table.columns>
    <flux:table.rows>
        @foreach($users as $user)
            <flux:table.row :key="$user->id">
                <flux:table.cell class="flex items-center gap-3">{{ $user->name }}</flux:table.cell>
                <flux:table.cell class="whitespace-nowrap">{{ $user->email }}</flux:table.cell>
                <flux:table.cell variant="strong">{{ $user->created_at }}</flux:table.cell>
                <flux:table.cell>
                    <flux:button variant="ghost" size="sm" icon="ellipsis-horizontal" inset="top bottom"></flux:button>
                </flux:table.cell>
            </flux:table.row>
        @endforeach
    </flux:table.rows>
</flux:table> --}}


            </div>
        </div>
    </article>
</x-cds.layout.app>
</div>
