@props([
    // 'variant' => 'danger',
    // 'color' => 'red',
    'icon' => 'exclamation-triangle',
])

<flux:callout
    {{-- variant="{{ $variant }}" --}}
    {{-- color="{{ $color }}" --}}
    icon="{{ $icon }}"
    {{ $attributes }}
>
    {{ $slot }}
</flux:callout>
