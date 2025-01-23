@props(['submit'])

<div {{ $attributes->merge(['class' => '']) }}>
    <div class="card shadow-sm">
        <form wire:submit="{{ $submit }}">
            <div class="card-body">
                <x-section-title>
                    <x-slot name="title">{{ $title }}</x-slot>
                    <x-slot name="description">
                        <span class="small">
                            {{ $description }}
                        </span>
                    </x-slot>
                </x-section-title>
                {{ $form }}
            </div>

            @if (isset($actions))
            <div class="card-footer bg-white d-flex justify-content-end">
                {{ $actions }}
            </div>
            @endif
        </form>
    </div>
</div>