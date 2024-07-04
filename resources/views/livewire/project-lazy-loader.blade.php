@props(['title'])
<div class="mx-auto box-border w-full max-w-[1096px] px-6">
	<section class="flex flex-wrap gap-10">
		{{-- <div class="space-y-10 pt-[192px]"> --}}
		<h2 class="text-70-70-300 text-green">{!! nl2br($title) !!}</h2>
		@foreach ($posts as $post)
			@php
				$iterationGroup = floor($loop->index / 2) % 2;
				$class = $iterationGroup == 0 ? 'h-[352px]' : 'h-[668px]';
			@endphp
			<x-project-grid-item class="{{ $class }} h-full w-[calc(50%-40px)]" :post="$post" />
		@endforeach
		{{-- </div> --}}
	</section>

	@if ($hasMore)
		<div class="flex justify-center">
			<x-button class="mx-auto mt-[42px] block w-fit lg:mt-[80px]" wire:click="loadMore">Load more</x-button>
		</div>
	@endif
</div>
