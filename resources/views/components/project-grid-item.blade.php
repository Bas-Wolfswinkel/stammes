@props(['post'])
<article wire:key="post-{{ $post['id'] }}" {!! $attributes !!}>
    <a class="has-[button:hover]:scale-110 relative block h-full w-full transition-all duration-300 ease-in-out"
        href="{{ $post['url'] }}">
        <button
            class="border-gold peer absolute left-1/2 top-1/2 z-[10] -translate-x-1/2 -translate-y-1/2 rounded-[6px] border bg-[#FFFFFF4D] px-3 py-1 text-center text-[16px] font-[400] uppercase leading-[30px] text-white transition-all duration-300 ease-in-out hover:scale-110">
            {{ __('Bekijk') }}
        </button>
        <div
            class="pointer-events-none absolute inset-0 z-[5] bg-black opacity-0 transition-all duration-300 ease-in-out peer-hover:opacity-50">
        </div>
        @if ($post['featured_image'])
            <img class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"
                src="{{ $post['featured_image'] }}" alt="{{ $post['title'] }}">
        @endif

    </a>
</article>
