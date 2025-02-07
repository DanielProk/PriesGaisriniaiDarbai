@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gray-900 text-white py-12" style="background-image: url('{{ asset('images/logooo.png') }}'); background-size: contain; background-position: center; background-repeat: no-repeat; height: 500px;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-4">UAB „Priešgaisriniai darbai"</h1>
            <p class="text-xl mb-8">Profesionalūs priešgaisrinės saugos sprendimai</p>
            <a href="{{ route('contact') }}" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg text-lg font-semibold hover:bg-blue-700 transition-colors">
                Susisiekite su mumis
            </a>
        </div>
    </div>
</div>

<!-- Main Services -->
<div class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- FireBlock System -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('images/fireblock-hero.jpg') }}" alt="FireBlock sistema" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4">"FireBlock" priešgaisrinio sandarinimo sistema</h2>
                    <p class="text-gray-600 mb-4">
                        Moderni ir efektyvi priešgaisrinio sandarinimo sistema, užtikrinanti maksimalią apsaugą nuo gaisro plitimo.
                    </p>
                    <a href="{{ route('fireblock') }}" class="inline-block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        Sužinoti daugiau
                    </a>
                </div>
            </div>

            <!-- Installation Services -->
            <div class="bg-gray-50 rounded-lg overflow-hidden shadow-lg">
                <img src="{{ asset('images/installation-hero.jpg') }}" alt="Montavimo darbai" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-4">Priešgaisrinių sistemų montavimo darbai</h2>
                    <p class="text-gray-600 mb-4">
                        Profesionalus priešgaisrinių sistemų montavimas, užtikrinantis jūsų objektų saugumą.
                    </p>
                    <a href="{{ route('installation') }}" class="inline-block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        Sužinoti daugiau
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Services Overview -->
<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center mb-12">Mūsų paslaugos</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Design -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold mb-4">Projektavimas</h3>
                <p class="text-gray-600 mb-4">
                    Profesionalus priešgaisrinių sistemų projektavimas pagal visus reikalavimus.
                </p>
                <a href="{{ route('design') }}" class="text-blue-600 hover:text-blue-800">Sužinoti daugiau →</a>
            </div>

            <!-- Products -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold mb-4">Produktai</h3>
                <p class="text-gray-600 mb-4">
                    Plataus asortimento priešgaisrinės įrangos ir medžiagų tiekimas.
                </p>
                <a href="{{ route('products') }}" class="text-blue-600 hover:text-blue-800">Sužinoti daugiau →</a>
            </div>

            <!-- Painting -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold mb-4">Dažymo darbai</h3>
                <p class="text-gray-600 mb-4">
                    Profesionalus priešgaisrinis konstrukcijų dažymas.
                </p>
                <a href="{{ route('painting') }}" class="text-blue-600 hover:text-blue-800">Sužinoti daugiau →</a>
            </div>
        </div>
    </div>
</div>

<!-- Why Choose Us -->
<div class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-center mb-12">Kodėl rinktis mus?</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl font-bold text-blue-600 mb-2">15+</div>
                <p class="text-gray-600">Metų patirties</p>
            </div>
            <div>
                <div class="text-4xl font-bold text-blue-600 mb-2">500+</div>
                <p class="text-gray-600">Įgyvendintų projektų</p>
            </div>
            <div>
                <div class="text-4xl font-bold text-blue-600 mb-2">100%</div>
                <p class="text-gray-600">Klientų pasitenkinimas</p>
            </div>
            <div>
                <div class="text-4xl font-bold text-blue-600 mb-2">24/7</div>
                <p class="text-gray-600">Techninis palaikymas</p>
            </div>
        </div>
    </div>
</div>

@endsection
