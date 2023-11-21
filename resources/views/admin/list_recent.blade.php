@extends('admin.layouts.admin_order')

@section('content')
<div class="col-span-2">
    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

        <div class="flex justify-between">
            <a href="{{ route('recentOrder') }}" class="mx-1 dark:hover:bg-gray-500 dark:bg-gray-600 w-28 text-center mt-1 p-2 rounded-lg">
                <button>Back</button>
            </a>
            <h4 class="text-left">List Recent Actions</h4>
        </div>

        <hr class="my-2">
        <!--Container-->
        <div class="container ">

            <!--Card-->
            <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white text-gray-800">
                <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr>
                            <th data-priority="1">No</th>
                            <th data-priority="3">Tanggal</th>
                            <th data-priority="4">Customer</th>
                            <th data-priority="5">Game</th>
                            <th data-priority="6">Harga</th>
                            <th data-priority="7">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $key=>$order)
                            <tr>
                                <td>
                                    <center>{{ ++$key }}</center>
                                </td>
                                <td><center>{{ date_format($order->updated_at, 'd-m-Y | h:m') }}</center></td>
                                <td>{{ optional($order->user)->name ?: 'User tidak ditemukan' }}</td>
                                <td>{{ optional($order->item)->name ?: 'Produk tidak ditemukan' }}</td>
                                <td>{{ optional($order->nominal)->title ?: 'Nominal Produk tidak ditemukan' }}</td>
                                <td>
                                    <center>
                                        <a href="#" class="mx-1 p-2 rounded-lg" onclick="openDetailModal('{{ $order->id }}')">
                                            <i class="fas fa-eye text-xl dark:text-blue-500"></i>
                                        </a>
                                        <a target="_blank" href="https://wa.me/{{ $order->whatsapp }}" class="mx-1 p-2 rounded-lg">
                                            <i class="fab fa-whatsapp text-xl dark:text-blue-500"></i>
                                        </a>
                                    </center>
                                </td>
                            </tr> 
                        @endforeach
                    </tbody>
                </table>

            </div>
            <!--/Card-->
        </div>

        @foreach ($orders as $order)
            <div id="detailModal-{{ $order->id }}" class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-50">
                <div class="flex justify-center items-center min-h-screen">
                    <div class="bg-white text-gray-800 p-8 rounded-lg w-full max-w-3xl">
                        <!-- Modal Content -->
                        <h2 class="text-2xl font-bold mb-4">Detail Transaksi</h2>
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white border rounded-md">
                                <tbody>
                                    <tr>
                                        <td class="py-2 px-4 border-b">No Transaksi</td>
                                        <td class="py-2 px-4 border-b">{{ $order->trx_num }}</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4 border-b">Server ID</td>
                                        <td class="py-2 px-4 border-b">{{ $order->serverid }}</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4 border-b">Nominal</td>
                                        <td class="py-2 px-4 border-b">Rp. {{ number_format($order->nominal->nominal) }}</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4 border-b">Metode Pembayaran</td>
                                        <td class="py-2 px-4 border-b">{{ $order->payment }}</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4 border-b">Akun Atas Nama</td>
                                        <td class="py-2 px-4 border-b">{{ $order->account_name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4 border-b">WhatsApp</td>
                                        <td class="py-2 px-4 border-b">{{ $order->whatsapp }}</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4 border-b">Tanggal Transaksi</td>
                                        <td class="py-2 px-4 border-b">{{ $order->created_at }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4 flex justify-between">
                            <!-- Tombol Keluar Modal -->
                            <div class="flex-shrink-0">
                                <button class="text-gray-200 bg-gray-600 hover:text-gray-300 py-2 px-4 rounded-md"
                                    onclick="closeDetailModal('{{ $order->id }}')">Tutup Modal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <!--Datatables -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script>
            $(document).ready(function() {
                var table = $('#example').DataTable({
                        responsive: true
                    })
                    .columns.adjust()
                    .responsive.recalc();
            });
        </script>

    </div>
</div>

<script src="../path/to/datatables.min.js"></script>

<script>
    function openDetailModal(orderId) {
        var modalId = 'detailModal-' + orderId;
        document.getElementById(modalId).classList.remove('hidden');
    }

    function closeDetailModal(orderId) {
        var modalId = 'detailModal-' + orderId;
        document.getElementById(modalId).classList.add('hidden');
    }
</script>

@stop
