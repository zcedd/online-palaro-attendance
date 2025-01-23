@props(['on', 'color'])

@php
$color = [
'success' => ' alert-success',
'danger' => ' alert-danger',
'primary' => ' alert-primary',
'secondary' => ' alert-secondary',
'warning' => ' alert-warning',
'info' => ' alert-info',
'light' => ' alert-light',
'dark' => ' alert-dark',
][$color ?? 'success'];
@endphp

<div role="alert" x-data="{ shown: false, timeout: null }"
    x-init="@this.on('{{ $on }}', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })"
    x-show.transition.opacity.out.duration.1500ms="shown" style="display: none;" {{ $attributes->merge(['class' =>
    'small alert'.$color]) }}>
    <div class="alert-body">
        {{ $slot->isEmpty() ? 'Saved.' : $slot }}
    </div>
</div>