@props(['match'])

@php
    $isActive = $match && request()->is($match);
@endphp

<li @class(['current_page_ancestor' => $isActive])>
    {{ $slot }}
</li>
