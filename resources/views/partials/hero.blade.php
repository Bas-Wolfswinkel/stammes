<div class="hero-section relative min-h-[714px] bg-cover bg-bottom pt-[210px] md:min-h-[832px] md:pb-[20vh] md:pt-[30vh]"
    @if ($img = get_sub_field('image')) style="@if ($mobile_img = get_sub_field('image_mobile')) --desktop-image:url({{ $img['url'] }}); --mobile-image:url({{ $mobile_img['url'] }}); @else --desktop-image:url({{ $img['url'] }}); --mobile-image:url({{ $img['url'] }}); @endif"
    @endif>
    <x-container>
        <h1
            class="font-lato text-[40px] font-light uppercase leading-[40px] tracking-[1.2px] text-white md:text-[79.23px] md:leading-[77.4px]">
            {!! App\Helper::title(get_sub_field('hero_title')) !!}
        </h1>

        @if ($link = get_sub_field('link'))
            <x-button class="mt-20 md:mt-12" :href="$link['url']">{{ $link['title'] }}</x-button>
        @endif
    </x-container>
</div>
