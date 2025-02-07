@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="p-8">
            <h1 class="text-3xl font-bold mb-6">Kontaktai</h1>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h2 class="text-2xl font-semibold mb-4">Susisiekite su mumis</h2>
                    
                    <div class="space-y-4">
                        <div>
                            <h3 class="font-semibold text-gray-700">Adresas:</h3>
                            <p>V.Maciulevičiaus g. 53,</p>
                            <p>LT-04310, Vilnius</p>
                        </div>
                        
                        <div>
                            <h3 class="font-semibold text-gray-700">Telefonas:</h3>
                            <p><a href="tel:+37067105700" class="text-blue-600 hover:text-blue-800">+370 671 05700</a></p>
                        </div>
                        
                        <div>
                            <h3 class="font-semibold text-gray-700">El. paštas:</h3>
                            <p><a href="mailto:info@priesgaisriniaidarbai.lt" class="text-blue-600 hover:text-blue-800">info@priesgaisriniaidarbai.lt</a></p>
                        </div>
                        
                        <div>
                            <h3 class="font-semibold text-gray-700">Darbo laikas:</h3>
                            <p>I-V: 8:00 - 17:00</p>
                            <p>VI-VII: Nedirbame</p>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h2 class="text-2xl font-semibold mb-4">Parašykite mums</h2>
                    
                    <form action="#" method="POST" class="space-y-4">
                        @csrf
                        
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Vardas</label>
                            <input type="text" name="name" id="name" required 
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">El. paštas</label>
                            <input type="email" name="email" id="email" required 
                                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Žinutė</label>
                            <textarea name="message" id="message" rows="4" required 
                                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                        </div>
                        
                        <div>
                            <button type="submit" 
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Siųsti
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
