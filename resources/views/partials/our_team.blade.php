@php
    $title = App\Helper::title(get_sub_field('title'));
    $content = get_sub_field('content');
    $team = get_sub_field('team_repeater');
@endphp

<x-container class="max-lg:px-0">
    <div class="gap-[73px] lg:flex">
        <div class="p-6 lg:p-0">
            <div class="lg:max-w-[250px]">
                @if ($title)
                    <h4 class="text-subtitle-4 uppercase">
                        {!! $title !!}
                    </h4>
                @endif
                @if ($content)
                    <x-wissiewig class="mt-7">
                        {!! $content !!}
                    </x-wissiewig>
                @endif
            </div>
        </div>
        @if ($team)
            <div x-data="{ scrollPercentage: 0 }">
                <x-container class="mt-[64px] max-lg:px-0 lg:mt-[14px]">
                    <div class="max-lg:hide-scrollbar flex flex-nowrap max-lg:snap-x max-lg:snap-mandatory max-lg:gap-[20px] max-lg:overflow-x-auto max-lg:px-6 lg:grid lg:grid-cols-4 lg:justify-between lg:gap-[36px]" @scroll="scrollPercentage = ($el.scrollLeft / ($el.scrollWidth - $el.clientWidth)) * 100">
                        @foreach ($team as $item)
                            <div class="flex w-[65vw] flex-shrink-0 snap-center flex-col max-lg:max-w-[275px] lg:w-full">
                                @if ($image = $item['image'])
                                    <img class="{{ $loop->even ? 'bg-green' : 'bg-gold-2' }} mb-8 h-auto w-full object-contain object-center" src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                                @endif
                                @if ($name = $item['name'])
                                    <h3 class="text-22-26-600">
                                        {!! $name !!}
                                        @if ($lastname = $item['last_name'])
                                            <b>{!! $lastname !!}</b>
                                        @endif
                                    </h3>
                                @endif
                                @if ($role = $item['role'])
                                    <p class="text-20-29-400 text-green mt-2">
                                        <span>
                                            {{ __('Functie: ', 'outlawz') }}
                                        </span>
                                        <span class="text-19-29-300 text-black">
                                            {!! $role !!}
                                        </span>
                                    </p>
                                @endif
                                @if ($experience = $item['experience'])
                                    <p class="text-20-29-400 text-green">
                                        <span>{{ __('Ervaring: ', 'outlawz') }}</span>
                                        <span class="text-19-29-300 text-black">
                                            {!! $experience !!}
                                        </span>
                                    </p>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </x-container>
                <x-container>
                    <div class="bg-green/30 relative mx-auto mt-[72px] h-[6px] w-[214px] lg:hidden">
                        <div class="bg-green absolute left-0 top-0 h-full" :style="{ width: scrollPercentage + '%' }">
                        </div>
                    </div>
                </x-container>
            </div>
        @endif
    </div>
</x-container>
