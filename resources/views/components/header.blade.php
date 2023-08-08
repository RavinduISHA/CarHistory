<div id="overlay"></div>
<header class="header-bg relative bg-cover bg-center bg-opacity-75 py-8">
    <nav class="container mx-auto flex justify-between items-center z-50">
        <div id="overlay" class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="flex items-center z-50">
            <img src="{{ asset('images/car (2).png') }}" alt="Logo" class="h-10 mr-3">
            <a href="{{ route('home') }}" class="text-white text-xl font-bold">HISTORY</a>
        </div>

        <div class="space-x-4 ">
            <a href="{{ route('home') }}" class="text-white hover:text-orange-500">Home</a>
            <a href="{{ route('about') }}" class="text-white hover:text-orange-500">About</a>
            <a href="{{ route('carreport') }}" class="text-white hover:text-orange-500">Car Report</a>
            <a href="{{ route('contact') }}" class="text-white hover:text-orange-500">Contact</a>
        </div>
        <div class="relative">
            <button class="reletive flex justify-center items-center text-white hover:text-orange-500">
                <p class="px-4">Language</p>
            </button>

            <div class="hidden absolute right-0 mt-2 w-32 bg-white rounded-md shadow-lg">
                <a href="#" class="block px-4 py-2 text-white hover:text-orange-500">English</a>
                <a href="#" class="block px-4 py-2 text-white hover:text-orange-500">Spanish</a>
            </div>
        </div>
    </nav>
</header>


