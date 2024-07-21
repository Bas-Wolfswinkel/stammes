@php
    $title = App\Helper::title(get_sub_field('title'));
    $left = get_sub_field('contact_form_left');
    $image = $left['image'] ?? null;
    $color = App\Helper::get_colorpicker('contact_foto', $left);
    if ($left['contact_info']) {
        $contact_arr = [
            'address' => get_field('address', 'option') ?? null,
            'email' => get_field('email', 'option') ?? null,
            'phone' => get_field('phone', 'option') ?? null,
            'postal_city' => get_field('postal_city', 'option') ?? null,
        ];
    }
    $right = get_sub_field('contact_form_right');
    $content = $right['content'] ?? null;
    $shortcode = $right['shortcode'] ?? null;
@endphp

<x-container>
    <div class="flex gap-10">
        <div class="hidden w-[522px] lg:block">
            @if ($image)
                <div class="relative w-full">
                    <div class="@if ($color) mb-[50px] @endif relative">
                        <img class="max-h-[808px]" src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                        @if ($color)
                            <div class="pointer-events-none absolute bottom-0 left-0 -z-10 h-[258px] max-h-full w-[461px] max-w-full -translate-x-[50px] translate-y-[50px]"
                                style="background-color: {{ $color }}">
                            </div>
                        @endif
                    </div>
                </div>
            @endif
            @if ($contact_arr)
                <div class="text-text-1 space-y-6 pt-[57px] text-black">
                    <h3 class="text-subtitle-2 text-green uppercase">{!! __('Contactgegevens', 'outlawz') !!}</h3>
                    <div>
                        @if ($contact_arr['address'])
                            <p>
                                {!! $contact_arr['address'] !!}
                            </p>
                        @endif
                        @if ($contact_arr['postal_city'])
                            <p>
                                {!! $contact_arr['postal_city'] !!}
                            </p>
                        @endif
                        @if ($contact_arr['phone'])
                            <a class="block" href="tel:{{ $contact_arr['phone']['url'] }}">
                                {!! $contact_arr['phone']['title'] !!}
                            </a>
                        @endif
                        @if ($contact_arr['email'])
                            <a class="block" href="mailto:{{ $contact_arr['email'] }}">
                                {!! $contact_arr['email'] !!}
                            </a>
                        @endif
                    </div>
                </div>
            @endif
        </div>
        <div class="flex-1 pt-[38px]">
            @if ($title)
                <h2 class="text-green text-subtitle-3 lg:text-subtitle uppercase">
                    {!! $title !!}
                </h2>
            @endif
            @if ($content)
                <x-wissiewig class="mt-6 lg:mt-9">
                    {!! $content !!}
                </x-wissiewig>
            @endif
            @if ($image)
                <div class="@if ($color) mb-[35px] @endif relative mt-[51px] w-full lg:hidden">
                    <img class="ml-auto max-w-[90%]" src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                    @if ($color)
                        <div class="absolute bottom-0 left-0 -z-10 h-[168px] w-[80%] translate-y-[35px]"
                            style="background-color: {{ $color }}">
                        </div>
                    @endif
                </div>
            @endif
            @if ($shortcode)
                <div class="contact-page-form mt-[25px]">{!! do_shortcode($shortcode) !!}</div>
            @endif
        </div>
    </div>
</x-container>

<iframe class="-mb-20 mt-10"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2418.8187260174363!2d4.794449576316321!3d52.68131117210378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47cf56b0af088505%3A0xe4c4e27be2ee5e0a!2sSchoenmakersloot%206%2C%201721%20HR%20Broek%20op%20Langedijk!5e0!3m2!1snl!2snl!4v1721572687220!5m2!1snl!2snl"
    style="border:0;" width="100%" height="450" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>
