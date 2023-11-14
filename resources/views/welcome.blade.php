<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ZayratsShop</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <!-- Styles -->

</head>

<body>
    @livewire('navigation-menu')
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

        <div class="max-w-7xl mx-auto p-6 lg:p-8">

            <div class="mt-12">
                <div id="indicators-carousel" class="relative w-full" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="{{ url('images/images3.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ url('images/images4.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ url('images/images1.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
                <div class="mt-8 grid grid-cols-6 md:grid-cols-6 gap-6 lg:gap-8">
                    <a href="{{ route('order') }}" class="relative group inline-block">
                        <div class="relative">
                            <img class="w-auto h-auto duration-300 transform-gpu group-hover:scale-[1.01] rounded-lg cursor-pointer filter hover:blur-md hover:brightness-75" src="{{ url('images/item/item1.png') }}" alt="item1">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <p class="text-white text-xl font-bold shadow-lg">Free Fire</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('order') }}" class="relative group inline-block">
                        <div class="relative">
                            <img class="w-auto h-auto duration-300 transform-gpu group-hover:scale-[1.01] rounded-lg cursor-pointer filter hover:blur-md hover:brightness-75" src="{{ url('images/item/item2.png') }}" alt="item2">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <p class="text-white text-xl font-bold shadow-lg">PUBG</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('order') }}" class="relative group inline-block">
                        <div class="relative">
                            <img class="w-auto h-auto duration-300 transform-gpu group-hover:scale-[1.01] rounded-lg cursor-pointer filter hover:blur-md hover:brightness-75" src="{{ url('images/item/item3.png') }}" alt="item3">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <p class="text-white text-xl font-bold shadow-lg">Genshin</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('order') }}" class="relative group inline-block">
                        <div class="relative">
                            <img class="w-auto h-auto duration-300 transform-gpu group-hover:scale-[1.01] rounded-lg cursor-pointer filter hover:blur-md hover:brightness-75" src="{{ url('images/item/item4.png') }}" alt="item4">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <p class="text-white text-xl font-bold shadow-lg">Call Of Duty</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('order') }}" class="relative group inline-block">
                        <div class="relative">
                            <img class="w-auto h-auto duration-300 transform-gpu group-hover:scale-[1.01] rounded-lg cursor-pointer filter hover:blur-md hover:brightness-75" src="{{ url('images/item/item5.png') }}" alt="item5">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <p class="text-white text-xl font-bold shadow-lg">Valorant</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('order') }}" class="relative group inline-block">
                        <div class="relative">
                            <img class="w-auto h-auto duration-300 transform-gpu group-hover:scale-[1.01] rounded-lg cursor-pointer filter hover:blur-md hover:brightness-75" src="{{ url('images/item/item6.png') }}" alt="item6">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <p class="text-white text-xl font-bold shadow-lg">Mobile Legend</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('order') }}" class="relative group inline-block">
                        <div class="relative">
                            <img class="w-auto h-auto duration-300 transform-gpu group-hover:scale-[1.01] rounded-lg cursor-pointer filter hover:blur-md hover:brightness-75" src="{{ url('images/item/item7.png') }}" alt="item7">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <p class="text-white text-xl font-bold shadow-lg">Undawn</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('order') }}" class="relative group inline-block">
                        <div class="relative">
                            <img class="w-auto h-auto duration-300 transform-gpu group-hover:scale-[1.01] rounded-lg cursor-pointer filter hover:blur-md hover:brightness-75" src="{{ url('images/item/item8.png') }}" alt="item8">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <p class="text-white text-xl font-bold shadow-lg">Sausage Man</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('order') }}" class="relative group inline-block">
                        <div class="relative">
                            <img class="w-auto h-auto duration-300 transform-gpu group-hover:scale-[1.01] rounded-lg cursor-pointer filter hover:blur-md hover:brightness-75" src="{{ url('images/item/item9.png') }}" alt="item9">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <p class="text-white text-xl font-bold shadow-lg">Leaguage of Man</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('order') }}" class="relative group inline-block">
                        <div class="relative">
                            <img class="w-auto h-auto duration-300 transform-gpu group-hover:scale-[1.01] rounded-lg cursor-pointer filter hover:blur-md hover:brightness-75" src="{{ url('images/item/item10.png') }}" alt="item10">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <p class="text-white text-xl font-bold shadow-lg">AOF</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('order') }}" class="relative group inline-block">
                        <div class="relative">
                            <img class="w-auto h-auto duration-300 transform-gpu group-hover:scale-[1.01] rounded-lg cursor-pointer filter hover:blur-md hover:brightness-75" src="{{ url('images/item/item11.png') }}" alt="item11">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <p class="text-white text-xl font-bold shadow-lg">M Seal</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('order') }}" class="relative group inline-block">
                        <div class="relative">
                            <img class="w-auto h-auto duration-300 transform-gpu group-hover:scale-[1.01] rounded-lg cursor-pointer filter hover:blur-md hover:brightness-75" src="{{ url('images/item/item12.png') }}" alt="item12">
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <p class="text-white text-xl font-bold shadow-lg">Bigo Live</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>

    @include('partials.footer')

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
