<header class="absolute left-0 top-0 z-50 w-full">
    <x-container class="pt-8 md:pt-10">
        <div class="flex items-start justify-between lg:items-center">
            @if ($logo = get_field('logo', 'option'))
                <a class="block" href="{{ home_url('/') }}">
                    <img class="max-lg:h-[74px]" src="{{ $logo['url'] }}" alt="{{ $logo['alt'] }}">
                </a>
            @endif

            @if (has_nav_menu('header_navigation'))
                <div x-data="{ isOpen: false }">
                    <button class="lg:hidden" @click="isOpen = !isOpen">
                        <x-icon-hamburger />
                    </button>
                    <div
                        :class="isOpen ?
                            'max-lg:fixed max-lg:opacity-100  max-lg:px-6 max-lg:py-8 max-lg:bg-gold inset-0 z-50' :
                            ' max-lg:hidden'">
                        {{-- Logo and close icon mobile nav --}}
                        <div class="flex w-full items-start justify-between lg:hidden">
                            <x-icon-logo-green />
                            <button @click="isOpen = !isOpen">
                                <x-icon-close />
                            </button>
                        </div>

                        {{-- Nav --}}
                        <nav class="nav-primary max-lg:mt-24 max-lg:px-6"
                            aria-label="{{ wp_get_nav_menu_name('header_navigation') }}">
                            {!! wp_nav_menu([
                                'theme_location' => 'header_navigation',
                                'menu_class' =>
                                    'nav max-lg:flex-col flex lg:items-center max-lg:text-green gap-10 lg:gap-12 font-lato max-lg:leading-[30px] text-[35px] md:text-[50px] lg:text-[16px] uppercase text-white',
                                'link_class' => 'text-[#030712]',
                            
                                'echo' => false,
                            ]) !!}

                            @if ($phone = get_field('phone', 'options'))
                                <a class="font-lato text-green mt-20 flex items-center gap-4 text-[25px] uppercase lg:hidden"
                                    href="{{ $phone['url'] }}">
                                    <x-icon-phone />
                                    {{ $phone['title'] }}
                                </a>
                            @endif
                        </nav>
                    </div>

                </div>
            @endif
        </div>
    </x-container>
</header>
