@props([
    'label',
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'description' => null,
    'descriptionTrailing' => null,
    'badge' => null,
    'errorMessage' => null,
])

@php
$badge ??= $attributes->whereStartsWith('required')->isNotEmpty() ? 'Required' : null;
@endphp

{{-- @see https://fluxui.dev/components/input --}}
<flux:field>
    <flux:label :$badge>{!! $label !!}</flux:label>

    @if ($description)
        <flux:description class="-mt-1! mb-1!">{!! $description !!}</flux:description>
    @endif

    <flux:input :$attributes />

    <flux:error :$name :message="$errorMessage" />

    @if ($descriptionTrailing)
        <flux:description class="-mt-4!">{!! $descriptionTrailing !!}</flux:description>
    @endif

</flux:field>
