@props(['href'])

@php
    $linkPath = trim(parse_url($href, PHP_URL_PATH) ?? '', '/');

    $currentPath = trim(request()->path() ?? '', '/');

    $isActive = $linkPath === $currentPath;
@endphp

<li @class(['current_page_item' => $isActive])>
    <a href="{{ $href }}" @if($isActive) aria-current="page" @endif>
        {{ $slot }}
    </a>
</li>
