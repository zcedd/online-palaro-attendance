@props(['id', 'maxWidth', 'placement'])

@php
$id = $id ?? md5($attributes->wire('model'));

$maxWidth = [
'default' => 'offcanvas',
'sm' => 'offcanvas-sm',
'md' => 'offcanvas-md',
'lg' => 'offcanvas-lg',
'xl' => 'offcanvas-xl',
'xxl' => 'offcanvas-xxl',
][$maxWidth ?? 'default'];

$placement = [
'start' => ' offcanvas-start',
'end' => ' offcanvas-end',
'top' => ' offcanvas-top',
'bottom' => ' offcanvas-bottom',
][$placement ?? 'start'];
@endphp

<!-- Offcanvas -->
<div x-data="{
    show: @entangle($attributes->wire('model')).live,
}" x-init="() => {

    let el = document.querySelector('#offcanvas-id-{{ $id }}')

    let offcanvas = new bootstrap.Offcanvas(el);

    $watch('show', value => {
        if (value) {
            offcanvas.show()
        } else {
            offcanvas.hide()
        }
    });

    el.addEventListener('hide.bs.offcanvas', function (event) {
        show = false
    })
}" wire:ignore.self class="{{ $maxWidth }}{{ $placement }}" tabindex="-1" id="offcanvas-id-{{ $id }}"
    data-bs-backdrop="static" aria-labelledby="offcanvas-id-{{ $id }}" aria-hidden="true"
    x-ref="offcanvas-id-{{ $id }}">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">{{ $title }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        {{ $slot }}
    </div>
</div>