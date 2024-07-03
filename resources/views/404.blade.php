@extends('layouts.app')

@section('content')
    <section class="-mb-10 h-screen w-full place-content-center bg-cover bg-bottom"
        style="background-image: url(@asset('images/login-background.png'))">
        <x-container>

            <h1 class="text-title-large text-gold md:text-[100px] font-bold">{{ __('404', 'outlawz') }}</h1>
            <span class="text-title-small md:mt-10 mb-4 block text-white">{{ __('Oeps! Deze pagina bestaat niet', 'outlawz') }}</span>
            <x-button href="{{ home_url() }}">{{ __('Terug naar de homepage', 'outlawz') }}</x-button>
        </x-container>

    </section>
@endsection
