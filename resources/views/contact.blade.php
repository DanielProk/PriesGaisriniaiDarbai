@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="text-3xl font-bold mb-6">Susisiekite su mumis</h1>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Contact Information -->
                    <div>
                        <h2 class="text-2xl font-semibold mb-4">Kontaktinė informacija</h2>
                        
                        <div class="space-y-4">
                            <div>
                                <h3 class="font-semibold text-gray-700">Adresas</h3>
                                <p class="text-gray-600">V.Maciulevičiaus g. 53<br>LT-04310, Vilnius</p>
                            </div>
                            
                            <div>
                                <h3 class="font-semibold text-gray-700">Telefonas</h3>
                                <p class="text-gray-600">
                                    <a href="tel:+37067105700" class="hover:text-gray-900">+370 671 05700</a>
                                </p>
                            </div>
                            
                            <div>
                                <h3 class="font-semibold text-gray-700">El. paštas</h3>
                                <p class="text-gray-600">
                                    <a href="mailto:info@priesgaisriniaidarbai.lt" class="hover:text-gray-900">info@priesgaisriniaidarbai.lt</a>
                                </p>
                            </div>
                            
                            <div>
                                <h3 class="font-semibold text-gray-700">Darbo laikas</h3>
                                <p class="text-gray-600">I-V: 8:00 - 17:00<br>VI-VII: Nedirbame</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Contact Form -->
                    <div>
                        <h2 class="text-2xl font-semibold mb-4">Siųsti žinutę</h2>
                        
                        <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                            @csrf
                            
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Vardas</label>
                                <input type="text" name="name" id="name" required 
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 @error('name') border-red-500 @enderror"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">El. paštas</label>
                                <input type="email" name="email" id="email" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 @error('email') border-red-500 @enderror"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700">Žinutė</label>
                                <textarea name="message" id="message" rows="4" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 @error('message') border-red-500 @enderror"
                                >{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Siųsti
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Map -->
                <div class="mt-12">
                    <h2 class="text-2xl font-semibold mb-4">Mūsų vieta</h2>
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2306.537367644632!2d25.2985833!3d54.6867777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96e7d814e149%3A0x400d18c70e9dc40!2sV.Maciulevi%C4%8Diaus%20g.%2053%2C%20Vilnius%2004310!5e0!3m2!1sen!2slt!4v1675434562714!5m2!1sen!2slt" 
                            width="100%" 
                            height="450" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
