<footer class="bg-green relative mt-[35px] px-[38px] pb-[138px] lg:px-0 lg:pb-[185px]">
    <x-icon-footer-top class="absolute inset-x-0 top-0 -translate-y-1/2" />
    <x-container>
        <div class="grid grid-cols-1 gap-12 pt-[35px] uppercase lg:grid-cols-4">
            @if ($logo = get_field('logo', 'option'))
                <a class="mx-auto block w-full md:mx-0" href="{{ home_url('/') }} order-1">
                    <img class="h-full max-h-[92px] w-full max-w-[312px] object-contain" src="{{ $logo['url'] }}"
                        alt="{{ $logo['alt'] }}">
                </a>
                @if (has_nav_menu('header_navigation'))
                    <nav class="order-2 space-y-[6px]" aria-label="footer">
                        <p class="font-lato text-footer-title text-gold-2 uppercase">Website</p>
                        {!! wp_nav_menu([
                            'theme_location' => 'header_navigation',
                            'menu_class' => 'list-none font-lato text-white text-button space-y-[6px]',
                            'link_class' => 'text-[#030712]',
                            'echo' => false,
                        ]) !!}
                    </nav>
                @endif
                @if ($services)
                    <div class="order-4 space-y-[6px] lg:order-3">
                        <p class="font-lato text-footer-title text-gold-2 uppercase">Onze diensten</p>
                        <ul class="list-none space-y-[6px]">
                            @foreach ($services as $service)
                                <li>
                                    <a class="font-lato text-button text-white"
                                        href="/diensten#{{ $service->post_name }}">{{ $service->post_title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if ($contact_arr)
                    <div class="order-3 space-y-[6px] lg:order-4">
                        <p class="font-lato text-footer-title text-gold-2 uppercase">Adresgegevens</p>
                        <ul class="list-none space-y-[6px]">
                            @if ($contact_arr['adress'])
                                <li>
                                    <p class="font-lato text-button text-white">{{ $contact_arr['adress'] }}</p>
                                </li>
                            @endif
                            @if ($contact_arr['postal_city'])
                                <li>
                                    <p class="font-lato text-button text-white">{{ $contact_arr['postal_city'] }}</p>
                                </li>
                            @endif
                            @if ($contact_arr['email'])
                                <li>
                                    <a class="font-lato text-button text-white"
                                        href="mailto:{{ $contact_arr['email'] }}">{{ $contact_arr['email'] }}</a>
                                </li>
                            @endif
                            @if ($contact_arr['phone'])
                                <li>
                                    <a class="font-lato text-button text-white"
                                        href="tel:{{ $contact_arr['phone']['url'] }}">{{ $contact_arr['phone']['title'] }}</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                @endif
            @endif
        </div>
    </x-container>
</footer>
