<div class="bg-dark-green py-20 md:py-[110px]">
    <x-container class="grid grid-cols-1 md:grid-cols-2">
        <div>
            <h2 class="text-title-medium text-white">{!! App\Helper::title() !!}</h2>
            <div class="text-body mt-3 text-white md:max-w-[424px]">
                {!! get_sub_field('content') !!}
            </div>
        </div>
        <div class="pt-4">
            {!! do_shortcode(get_sub_field('contactform_shortcode')) !!}
        </div>
    </x-container>

</div>
