<div class="bg-light-green/20 py-[100px]">
    <x-container>
        @if ($title = get_sub_field('title'))
            <h2
                class="text-green text-title-medium mx-auto mb-[50px] max-w-[436px] text-center text-[40px] md:mb-[100px] lg:leading-[50px]">
                {!! App\Helper::title($title) !!}
            </h2>
        @endif
        @if ($projecten = get_sub_field('projecten'))
            <div class="swiper projecten-swiper max-md:px-4">

                <div class="swiper-wrapper">
                    @foreach ($projecten as $project)
                        <x-project-card class="swiper-slide" :project="$project" />
                    @endforeach
                </div>

                <div class="swiper-button-next z-[9999] max-md:top-[80%] md:-translate-y-[40px]"></div>
                <div class="swiper-button-prev z-[9999] max-md:top-[80%] md:-translate-y-[40px]"></div>
                <div class="relative mx-auto mt-12 h-[6px] w-full max-w-[80vw] md:mt-20 md:max-w-[345px]">
                    <div class="swiper-pagination h-[6px]"></div>
                </div>
            </div>
        @endif

        @if ($link = get_post_type_archive_link('project'))
            <div class="grid grid-cols-1">
                <x-button class="mx-auto mt-10 md:mt-[80px]"
                    href="{{ $link }}">{{ __('Bekijk al onze projecten', 'outlawz') }}</x-button>
            </div>
        @endif

    </x-container>
</div>
