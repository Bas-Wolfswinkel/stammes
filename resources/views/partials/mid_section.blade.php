@php
    $image = get_sub_field('image');
    $color = App\Helper::get_colorpicker('image_color');
    $title = App\Helper::title(get_sub_field('title'));
    $content = get_sub_field('content');
@endphp
<div class="bg-opacity-green py-[65px] lg:mt-[100px] lg:pb-[174px]">
    <x-container>
        <div class="flex grid-cols-2 flex-col-reverse gap-10 lg:grid lg:items-center">
            @if ($image)
                <div class="relative mt-[30px] max-lg:ml-auto max-lg:w-fit lg:mt-[50px]">
                    <img class="max-h-[384px] w-fit object-contain lg:ml-0 lg:max-h-[700px] lg:w-full" src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                    @if ($color)
                        <div class="absolute left-0 top-0 -z-10 h-[85%] w-[75%] -translate-x-[30px] -translate-y-[30px] lg:h-[70%] lg:w-[60%] lg:-translate-x-[50px] lg:-translate-y-[50px]" style="background-color: {{ $color }}"></div>
                    @endif
                </div>
            @endif
            <div>
                @if ($title)
                    <h3 class="text-40-40-300 lg:text-70-80-300 text-green uppercase">
                        {!! $title !!}
                    </h3>
                @endif
                @if ($content)
                    <x-wissiewig class="mt-6 lg:mt-8">
                        {!! $content !!}
                    </x-wissiewig>
                @endif
            </div>
        </div>
    </x-container>
</div>
