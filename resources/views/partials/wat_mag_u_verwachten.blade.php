<x-container class="grid grid-cols-1 gap-[60px] md:grid-cols-2">
    <div class="relative">
        @if ($image = get_sub_field('image'))
            <img class="h-auto w-[95%] ml-auto object-contain lg:w-full" src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
            @if ($color = App\Helper::get_colorpicker('foto'))
                <div class="absolute -top-[10%] left-0 -z-10 h-[90%] w-2/3 lg:-left-[10%]"
                    style="background-color: {{ $color }}"></div>
            @endif
        @endif
    </div>
    <div class="place-content-center">
        <div class="lg:ml-auto lg:max-w-[83%]">
            @if (get_sub_field('title'))
                <h2 class="text-green text-title-small">{!! App\Helper::title() !!}</h2>
            @endif
            @if ($content = get_sub_field('content'))
                <x-wissiewig class="mt-5">
                    {!! $content !!}
                </x-wissiewig>
            @endif
        </div>

    </div>

</x-container>
