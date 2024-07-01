<x-container>
    <div class="relative grid grid-cols-1 gap-[70px] md:grid-cols-12">
        <div class="md:col-span-7">
            @if ($image = get_sub_field('image'))
                <img class="md:m-auto aspect-square w-full md:w-[90%]" src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
            @endif
        </div>
        <div
            class="md:relative grid grid-cols-1 place-content-center after:absolute after:-left-6 md:after:-left-[40%] after:-top-[10%] after:-z-10 after:h-[120%] after:w-[80%] md:after:w-[120%] after:bg-[#E0B860] after:content-[''] md:col-span-5">
            <h2 class="text-title-medium text-green">{!! App\Helper::title() !!}</h2>
            <div class="text-body text-green mt-10 max-w-[387px]">
                {!! get_sub_field('content') !!}
            </div>
        </div>
    </div>
</x-container>
