@props([
    'legend' => null,
])

<fieldset {{ $attributes }}>
    <?php if ($legend): ?>
    <legend {{ $legend->attributes }}>
        {!! $legend !!}
    </legend>
    <?php endif; ?>

    {{ $slot }}
</fieldset>
