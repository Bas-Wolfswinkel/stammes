<x-container>
    <div class="grid grid-cols-1 gap-y-[65px] lg:grid-cols-12 lg:grid-rows-1">
        <div class="z-20 space-y-6 lg:col-span-6 lg:col-start-1 lg:row-span-full">
            @if ($title = get_sub_field('title'))
                <h2 class="max-sm:text-[30px] text-title-medium">
                    {!! App\Helper::title($title) !!}</h2>
            @endif
            @if ($content = get_sub_field('content'))
                <div class="text-body lg:max-w-[410px]">
                    {!! $content !!}
                </div>
            @endif
            @if ($link = get_sub_field('link'))
                <x-button class="mt-1" href="{{ $link['url'] }}">
                    {!! $link['title'] !!}
                </x-button>
            @endif
        </div>
        <div class="lg:col-span-8 lg:col-start-5 lg:row-span-full">
            @if ($image = get_sub_field('image'))
                <img class="h-full w-full object-contain object-top" src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" />
            @endif
        </div>
    </div>
</x-container>
