@props(['target', 'size'])

@php
$size = [
'sm' => ' spinner-border-sm',
'md' => '',
'lg' => ' spinner-border-lg',
'xl' => ' spinner-border-xl',
][$size ?? 'md'];
@endphp

<div wire:loading wire:target="{{ $target }}" class="spinner-border{{ $size }}" role="status">
    <span class="visually-hidden">Loading...</span>
</div>