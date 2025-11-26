@props([
    'name',
    'label' => null,
])

@php
    $id = $name;
@endphp

<flux:field class="select-dropdown">
    <flux:label for="{{ $id }}">{{ $label }}</flux:label>
    <flux:select
        name="{{ $name }}"
        id="{{ $id }}"
    >
        {{ $slot }}
    </flux:select>
</flux:field>
