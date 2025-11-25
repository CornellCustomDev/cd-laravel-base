@props([
    'label'   => null,   // group label OR single checkbox label
    'model',
    'options' => null,  // if array → group mode; if null → single mode
])

{{-- Group Mode (options array is passed) --}}
@if (is_array($options))
    <flux:field class="checkbox-group">
        @if ($label)
            <flux:label>{{ $label }}</flux:label>
        @endif

        <flux:checkbox.group wire:model="{{ $model }}">
            @foreach ($options as $value => $text)
                <flux:checkbox
                    :value="$value"
                    :label="$text"
                />
            @endforeach
        </flux:checkbox.group>

        <flux:error name="{{ $model }}" />
    </flux:field>

{{-- Single Checkbox Mode --}}
@else
    <flux:field variant="inline" class="checkbox-single">
        <flux:checkbox wire:model="{{ $model }}" />

        @if ($label)
            <flux:label>{{ $label }}</flux:label>
        @endif

        <flux:error name="{{ $model }}" />
    </flux:field>
@endif
