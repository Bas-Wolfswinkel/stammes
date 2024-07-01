<x-container>

    <div class="space-y-3 sm:max-w-[456px] md:space-y-[20px]">
        @if ($title = get_sub_field('title'))
            <h2 class="text-[35px] font-[300] uppercase leading-[35px] text-black lg:text-[45px] lg:leading-[45px]">
                {!! App\Helper::title($title) !!}
            </h2>
        @endif
        @if ($content = get_sub_field('content'))
        <div class="text-body">
                {!! $content !!}
            </div>
        @endif
    </div>
</x-container>
<x-container class="max-xl:mt-[50px] max-xl:pr-0">
    <div class="grid gap-[50px] md:mt-[25px] xl:grid-cols-4" x-data="{ scrollPercentage: 0 }">
        <div class="max-lg:order-2 max-lg:text-center">
            @if ($link = get_sub_field('link'))
                <x-button href="{{ $link['url'] }}">
                    {!! $link['title'] !!}
                </x-button>
            @endif
        </div>
        @if ($usps = get_sub_field('usps'))
            <div class="max-xl:hide-scrollbar flex flex-nowrap max-xl:snap-x max-xl:snap-mandatory max-xl:gap-[20px] max-xl:overflow-x-auto max-xl:pr-6 xl:col-span-3 xl:grid xl:grid-cols-3"
                @scroll="scrollPercentage = ($el.scrollLeft / ($el.scrollWidth - $el.clientWidth)) * 100">
                @foreach ($usps as $usp)
                    <div class="flex-shrink-0 space-y-[18px] max-xl:w-[302px] max-xl:snap-start">
                        @if ($img = $usp['image'])
                            <img class="h-[102px] object-contain object-top" src="{{ $img['url'] }}"
                                alt="{{ $img['alt'] }}" />
                        @endif
                        <div class="text-[27px] font-[600] uppercase leading-[27px] text-black">
                            {!! $usp['usp'] !!}
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mr-6">
                <div class="bg-green/30 relative mx-auto h-[6px] w-[214px] lg:hidden">
                    <div class="bg-green absolute left-0 top-0 h-full" :style="{ width: scrollPercentage + '%' }"></div>
                </div>
            </div>

        @endif
    </div>
</x-container>
