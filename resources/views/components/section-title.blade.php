<div {{ $attributes->merge(['class' => ' px-4 px-sm-0']) }}>
    <div class="d-flex justify-content-between">
        <div>
            <h3 class="h5 mb-0">
                {{ $title }}
            </h3>

            <p class="text-muted mb-0">
                {{ $description }}
            </p>
        </div>

        <div>
            {{ $aside ?? '' }}
        </div>
    </div>
</div>