<div {{ $attributes->merge(['class' => 'wissiewig']) }} {!! $attributes->except('class') !!}>
    {!! $slot !!}
</div>
