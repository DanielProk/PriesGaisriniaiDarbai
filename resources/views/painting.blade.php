@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="text-3xl font-bold mb-6">Dažymo darbai</h1>
                
                <div class="prose max-w-none">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                        <div>
                            <h2 class="text-2xl font-semibold mb-4">Profesionalūs priešgaisriniai dažymo darbai</h2>
                            <p class="mb-4">
                                Teikiame profesionalias priešgaisrinio dažymo paslaugas, naudodami aukščiausios kokybės 
                                medžiagas ir modernią įrangą. Mūsų specialistai turi ilgametę patirtį ir užtikrina 
                                aukščiausią darbų kokybę.
                            </p>
                            <p class="mb-4">
                                Visi darbai atliekami griežtai laikantis saugos reikalavimų ir technologinių procesų.
                            </p>
                        </div>
                        <div>
                            <img src="{{ asset('images/painting-work.jpg') }}" alt="Dažymo darbai" class="rounded-lg shadow-lg">
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-2xl font-semibold mb-4">Mūsų teikiamos dažymo paslaugos</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">Metalinių konstrukcijų dažymas</h3>
                                <ul class="list-disc pl-4">
                                    <li>Kolonų dažymas</li>
                                    <li>Sijų dažymas</li>
                                    <li>Santvarų dažymas</li>
                                </ul>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">Medinių konstrukcijų dažymas</h3>
                                <ul class="list-disc pl-4">
                                    <li>Perdangų dažymas</li>
                                    <li>Sijų dažymas</li>
                                    <li>Kitų medinių elementų dažymas</li>
                                </ul>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">Specialūs dažymo darbai</h3>
                                <ul class="list-disc pl-4">
                                    <li>Ventiliacijos sistemų dažymas</li>
                                    <li>Kabelių trasų dažymas</li>
                                    <li>Kitų specifinių elementų dažymas</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-2xl font-semibold mb-4">Dažymo proceso etapai</h2>
                        <div class="space-y-4">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">1. Paviršiaus paruošimas</h3>
                                <p>Kruopštus paviršiaus valymas, šlifavimas ir gruntavimas.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">2. Priešgaisrinių dažų dengimas</h3>
                                <p>Profesionalus priešgaisrinių dažų sluoksnių dengimas pagal technologiją.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">3. Džiūvimo procesas</h3>
                                <p>Kontroliuojamas džiūvimo procesas optimaliai apsaugai užtikrinti.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">4. Kokybės kontrolė</h3>
                                <p>Dangos storio matavimas ir kokybės patikra.</p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">5. Dokumentacija</h3>
                                <p>Darbų aktų ir sertifikatų parengimas.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-2xl font-semibold mb-4">Naudojamos medžiagos</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">Priešgaisriniai dažai</h3>
                                <ul class="list-disc pl-4">
                                    <li>Aukščiausios kokybės priešgaisriniai dažai</li>
                                    <li>Sertifikuoti produktai</li>
                                    <li>Ilgalaikė apsauga</li>
                                    <li>Įvairios spalvos</li>
                                </ul>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h3 class="text-xl font-semibold mb-2">Gruntai ir priedai</h3>
                                <ul class="list-disc pl-4">
                                    <li>Specialūs gruntai</li>
                                    <li>Sukibimą gerinantys priedai</li>
                                    <li>Apsauginiai sluoksniai</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-2xl font-semibold mb-4">Kodėl rinktis mus?</h2>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                            <div class="text-center">
                                <div class="text-4xl font-bold text-blue-600 mb-2">10+</div>
                                <p>Metų patirties dažymo srityje</p>
                            </div>
                            <div class="text-center">
                                <div class="text-4xl font-bold text-blue-600 mb-2">500+</div>
                                <p>Sėkmingai atliktų projektų</p>
                            </div>
                            <div class="text-center">
                                <div class="text-4xl font-bold text-blue-600 mb-2">100%</div>
                                <p>Garantija darbams</p>
                            </div>
                            <div class="text-center">
                                <div class="text-4xl font-bold text-blue-600 mb-2">24/7</div>
                                <p>Konsultacijos</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="text-2xl font-semibold mb-4">Susisiekite</h2>
                        <p class="mb-4">
                            Reikalinga konsultacija dėl priešgaisrinio dažymo darbų? Susisiekite su mumis ir 
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
