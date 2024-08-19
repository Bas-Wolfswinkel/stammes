@props(['title'])

<div class="mx-auto box-border w-full max-w-[1096px] px-6">
    <section class="grid grid-cols-1 gap-10 md:grid-cols-2">

        {{-- Left column --}}
        <div class="space-y-[40px] max-md:hidden">
            <h2 class="text-70-70-300 text-green mb-10 uppercase">{!! nl2br($title) !!}</h2>
            @php
                $counter = 1;
            @endphp
            @foreach ($posts as $post)
                @if ($loop->index % 2 === 1)
                    @php
                        if ($counter % 2 === 1) {
                            $class = 'h-[668px]';
                        } else {
                            $class = 'h-[352px]';
                    } @endphp
                    <x-project-grid-item class="{{ $class }} w-full" :post="$post" />
                    @php
                        $counter++;
                    @endphp
                @endif
            @endforeach
        </div>

        {{-- Right column --}}
        <div class="space-y-[40px] max-md:hidden">
            @php
                $counter_2 = 1;
            @endphp
            @foreach ($posts as $post)
                @if ($loop->index % 2 === 0)
                    @php
                        if ($counter_2 % 2 === 0) {
                            $class = 'h-[668px]';
                        } else {
                            $class = 'h-[352px]';
                    } @endphp
                    <x-project-grid-item class="{{ $class }} w-full" :post="$post" />
                    @php
                        $counter_2++;
                    @endphp
                @endif
            @endforeach
        </div>

        {{-- Mobile --}}
        <div class="space-y-6 md:hidden">
            <h2 class="text-40-40-300 text-green mb-10 uppercase">{!! nl2br($title) !!}</h2>

            @foreach ($posts as $post)
                @php
                    if ($loop->odd) {
                        $class = 'h-[252px]';
                    } else {
                        $class = 'h-[492px]';
                } @endphp
                <x-project-grid-item class="{{ $class }} w-full" :post="$post" />
            @endforeach
        </div>
    </section>

    @if ($hasMore)
        <div class="flex justify-center">
            <x-button class="mx-auto mt-[42px] block w-fit lg:mt-[80px]" wire:click="loadMore">Laad meer</x-button>
        </div>
    @endif
</div>
