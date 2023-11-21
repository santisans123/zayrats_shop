@extends('admin.layouts.admin_order')

@section('content')
<div class="col-span-2">
    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <h4>Recent Actions</h4>
        <hr class="my-2">
        <!-- tampilkan 5 recent actions nya -->
        @foreach ($orders as $order)
            <div class="my-2 flex justify-between items-center">
                <a class="flex items-center">
                    <svg class="w-6 h-6 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <div class="ml-2 grid-cols-1">
                        <p class="space-x-7">{{ optional($order->nominal)->title ?: 'Nominal Produk tidak ditemukan' }} - {{ optional($order->item)->name ?: 'Produk tidak ditemukan' }}</p>
                        <p class="text-md dark:text-gray-400">{{ optional($order->user)->name ?: 'User tidak ditemukan' }}</p>
                    </div>
                </a>
                <div>
                    <!-- Tambahkan elemen untuk menampilkan tanggal di sini -->
                    <p class="text-md dark:text-gray-400">{{ date_format($order->updated_at, 'h:m | d-m-Y') }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="flex justify-end">
        <a href="{{ route('listRecentOrder') }}">
            <div class="mx-1 dark:hover:bg-blue-500 dark:bg-blue-600 w-28 text-center mt-1 p-2 rounded-lg ">
                <h4>More</h4>
            </div>
        </a>
    </div>

</div>
</div>

@stop
