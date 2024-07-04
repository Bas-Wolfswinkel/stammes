<div class="hero-section relative min-h-[714px] bg-cover bg-bottom pt-[210px] md:min-h-[832px] md:pb-[20vh] md:pt-[30vh]" @if ($img = get_sub_field('image')) style="@if ($mobile_img = get_sub_field('image_mobile')) --desktop-image:url({{ $img['url'] }}); --mobile-image:url({{ $mobile_img['url'] }}); @else --desktop-image:url({{ $img['url'] }}); --mobile-image:url({{ $img['url'] }}); @endif" @endif>
	<div class="absolute left-0 top-0 h-[317px] w-full" style="background: linear-gradient(180deg, #13565E 0%, rgba(19, 86, 94, 0.00) 89.78%); background-blend-mode: multiply;">
	</div>
	<x-container>
		<h1 class="font-lato text-[32px] font-light uppercase leading-[32px] tracking-[1px] text-white md:text-[68px] md:leading-[68px]" style="@if ($max_width_desktop = get_sub_field('max_width_desktop')) --max-width-desktop:{{ $max_width_desktop }}px; @endif @if ($max_width_mobile = get_sub_field('max_width_mobile')) --max-width-mobile:{{ $max_width_mobile }}px; @endif">
			{!! App\Helper::title(get_sub_field('hero_title')) !!}
		</h1>

		@if ($link = get_sub_field('link'))
			<x-button class="mt-20 md:mt-12" :href="$link['url']">{{ $link['title'] }}</x-button>
		@endif
	</x-container>
</div>
