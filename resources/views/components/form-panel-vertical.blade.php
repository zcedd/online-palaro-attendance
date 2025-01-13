<div {{ $attributes->merge(['class' => 'mb-2']) }}>
    <label for="" class=" small">{{$label}}</label>
    {{$slot}}
</div>
