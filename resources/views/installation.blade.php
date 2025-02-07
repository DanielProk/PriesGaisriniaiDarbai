@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="text-3xl font-bold mb-6">Priešgaisrinių sistemų montavimo darbai</h1>
                
                <div class="prose max-w-none">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                        <div>
                            <h2 class="text-2xl font-semibold mb-4">Profesionalus montavimas</h2>
                            <p class="mb-4">
                                Mūsų kvalifikuoti specialistai atlieka visų tipų priešgaisrinių sistemų montavimo darbus. 
                                Darbai atliekami laikantis griežtų saugos reikalavimų ir standartų.
                            </p>
                            <p class="mb-4">
                                Užtikriname kokybišką montavimą ir sistemų veikimą, suteikiame garantiją atliktiems darbams.
                            </p>
                        </div>
                        <div>
                            <img src="{{ asset('images/5in1.jpg') }}" alt="Montavimo darbai" class="rounded-lg shadow-lg">
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-2xl font-semibold mb-4">Mūsų teikiamos montavimo paslaugos</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">Priešgaisrinės durys</h3>
                                <ul class="list-disc pl-4">
                                    <li>Metalinių durų montavimas</li>
                                    <li>Stiklinių durų montavimas</li>
                                    <li>Automatikos įrengimas</li>
                                </ul>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">Priešgaisrinės pertvaros</h3>
                                <ul class="list-disc pl-4">
                                    <li>Stiklinių pertvarų montavimas</li>
                                    <li>Modulinių sistemų įrengimas</li>
                                    <li>Sandarinimo darbai</li>
                                </ul>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">Ventiliacijos sistemos</h3>
                                <ul class="list-disc pl-4">
                                    <li>Sklendžių montavimas</li>
                                    <li>Sistemų automatizavimas</li>
                                    <li>Testavimas ir derinimas</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-2xl font-semibold mb-4">Montavimo proceso etapai</h2>
                        <div class="space-y-4">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">1. Objekto įvertinimas</h3>
                                <p>Atliekame išsamų objekto įvertinimą, nustatome montavimo ypatumus ir reikalavimus.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">2. Pasiruošimas darbams</h3>
                                <p>Paruošiame darbo vietą, pristatome reikalingas medžiagas ir įrangą.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">3. Montavimo darbai</h3>
                                <p>Atliekame profesionalius montavimo darbus pagal nustatytus reikalavimus ir standartus.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">4. Testavimas</h3>
                                <p>Testuojame sumontuotas sistemas, tikriname jų veikimą ir efektyvumą.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">5. Dokumentacija</h3>
                                <p>Parengiame visą reikalingą dokumentaciją ir instrukcijas.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-2xl font-semibold mb-4">Mūsų privalumai</h2>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                            <div class="text-center">
                                <div class="text-4xl font-bold text-blue-600 mb-2">15+</div>
                                <p>Metų patirties</p>
                            </div>
                            <div class="text-center">
                                <div class="text-4xl font-bold text-blue-600 mb-2">1000+</div>
                                <p>Įgyvendintų projektų</p>
                            </div>
                            <div class="text-center">
                                <div class="text-4xl font-bold text-blue-600 mb-2">100%</div>
                                <p>Klientų pasitenkinimas</p>
                            </div>
                            <div class="text-center">
                                <div class="text-4xl font-bold text-blue-600 mb-2">24/7</div>
                                <p>Techninis palaikymas</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-2xl font-semibold mb-4">Susisiekite</h2>
                        <p class="mb-4">
                            Norite sužinoti daugiau apie mūsų teikiamas montavimo paslaugas? Susisiekite su mumis ir 
                            mūsų specialistai mielai atsakys į visus jūsų klausimus.
                        </p>
                        <a href="{{ route('contact') }}" class="inline-block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                            Susisiekti
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
