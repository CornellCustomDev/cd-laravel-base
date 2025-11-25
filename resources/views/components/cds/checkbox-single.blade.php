@props([
    'label' => null,
    'model',
])

<flux:field variant="inline" class="checkbox-single">
    <flux:checkbox wire:model="{{ $model }}" />
    <flux:label>{{ $label }}</flux:label>
    <flux:error name="{{ $model }}" />
</flux:field>
