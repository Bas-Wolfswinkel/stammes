<footer class="bg-green relative">
    <x-icon-footer-top class="-translate-y-[20%]" />

    <x-container>
        <div class="grid grid-cols-1 lg:grid-cols-12">
            <div class="lg:col-span-4">
                @if ($logo = get_field('logo', 'option'))
                    <a class="mx-auto block w-fit" href="{{ home_url('/') }}">
                        <img src="{{ $logo['url'] }}" alt="{{ $logo['alt'] }}">
                    </a>
                @endif
            </div>

            <div class="col-span-2">
                
            </div>

        </div>
    </x-container>

</footer>
