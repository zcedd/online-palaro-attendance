@props(['disabled' => false])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-select bg-white']) !!} >
    {{ $slot }}
</select>