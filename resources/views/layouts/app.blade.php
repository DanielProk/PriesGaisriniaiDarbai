<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Priešgaisriniai Darbai') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body class="font-sans antialiased bg-gray-100">
    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto">
            <!-- Top Bar -->
            <div class="bg-gray-800 text-white py-2 px-4">
                <div class="flex justify-end space-x-4">
                    <a href="tel:+37067105700" class="hover:text-gray-300">+370 671 05700</a>
                    <a href="mailto:info@priesgaisriniaidarbai.lt" class="hover:text-gray-300">info@priesgaisriniaidarbai.lt</a>
                </div>
            </div>
            
            <!-- Main Navigation -->
            <nav class="px-4 py-4">
                <div class="flex justify-between items-center">
                    <!-- Logo -->
                    <div class="flex-shrink-0">
                        <a href="{{ route('home') }}" class="flex items-center">
                            <img src="{{ asset('images/logo.png') }}" alt="Priešgaisriniai Darbai" class="h-12 w-auto mr-2">
                            <span class="text-2xl font-bold text-gray-800">Priešgaisriniai Darbai</span>
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden md:flex space-x-8">
                        <a href="{{ route('fireblock') }}" class="text-gray-600 hover:text-gray-900">Fireblock</a>
                        <a href="{{ route('design') }}" class="text-gray-600 hover:text-gray-900">Projektavimas</a>
                        <a href="{{ route('products') }}" class="text-gray-600 hover:text-gray-900">Produktai</a>
                        <a href="{{ route('installation') }}" class="text-gray-600 hover:text-gray-900">Priešgais. sis. mont. darbai</a>
                        <a href="{{ route('painting') }}" class="text-gray-600 hover:text-gray-900">Dažymo darbai</a>
                        <a href="{{ route('contact') }}" class="text-gray-600 hover:text-gray-900">Kontaktai</a>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="md:hidden">
                        <button type="button" class="text-gray-600 hover:text-gray-900 focus:outline-none" onclick="document.getElementById('mobile-menu').classList.remove('hidden')">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main class="min-h-screen">
        @if(session('error'))
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white mt-12">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/logo.png') }}" alt="Priešgaisriniai Darbai" class="h-10 w-auto mr-2">
                        <h3 class="text-lg font-semibold">UAB „Priešgaisriniai darbai"</h3>
                    </div>
                    <p class="mb-2">V.Maciulevičiaus g. 53</p>
                    <p class="mb-2">LT-04310, Vilnius</p>
                    <p class="mb-2">Tel: +370 671 05700</p>
                    <p>Email: info@priesgaisriniaidarbai.lt</p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Greitos nuorodos</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('fireblock') }}" class="hover:text-gray-300">Fireblock</a></li>
                        <li><a href="{{ route('products') }}" class="hover:text-gray-300">Produktai</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-gray-300">Kontaktai</a></li>
                    </ul>
                </div>

                <!-- Working Hours -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Darbo laikas</h3>
                    <p class="mb-2">I-V: 8:00 - 17:00</p>
                    <p>VI-VII: Nedirbame</p>
                </div>
            </div>
        </div>
    </footer>

    <div class="hidden fixed inset-0 bg-gray-800 bg-opacity-75 z-50" id="mobile-menu">
        <div class="bg-white h-full w-64 p-4">
            <div class="flex justify-between items-center mb-8">
                <div class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Priešgaisriniai Darbai" class="h-8 w-auto mr-2">
                    <h2 class="text-xl font-bold">Menu</h2>
                </div>
                <button class="text-gray-600 hover:text-gray-900 focus:outline-none" onclick="document.getElementById('mobile-menu').classList.add('hidden')">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <nav class="space-y-4">
                <a href="{{ route('fireblock') }}" class="block text-gray-600 hover:text-gray-900">Fireblock</a>
                <a href="{{ route('design') }}" class="block text-gray-600 hover:text-gray-900">Projektavimas</a>
                <a href="{{ route('products') }}" class="block text-gray-600 hover:text-gray-900">Produktai</a>
                <a href="{{ route('installation') }}" class="block text-gray-600 hover:text-gray-900">Priešgais. sis. mont. darbai</a>
                <a href="{{ route('painting') }}" class="block text-gray-600 hover:text-gray-900">Dažymo darbai</a>
                <a href="{{ route('contact') }}" class="block text-gray-600 hover:text-gray-900">Kontaktai</a>
            </nav>
        </div>
    </div>

    @stack('scripts')
</body>
</html>
