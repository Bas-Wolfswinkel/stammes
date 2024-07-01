@php
    $project = $attributes->get('project');
@endphp
<div {{ $attributes->merge(['class' => 'grid gap-4 md:gap-9 grid-cols-1 md:grid-cols-2'])->except('project') }}>
    <div>
        @if ($image = get_the_post_thumbnail_url($project->ID))
            <img class="aspect-square h-full w-full object-cover" src="{{ $image }}" alt="">
        @endif
    </div>
    <div class="space-y-4 md:pt-8">
        <span class="text-body text-black">{{ get_field('location', $project->ID) }}</span>
        <h3 class="text-dark-green text-[35px] font-[300] uppercase leading-[35px]">{!! App\Helper::title(get_the_title($project->ID)) !!}</h3>
        <p class="text-body text-black">{!! get_the_excerpt($project->ID) !!}</p>
        <x-button class="mt-auto" href="{{ get_the_permalink($project->ID) }}">{{ __('Lees meer', 'outlawz')}}</x-button>
    </div>
</div>
