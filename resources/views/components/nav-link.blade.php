@props(['active'])

@php
$classes = ($active ?? false)
? 'nav-link active text-decoration-underline'
: 'nav-link';
@endphp

<li class="nav-item">
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>