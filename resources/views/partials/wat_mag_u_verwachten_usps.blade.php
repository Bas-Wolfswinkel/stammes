<section class="bg-light-green/20 pb-[96px] pt-[111px]">
    <x-container>
        @if (get_sub_field('title'))
            <h2 class="text-title-small text-green mb-[72px] text-center">{!! App\Helper::title() !!}</h2>
        @endif
    </x-container>
    @if ($usps = get_sub_field('usps'))
        <div x-data="{ scrollPercentage: 0 }">
            <x-container class="max-lg:px-0">
                <div class="max-lg:hide-scrollbar flex flex-nowrap max-lg:snap-x max-lg:snap-mandatory max-lg:gap-[20px] max-lg:overflow-x-auto max-lg:px-6 lg:justify-between"
                    @scroll="scrollPercentage = ($el.scrollLeft / ($el.scrollWidth - $el.clientWidth)) * 100">
                    @foreach ($usps as $usp)
                        <div
                            class="flex w-[60vw] flex-shrink-0 snap-center flex-col items-center max-lg:max-w-[200px] lg:w-[88px]">
                            @if ($image = $usp['image'])
                                <img class="mb-10 h-[50px] w-[80px] object-contain object-center"
                                    src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                            @endif
                            <h3
                                class="text-green text-center text-[26px] font-[700] leading-[32px] lg:text-[20px] lg:leading-[25px]">
                                {{ $usp['title'] }}
                            </h3>
                        </div>
                    @endforeach
                </div>
            </x-container>
            <x-container>
                <div class="bg-green/30 relative mx-auto mt-[72px] h-[6px] w-[214px] lg:hidden">
                    <div class="bg-green absolute left-0 top-0 h-full" :style="{ width: scrollPercentage + '%' }">
                    </div>
                </div>
            </x-container>
        </div>

    @endif
</section>
