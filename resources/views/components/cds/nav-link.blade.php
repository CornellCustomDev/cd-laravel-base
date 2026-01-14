@props(['href'])

@php
    $href = (string) $href;

    $current = rtrim(url()->current(), '/');
    $currentPath = trim(parse_url($current, PHP_URL_PATH) ?? '', '/');

    // Resolve $href into a usable URL for the <a>
    if (filter_var($href, FILTER_VALIDATE_URL)) {
        // Already a full URL (external or internal)
        $target = rtrim($href, '/');
    } else {
        try {
            // Try as a named route
            $target = rtrim(route($href), '/');
        } catch (\Throwable $e) {
            // Treat as a path like "/" or "/active/active-nav-link"
            $target = rtrim(url($href), '/');
        }
    }

    $targetPath = trim(parse_url($target, PHP_URL_PATH) ?? '', '/');

    // Active if path matches (works for both route() URLs and direct paths)
    $isActive = $currentPath === $targetPath;
@endphp

<a href="{{ $target }}"
   {{ $attributes->merge([
        'class' => 'nav-link ' . ($isActive ? 'is-active' : '')
   ]) }}
   @if($isActive) aria-current="page" @endif
>
    {{ $slot }}
</a>
