@php
	$title = App\Helper::title(get_sub_field('title'));
	$reviews = get_sub_field('reviews');
@endphp

@if ($reviews)
	<x-container>
		<section>
			<h3 class="text-45-45-300 max-w-[420px] uppercase">
				{!! $title !!}
			</h3>
			<div class="swiper reviews-slider relative mt-10">
				<div class="swiper-wrapper">
					@foreach ($reviews as $review)
						<div class="swiper-slide h-full">
							@php
								$quoteColor = $loop->odd ? '#13565E' : '#BE8A16';
								$bgColor = $loop->odd ? '#4B847D' : '#E0B860';
								$starColor = $loop->odd ? '#BE8A16' : '#13565E';
							@endphp
							<div class="p-10 text-white lg:px-[70px] lg:py-[45px]" style="background-color: {{ $bgColor }}">
								<div class="flex items-center justify-between gap-2" style="color: {{ $quoteColor }}">
									<x-icon-quote class="h-[40px] w-[51px] lg:h-[55px] lg:w-[69px]" />
									<div class="flex items-center justify-end gap-2">
										@for ($i = 1; $i <= 5; $i++)
											@if ($i <= $review['rating'])
												<x-icon-star class="h-[23px] w-[24px] lg:h-[32px] lg:w-[34px]" color="{{ $starColor }}" />
											@else
												<x-icon-star-empty class="h-[23px] w-[24px] lg:h-[32px] lg:w-[34px]" color="{{ $starColor }}" />
											@endif
										@endfor
									</div>
								</div>
								<h4 class="text-30-36-700 mt-11 uppercase text-white lg:mt-8">
									{!! $review['title'] !!}
								</h4>
								<x-wissiewig class="mt-4 !text-white lg:mt-2">
									{!! $review['content'] !!}
								</x-wissiewig>
								<p class="text-20-36-700 mt-3 uppercase">
									{!! $review['name'] !!}
								</p>
								<p class="text-16-24-400 mt-2">
									{!! $review['type'] !!}
								</p>
							</div>
						</div>
					@endforeach
				</div>
				<div class="swiper-button-next c-white !important !importantabsolute !important !important !important relative left-4 top-1/2 z-[9999] -translate-y-[calc(50%+52px)]"></div>
				<div class="swiper-button-prev c-white !important !importantabsolute !important !important !important relative right-4 top-1/2 z-[9999] -translate-y-[calc(50%+52px)]"></div>
				<div class="relative mx-auto mt-12 h-[6px] w-full max-w-[80vw] md:mt-20 md:max-w-[345px]">
					<div class="swiper-pagination h-[6px]"></div>
				</div>
			</div>
		</section>
	</x-container>
@endif
