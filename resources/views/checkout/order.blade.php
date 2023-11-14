<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Order</title>

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
    <div class="px-32 py-10 dark:text-white bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="w-full">
            <img class="h-auto w-full rounded-lg" src="{{ url('images/header.png') }}" alt="header_image">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full mt-4">
            <div class="col-span-1 md:col-span-1">
                <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="my-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="col-span-1">
                            <img class="w-auto motion-safe:hover:scale-[1.01] max-h-24 transition-all duration-300 rounded-lg cursor-pointer filter hover:backdrop-grayscale-0" src="{{ url('images/item/item1.png') }}" alt="item1">
                        </div>
                        <div class="col-span-1">
                            <p class="text-left self-start">Mobile Legends</p>
                        </div>
                    </div>
                    <hr>
                    <p class="mt-4 text-sm">Top Up Diamond Mobile Legends Hanya Dalam Hitungan Detik!</p>

                    <div class="text-sm my-4">
                        <p>1. Cukup Masukan User ID dan Zone ID Anda.</p>
                        <p>2. Pilih Jumlah Diamond Yang Anda inginkan.</p>
                        <p>3. Pilih Pembayaran Yang Anda Gunakan Dan Selesaikan Pembayaran.</p>
                        <p>4. Dan Diamond Akan Secara Langsung Ditambahkan Ke Akun Anda.</p>
                    </div>

                    <p class="text-sm">Unduh Aplikasi Zayratshop Sekarang Juga Agar Top Up Semakin Mudah!</p>
                </div>
            </div>

            <div class="col-span-1 md:col-span-2">
                <div class="grid grid-rows-1 gap-4">
                    <div class="row-span-1">
                        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <h4>Masukkan User ID</h4>

                            <hr>
                            <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="col-span-1">
                                    <input type="text" id="user_id" name="user_id" class="dark:text-gray-800 mt-1 p-2 border rounded-3xl w-full" placeholder="User ID">
                                </div>

                                <div class="col-span-1">
                                    <input type="text" id="server_id" name="server_id" class="dark:text-gray-800 mt-1 p-2 border rounded-3xl w-full" placeholder="Server ID">
                                </div>
                            </div>
                            <p class="mt-4 text-sm text-gray-300">Silahkan Masukkan User ID & Server Anda Dan Pastikan Benar.</p>
                        </div>
                    </div>

                    <div class="row-span-1">
                        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <h4>Pilih Nominal Top Up</h4>
                            <hr class="mt-2 mb-6">

                            <ul class="grid w-full gap-6 md:grid-cols-3">
                                <li>
                                    <input type="radio" id="price" name="price" value="price" class="hidden peer" required>
                                    <label for="price" class="border border-gray-200 inline-flex items-center justify-between w-full p-5 text-gray-500 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-white bg-gray-600 dark:hover:bg-gray-700">
                                        <div class="block">
                                            <div class="w-full text-md font-semibold">Weekly Diamond Pass</div>
                                            <div class="w-full">Rp 23.300,-</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="price2" name="price" value="price2" class="hidden peer" required>
                                    <label for="price2" class="border border-gray-200 inline-flex items-center justify-between w-full p-5 text-gray-500 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-white bg-gray-600 dark:hover:bg-gray-700">
                                        <div class="block">
                                            <div class="w-full text-md font-semibold">Weekly Diamond Pass</div>
                                            <div class="w-full">Rp 23.300,-</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="price3" name="price" value="price3" class="hidden peer" required>
                                    <label for="price3" class="border border-gray-200 inline-flex items-center justify-between w-full p-5 text-gray-500 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-white bg-gray-600 dark:hover:bg-gray-700">
                                        <div class="block">
                                            <div class="w-full text-md font-semibold">Weekly Diamond Pass</div>
                                            <div class="w-full">Rp 23.300,-</div>
                                        </div>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="price4" name="price" value="price4" class="hidden peer" required>
                                    <label for="price4" class="border border-gray-200 inline-flex items-center justify-between w-full p-5 text-gray-500 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-white bg-gray-600 dark:hover:bg-gray-700">
                                        <div class="block">
                                            <div class="w-full text-md font-semibold">Weekly Diamond Pass</div>
                                            <div class="w-full">Rp 23.300,-</div>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row-span-1" id="accordion-open" data-accordion="close">
                        <div class="grid grid-rows-1 gap-4 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <h4>Pilih Pembayaran</h4>
                            <hr>
                            <div id="accordion-open" data-accordion="close">

                                <h2 id="accordion-open-heading-2">
                                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-open-body-2" aria-expanded="true" aria-controls="accordion-open-body-2">
                                        <div class="mt-2 w-full px-4 grid grid-rows-1 ">
                                            <div class="dark:bg-gray-600 rounded-t-md">
                                                <p class="py-2 px-4">E-Wallet</p>
                                            </div>
                                            <div class="dark:bg-white rounded-b-md flex items-end justify-end grid-cols-1 md:grid-cols-2 gap-4">
                                                <img src="{{ url('images/payment/e-walet.png') }}" class="h-10 mr-3" alt="Logo" />
                                                <svg data-accordion-icon class="mb-2 w-5 h-5 rotate-180 shrink-0 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                                </svg>
                                            </div>

                                        </div>
                                    </button>
                                </h2>
                                <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                                    <ul class="grid w-full px-16 gap-2 md:grid-cols-4">
                                        <li>
                                            <input type="radio" id="qris" name="payment" value="qris" class="hidden peer" required>
                                            <label for="qris" class="border border-gray-200 inline-flex items-center justify-between w-full p-5 text-gray-500 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gray-800 hover:text-gray-400 hover:bg-gray-100 dark:text-dark bg-gray-200 dark:hover:bg-gray-400">
                                                <div class="block">
                                                    <img src="{{ url('images/payment/dana.png') }}" class="col-span-1 h-10 " alt="Logo" />
                                                    <div class="w-full text-md font-semibold">Dana</div>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="qris2" name="payment" value="qris2" class="hidden peer" required>
                                            <label for="qris2" class="border border-gray-200 inline-flex items-center justify-between w-full p-5 text-gray-500 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gray-800 hover:text-gray-400 hover:bg-gray-100 dark:text-dark bg-gray-200 dark:hover:bg-gray-400">
                                                <div class="block">
                                                    <img src="{{ url('images/payment/ovo.png') }}" class="col-span-1 h-10 " alt="Logo" />
                                                    <div class="w-full text-md font-semibold">Ovo</div>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="qris3" name="payment" value="qris3" class="hidden peer" required>
                                            <label for="qris3" class="border border-gray-200 inline-flex items-center justify-between w-full p-5 text-gray-500 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gray-800 hover:text-gray-400 hover:bg-gray-100 dark:text-dark bg-gray-200 dark:hover:bg-gray-400">
                                                <div class="block">
                                                    <img src="{{ url('images/payment/linkaja.png') }}" class="col-span-1 h-10 " alt="Logo" />
                                                    <div class="w-full text-md font-semibold">Linkaja</div>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="qris4" name="payment" value="qris4" class="hidden peer" required>
                                            <label for="qris4" class="border border-gray-200 inline-flex items-center justify-between w-full p-5 text-gray-500 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gray-800 hover:text-gray-400 hover:bg-gray-100 dark:text-dark bg-gray-200 dark:hover:bg-gray-400">
                                                <div class="block">
                                                    <img src="{{ url('images/payment/spay.png') }}" class="col-span-1 h-10 " alt="Logo" />
                                                    <div class="w-full text-md font-semibold">SPay</div>
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <h2 id="accordion-open-heading-1">
                                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-open-body-1" aria-expanded="true" aria-controls="accordion-open-body-1">
                                        <div class="mt-2 w-full px-4 grid grid-rows-1 ">
                                            <div class="dark:bg-gray-600 rounded-t-md">
                                                <p class="py-2 px-4">QRIS</p>
                                            </div>
                                            <div class="dark:bg-white rounded-b-md flex items-end justify-end grid-cols-1 md:grid-cols-2 gap-4">
                                                <img src="{{ url('images/payment/payol.png') }}" class="h-10 mr-3" alt="Logo" />
                                                <svg data-accordion-icon class="mb-2 w-5 h-5 rotate-180 shrink-0 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                                </svg>
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
                                    <ul class="grid w-full px-16 gap-2 md:grid-cols-1">
                                        <li>
                                            <input type="radio" id="bca" name="payment" value="bca" class="hidden peer" required>
                                            <label for="bca" class="border border-gray-200 inline-flex items-center justify-between w-full p-5 text-gray-500 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gray-800 hover:text-gray-400 hover:bg-gray-100 dark:text-dark bg-gray-200 dark:hover:bg-gray-400">
                                                <div class="block">
                                                    <div class="w-full text-md font-semibold">Klik Gambar QRIS dibawah untuk melanjutkan</div>
                                                    <img src="{{ url('images/payment/qris.jpeg') }}" class="col-span-1 h-84 " alt="Logo" />

                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <h2 id="accordion-open-heading-3">
                                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-open-body-3" aria-expanded="true" aria-controls="accordion-open-body-3">
                                        <div class="mt-2 w-full px-4 grid grid-rows-1 ">
                                            <div class="dark:bg-gray-600 rounded-t-md">
                                                <p class="py-2 px-4">Convenience Store</p>
                                            </div>
                                            <div class="dark:bg-white rounded-b-md flex items-end justify-end grid-cols-1 md:grid-cols-2 gap-4">
                                                <img src="{{ url('images/payment/indoalfa.png') }}" class="h-10 mr-3" alt="Logo" />
                                                <svg data-accordion-icon class="mb-2 w-5 h-5 rotate-180 shrink-0 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                                </svg>
                                            </div>

                                        </div>
                                    </button>
                                </h2>
                                <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-2">
                                    <ul class="grid w-full px-16 gap-2 md:grid-cols-2">
                                        <li>
                                            <input type="radio" id="indomaret" name="payment" value="indomaret" class="hidden peer" required>
                                            <label for="indomaret" class="border border-gray-200 inline-flex items-center justify-between w-full p-5 text-gray-500 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gray-800 hover:text-gray-400 hover:bg-gray-100 dark:text-dark bg-gray-200 dark:hover:bg-gray-400">
                                                <div class="block">
                                                    <img src="{{ url('images/payment/indomaret.png') }}" class="col-span-1 h-10 " alt="Logo" />
                                                    <div class="w-full text-md font-semibold">Indomaret</div>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="alfamaret" name="payment" value="alfamaret" class="hidden peer" required>
                                            <label for="alfamaret" class="border border-gray-200 inline-flex items-center justify-between w-full p-5 text-gray-500 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gray-800 hover:text-gray-400 hover:bg-gray-100 dark:text-dark bg-gray-200 dark:hover:bg-gray-400">
                                                <div class="block">
                                                    <img src="{{ url('images/payment/alfamart.png') }}" class="col-span-1 h-10 " alt="Logo" />
                                                    <div class="w-full text-md font-semibold">Alfamart</div>
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <h2 id="accordion-open-heading-4">
                                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500  rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-open-body-4" aria-expanded="true" aria-controls="accordion-open-body-4">
                                        <div class="mt-2 w-full px-4 grid grid-rows-1 ">
                                            <div class="dark:bg-gray-600 rounded-t-md">
                                                <p class="py-2 px-4">Virtual Account</p>
                                            </div>
                                            <div class="dark:bg-white rounded-b-md flex items-end justify-end grid-cols-1 md:grid-cols-2 gap-4">
                                                <img src="{{ url('images/payment/mbanking.png') }}" class="h-10 mr-3" alt="Logo" />
                                                <svg data-accordion-icon class="mb-2 w-5 h-5 rotate-180 shrink-0 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                                </svg>
                                            </div>

                                        </div>
                                    </button>
                                </h2>
                                <div id="accordion-open-body-4" class="hidden" aria-labelledby="accordion-open-heading-2">
                                    <ul class="grid w-full px-16 gap-2 md:grid-cols-3">
                                        <li>
                                            <input type="radio" id="bca" name="payment" value="bca" class="hidden peer" required>
                                            <label for="bca" class="border border-gray-200 inline-flex items-center justify-between w-full p-5 text-gray-500 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gray-800 hover:text-gray-400 hover:bg-gray-100 dark:text-dark bg-gray-200 dark:hover:bg-gray-400">
                                                <div class="block">
                                                    <img src="{{ url('images/payment/bca.png') }}" class="col-span-1 h-10 " alt="Logo" />
                                                    <div class="w-full text-md font-semibold">BCA</div>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="bni" name="payment" value="bni" class="hidden peer" required>
                                            <label for="bni" class="border border-gray-200 inline-flex items-center justify-between w-full p-5 text-gray-500 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gray-800 hover:text-gray-400 hover:bg-gray-100 dark:text-dark bg-gray-200 dark:hover:bg-gray-400">
                                                <div class="block">
                                                    <img src="{{ url('images/payment/bni.png') }}" class="col-span-1 h-10 " alt="Logo" />
                                                    <div class="w-full text-md font-semibold">BNI</div>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="bri" name="payment" value="bri" class="hidden peer" required>
                                            <label for="bri" class="border border-gray-200 inline-flex items-center justify-between w-full p-5 text-gray-500 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gray-800 hover:text-gray-400 hover:bg-gray-100 dark:text-dark bg-gray-200 dark:hover:bg-gray-400">
                                                <div class="block">
                                                    <img src="{{ url('images/payment/bri.png') }}" class="col-span-1 h-10 " alt="Logo" />
                                                    <div class="w-full text-md font-semibold">BRI</div>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="mandiri" name="payment" value="mandiri" class="hidden peer" required>
                                            <label for="mandiri" class="border border-gray-200 inline-flex items-center justify-between w-full p-5 text-gray-500 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gray-800 hover:text-gray-400 hover:bg-gray-100 dark:text-dark bg-gray-200 dark:hover:bg-gray-400">
                                                <div class="block">
                                                    <img src="{{ url('images/payment/mandiri.png') }}" class="col-span-1 h-10 " alt="Logo" />
                                                    <div class="w-full text-md font-semibold">Mandiri</div>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="permatabank" name="payment" value="permatabank" class="hidden peer" required>
                                            <label for="permatabank" class="border border-gray-200 inline-flex items-center justify-between w-full p-5 text-gray-500 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-gray-800 hover:text-gray-400 hover:bg-gray-100 dark:text-dark bg-gray-200 dark:hover:bg-gray-400">
                                                <div class="block">
                                                    <img src="{{ url('images/payment/permatabank.png') }}" class="col-span-1 h-10 " alt="Logo" />
                                                    <div class="w-full text-md font-semibold">Permata Bank</div>
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                            <h4>Nama Pemilik Akun Topup</h4>
                            <hr>
                            <div class="mt-2">
                                <input type="text" id="nameaccount" name="nameaccount" class=" dark:text-gray-800 p-2 border rounded-3xl w-full dark:text-dark" placeholder="Nama Akun">
                            </div>
                        </div>
                    </div>


                    <div class="row-span-1">
                        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                            <h4>Nomor Whatsapp</h4>
                            <hr>
                            <div class="mt-4">
                                <input type="number" id="whatsapp" name="whatsapp" class="dark:text-gray-800 mt-1 p-2 border rounded-3xl w-full" placeholder="08xxxxxxxxxxxx">
                            </div>
                            <p class="mt-4 text-sm text-gray-300">Bukti pembelianmu akan kami kirimkan ke WhatsApp.</p>
                            <a href="">
                                <div class="dark:hover:bg-blue-500 bg-blue-400 w-48 text-center mt-1 p-2 rounded-3xl ">
                                    <h4>Konfirmasi Topup</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    @include('partials.footer')

    <script src="../path/to/flowbite/dist/flowbite.min.js">

    </script>
</body>

</html>
