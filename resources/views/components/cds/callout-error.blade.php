@props([
    'icon' => 'exclamation-triangle',
    'heading' => 'Errors Found',
    'errors' => $errors,
])
@if($errors->any())
<flux:callout :$attributes >
    <flux:callout.heading icon="{{ $icon }}">{{ $heading }}</flux:callout.heading>

    <flux:callout.text>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </flux:callout.text>
</flux:callout>
@endif
