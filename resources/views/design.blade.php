@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="text-3xl font-bold mb-6">Projektavimas</h1>
                
                <div class="prose max-w-none">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                        <div>
                            <h2 class="text-2xl font-semibold mb-4">Priešgaisrinių sistemų projektavimas</h2>
                            <p class="mb-4">
                                Mūsų komanda teikia profesionalias priešgaisrinių sistemų projektavimo paslaugas. Projektai rengiami vadovaujantis galiojančiais teisės aktais ir standartais, užtikrinant maksimalų saugumą.
                            </p>
                            <p class="mb-4">
                                Kiekvienas projektas yra unikalus ir pritaikomas pagal kliento poreikius bei pastato specifiką.
                            </p>
                        </div>
                        <div>
                            <img src="{{ asset('images/design-process.jpg') }}" alt="Projektavimo procesas" class="rounded-lg shadow-lg">
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-2xl font-semibold mb-4">Mūsų projektavimo paslaugos</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">Konsultacijos</h3>
                                <p>Teikiame profesionalias konsultacijas priešgaisrinės saugos klausimais.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">Projektų rengimas</h3>
                                <p>Rengiame išsamius priešgaisrinės saugos projektus.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">Dokumentacija</h3>
                                <p>Ruošiame visą reikalingą techninę dokumentaciją.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-2xl font-semibold mb-4">Projektavimo etapai</h2>
                        <ol class="list-decimal pl-6 space-y-4">
                            <li>
                                <h3 class="font-semibold">Objekto įvertinimas</h3>
                                <p>Atliekame išsamų objekto įvertinimą ir poreikių analizę.</p>
                            </li>
                            <li>
                                <h3 class="font-semibold">Koncepcijos kūrimas</h3>
                                <p>Kuriame priešgaisrinės saugos sistemos koncepciją.</p>
                            </li>
                            <li>
                                <h3 class="font-semibold">Projektavimas</h3>
                                <p>Rengiame detalų projektą su visais reikalingais brėžiniais.</p>
                            </li>
                            <li>
                                <h3 class="font-semibold">Derinimas</h3>
                                <p>Deriname projektą su atsakingomis institucijomis.</p>
                            </li>
                            <li>
                                <h3 class="font-semibold">Dokumentacijos parengimas</h3>
                                <p>Parengiame visą reikalingą techninę dokumentaciją.</p>
                            </li>
                        </ol>
                    </div>

                    <div>
                        <h2 class="text-2xl font-semibold mb-4">Kodėl rinktis mus?</h2>
                        <ul class="list-disc pl-6 space-y-2">
                            <li>Ilgametė patirtis priešgaisrinės saugos srityje</li>
                            <li>Profesionali komanda</li>
                            <li>Modernūs sprendimai</li>
                            <li>Atitiktis visiems standartams</li>
                            <li>Konkurencingos kainos</li>
                            <li>Greitas projektų įgyvendinimas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
