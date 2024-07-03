<x-container>
	<section>
		@foreach ($posts as $post)
			<article wire:key="post-{{ $post['id'] }}">
				<a class="relative block w-fit" href="{{ $post['url'] }}">
					@if ($post['featured_image'])
						<img src="{{ $post['featured_image'] }}" alt="{{ $post['title'] }}">
					@endif
					<button class="border-gold pointer-events-none absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 rounded-[6px] border bg-[#FFFFFF4D] px-3 py-1 text-center text-[16px] font-[400] uppercase leading-[30px] text-white">
						View Project
					</button>
				</a>
			</article>
		@endforeach
	</section>

	@if ($hasMore)
		<div class="flex justify-center">
			<x-button class="mx-auto mt-[42px] block w-fit lg:mt-[80px]" wire:click="loadMore">Load more</x-button>
		</div>
	@endif
</x-container>
