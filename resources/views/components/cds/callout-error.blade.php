@props([
    'icon' => 'exclamation-triangle',
    'heading' => 'Errors Found',
])
@if($errors->any())
<flux:callout
    icon="{{ $icon }}"
    {{ $attributes }}
>
    <flux:callout.heading>{{ $heading }}</flux:callout.heading>

    <flux:callout.text>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </flux:callout.text>
</flux:callout>
@endif
