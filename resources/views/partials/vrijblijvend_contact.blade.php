<div class="bg-dark-green py-20 md:py-[110px]"
    style="@if ($color = App\Helper::get_colorpicker('achtergrond')) background-color: {{ $color }}; @endif @if ($input_color = App\Helper::get_colorpicker('input_color')) --input-color: {{ $input_color }}; @endif @if ($input_text_color = App\Helper::get_colorpicker('input_text_color')) --input-text-color: {{ $input_text_color }}; @endif @if ($button_color = App\Helper::get_colorpicker('button_color')) --button-color: {{ $button_color }}; @endif @if ($margin_bottom = get_sub_field('margin_bottom')) margin-bottom: {{ $margin_bottom }}px; @endif">
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
