<x-container class="grid grid-cols-1 gap-[60px] md:grid-cols-12 md:gap-10">
    <div class="md:col-span-7">
        <div class="swiper project-detail-slider">
            <div class="swiper-wrapper">
                @if ($image = get_the_post_thumbnail_url(get_the_ID()))
                    <div class="swiper-slide">
                        <img class="aspect-square w-full object-cover" src="{{ $image }}" alt="">
                    </div>
                @endif
                @if ($gallery = get_sub_field('gallery'))
                    @foreach ($gallery as $image)
                        <div class="swiper-slide">
                            <img class="aspect-square w-full object-cover" src="{{ $image['url'] }}" alt="">
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        <div class="swiper project-detail-slider-thumbs mt-4" thumbsSlider="">
            <div class="swiper-wrapper">
                @if ($image = get_the_post_thumbnail_url(get_the_ID()))
                    <div class="swiper-slide">
                        <img class="aspect-square w-full object-cover" src="{{ $image }}" alt="">
                    </div>
                @endif
                @if ($gallery = get_sub_field('gallery'))
                    @foreach ($gallery as $image)
                        <div class="swiper-slide">
                            <img class="aspect-square w-full object-cover" src="{{ $image['url'] }}" alt="">
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="flex h-full flex-col justify-center md:col-span-5">
        <div class="lg:pb-[200px]">
            <span class="text-body text-black">{{ get_field('location', get_the_ID()) }}</span>
            @if ($title = get_the_title())
                <h2 class="text-dark-green mb-8 mt-4 text-[50px] font-[300] uppercase leading-[60px]">
                    {!! App\Helper::title($title) !!}
                </h2>
            @endif
            @if ($content = get_the_content())
                <x-wissiewig>
                    {!! $content !!}
                </x-wissiewig>
            @endif
        </div>
    </div>
</x-container>
