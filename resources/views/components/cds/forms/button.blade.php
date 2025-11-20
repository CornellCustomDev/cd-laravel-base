@props([
    'type' => 'button',
])

<button
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' => ''
    ]) }}
>
    {{ $slot }}
</button>
