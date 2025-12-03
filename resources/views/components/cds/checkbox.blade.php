@props([
    'label',   // group label OR single checkbox label
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'options' => null,  // if array → group mode; if null → single mode
])

{{-- Group Mode (options array is passed) --}}
@if (is_array($options))
    <flux:checkbox.group :$label :$attributes>
        @foreach ($options as $value => $text)
            <flux:checkbox
                :value="$value"
                :label="$text"
            />
        @endforeach
    </flux:checkbox.group>

{{-- Single Checkbox Mode --}}
@else
    <flux:field variant="inline">
        <flux:checkbox :$attributes />

        <flux:label>{{ $label }}</flux:label>

        <flux:error :$name />
    </flux:field>
@endif
