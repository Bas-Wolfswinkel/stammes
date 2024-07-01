@php
    $element = $attributes->get('element', 'a');
    if ($element === 'a' && !$attributes->has('href')) {
        $element = 'button';
    }

    $defaultClasses =
        'rounded-[6px] text-button inline-flex uppercase font-lato text-white transition-colors duration-300 ease-in-out';

    $variants = [
        'primary' => 'bg-gold hover:bg-hoverGold',
        'outline' => '',
    ];

    $sizes = [
        'base' => 'px-4 py-1',
    ];
@endphp

<{{ $element }}
    class="{{ $defaultClasses }} {{ $variants[$attributes->get('variant', 'primary')] }} {{ $sizes[$attributes->get('size', 'base')] }} {{ $attributes->get('class') }}"
    @foreach ($attributes->except(['class', 'variant', 'size', 'element']) as $key => $value)
        {{ $key }}="{{ $value }}" @endforeach>
    {{ $slot }}
    </{{ $element }}>
