@php
	$main_title = App\Helper::title(get_sub_field('title'));
	$services = get_sub_field('services_repeater');
	$color_repeater = get_sub_field('service_colors');
	$colors = [];
	foreach ($color_repeater as $color) {
	    $colors[] = App\Helper::get_colorpicker('service_color', $color);
	}
@endphp

@if ($services)
	<section id="services">
		<x-container>
			<ul class="list-none space-y-20 lg:space-y-0">
				@foreach ($services as $service)
					@php
						$color = $colors[$loop->index % count($colors)];
						if ($title = $service['title']) {
						    $title = App\Helper::title($title);
						}
					@endphp
					<li>

						<article class="grid items-center gap-10 pb-[40px] lg:grid-cols-2 lg:pb-[80px]" id="{!! str_replace('&shy;', '', $title) !!}">
							<div class="@if ($loop->even) lg:order-2 @endif space-y-6 lg:space-y-8">
								@if ($loop->first && $main_title)
									<h2 class="text-70-80-300 text-green pb-8 uppercase">{!! $main_title !!}</h2>
								@endif
								@if ($title)
									<h3 class="text-45-45-700 text-green hyphens-auto break-words uppercase" lang="nl">{!! $title !!}</h3>
								@endif
								@if ($content = $service['content'])
									<x-wissiewig>{!! $content !!}</x-wissiewig>
								@endif
							</div>
							<div class="@if ($loop->odd) mr-[25px] lg:mr-0 @else ml-[25px] lg:ml-0 @endif relative">
								@if ($image = $service['image'])
									<img class="max-h-[542px] max-w-full object-contain" src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
								@endif
								<div class="@if ($loop->even) left-0 h-[40%] lg:-translate-x-[50px] -translate-x-[25px] @else h-[80%] right-0 lg:translate-x-[50px] translate-x-[25px] @endif pointer-events-none absolute bottom-0 z-[-1] w-[80%] translate-y-[40px] lg:translate-y-[80px]" style="background-color: {{ $color }};">
								</div>
							</div>
						</article>
					</li>
				@endforeach
			</ul>
		</x-container>
	</section>
@endif
