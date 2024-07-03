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
			<div class="swiper reviews-slider mt-10">
				<div class="swiper-wrapper">
					@foreach ($reviews as $review)
						<div class="swiper-slide h-full">
							@php
								$quoteColor = $loop->odd ? '#13565E' : '#BE8A16';
								$bgColor = $loop->odd ? '#4B847D' : '#E0B860';
								$starColor = $loop->odd ? '#BE8A16' : '#13565E';
							@endphp
							<div class="px-[70px] py-[45px] text-white" style="background-color: {{ $bgColor }}">
								<div class="flex items-center justify-between gap-2" style="color: {{ $quoteColor }}">
									<x-icon-quote />
									<div class="flex items-center justify-end gap-2">
										@for ($i = 1; $i <= 5; $i++)
											@if ($i <= $review['rating'])
												<x-icon-star color="{{ $starColor }}" />
											@else
												<x-icon-star-empty color="{{ $starColor }}" />
											@endif
										@endfor
									</div>
								</div>
								<h4 class="text-30-36-700 mt-8 uppercase text-white">
									{!! $review['title'] !!}
								</h4>
								<x-wissiewig class="mt-2 !text-white">
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
				<div class="swiper-button-next c-white z-[9999] max-md:top-[80%] md:-translate-y-[40px]"></div>
				<div class="swiper-button-prev c-white z-[9999] max-md:top-[80%] md:-translate-y-[40px]"></div>
				<div class="relative mx-auto mt-12 h-[6px] w-full max-w-[80vw] md:mt-20 md:max-w-[345px]">
					<div class="swiper-pagination h-[6px]"></div>
				</div>
			</div>
		</section>
	</x-container>
@endif
