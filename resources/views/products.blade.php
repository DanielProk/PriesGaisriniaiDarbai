@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="text-3xl font-bold mb-6">Produktai</h1>
                
                <div class="prose max-w-none">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Priešgaisrinės durys -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="{{ asset('images/fire-doors.jpg') }}" alt="Priešgaisrinės durys" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Priešgaisrinės durys</h3>
                                <p class="text-gray-600 mb-4">
                                    Aukštos kokybės priešgaisrinės durys, atitinkančios visus saugos reikalavimus.
                                </p>
                                <ul class="list-disc pl-4 mb-4">
                                    <li>EI30 - EI120 atsparumo klasės</li>
                                    <li>Įvairūs dizaino sprendimai</li>
                                    <li>Sertifikuoti produktai</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Priešgaisrinės žaliuzės -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="{{ asset('images/fire-shutters.jpg') }}" alt="Priešgaisrinės žaliuzės" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Priešgaisrinės žaliuzės</h3>
                                <p class="text-gray-600 mb-4">
                                    Modernios priešgaisrinės žaliuzės pramoniniams ir komerciniams objektams.
                                </p>
                                <ul class="list-disc pl-4 mb-4">
                                    <li>Automatinis valdymas</li>
                                    <li>Įvairūs dydžiai</li>
                                    <li>Patikima apsauga</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Priešgaisrinės pertvaros -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="{{ asset('images/fire-partitions.jpg') }}" alt="Priešgaisrinės pertvaros" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Priešgaisrinės pertvaros</h3>
                                <p class="text-gray-600 mb-4">
                                    Stiklinės ir aliuminio priešgaisrinės pertvaros.
                                </p>
                                <ul class="list-disc pl-4 mb-4">
                                    <li>Skaidrios ir matinės</li>
                                    <li>Modulinė sistema</li>
                                    <li>Lengvas montavimas</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Priešgaisriniai dažai -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="{{ asset('images/fire-paint.jpg') }}" alt="Priešgaisriniai dažai" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Priešgaisriniai dažai</h3>
                                <p class="text-gray-600 mb-4">
                                    Aukštos kokybės priešgaisriniai dažai metalui ir medienai.
                                </p>
                                <ul class="list-disc pl-4 mb-4">
                                    <li>Ilgalaikė apsauga</li>
                                    <li>Lengvas padengimas</li>
                                    <li>Įvairios spalvos</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Priešgaisrinės sandarinimo medžiagos -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="{{ asset('images/fire-sealants.jpg') }}" alt="Priešgaisrinės sandarinimo medžiagos" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Sandarinimo medžiagos</h3>
                                <p class="text-gray-600 mb-4">
                                    Profesionalios priešgaisrinės sandarinimo medžiagos.
                                </p>
                                <ul class="list-disc pl-4 mb-4">
                                    <li>Putų sistemos</li>
                                    <li>Mastikos</li>
                                    <li>Kabelių sandarikliai</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Priešgaisrinės sklendės -->
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="{{ asset('images/fire-dampers.jpg') }}" alt="Priešgaisrinės sklendės" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Priešgaisrinės sklendės</h3>
                                <p class="text-gray-600 mb-4">
                                    Ventiliacijos sistemų priešgaisrinės sklendės.
                                </p>
                                <ul class="list-disc pl-4 mb-4">
                                    <li>Automatinis valdymas</li>
                                    <li>Įvairūs dydžiai</li>
                                    <li>Sertifikuoti produktai</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12">
                        <h2 class="text-2xl font-semibold mb-4">Kodėl rinktis mūsų produktus?</h2>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">Kokybė</h3>
                                <p>Visi produktai atitinka ES standartus ir turi reikiamus sertifikatus.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">Patirtis</h3>
                                <p>Ilgametė patirtis priešgaisrinės saugos srityje.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">Garantija</h3>
                                <p>Suteikiame garantiją visiems produktams.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">Konsultacijos</h3>
                                <p>Profesionalios konsultacijos ir techninis palaikymas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
