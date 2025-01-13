@props(['active'])

@php
$classes = ($active ?? false)
? 'nav-link active fw-bold'
: 'nav-link';
@endphp

<li class="nav-item">
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
</li>