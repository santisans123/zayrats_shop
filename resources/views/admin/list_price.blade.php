@extends('admin.layouts.admin_order')

@section('content')
<div class="col-span-2">
    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

        <div class="flex justify-between">
            <a href="{{ route('productPrice') }}" class="mx-1 dark:hover:bg-gray-500 dark:bg-gray-600 w-28 text-center mt-1 p-2 rounded-lg">
                <button>Back</button>
            </a>
            <h4 class="text-left">Product Price List</h4>
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
                            <th data-priority="2">Game</th>
                            <th data-priority="3">Title</th>
                            <th data-priority="4">Nominal</th>
                            <th data-priority="4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nominals as $key=>$nominal)
                        <tr>
                            <td><center>{{ ++$key }}</center></td>
                            <td>{{ optional($nominal->item)->name ?: 'Produk tidak ditemukan' }}</td>
                            <td>{{ $nominal->title }}</td>
                            <td><center>Rp. {{ number_format($nominal->nominal) }}</center></td>
                            <td>
                                <center>
                                    <div>
                                        <a href="#" class="mx-1 p-2 rounded-lg" onclick="openModal('{{ $nominal->id }}')">
                                            <i class="fas fa-edit text-xl text-blue-500"></i>
                                        </a>

                                        <a href="#" class="mx-1 p-2 rounded-lg"  onclick="openDeleteModal('{{ $nominal->id }}')">
                                            <i class="dark:text-red-600 fas fa-trash text-xl"></i>
                                        </a>
                                    </div>
                                </center>
                            </td>
                        </tr>

                        <div id="modalEdit-{{ $nominal->id }}" class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-50">
                            <div class="flex justify-center items-center min-h-screen">
                                <div class="bg-white text-gray-800 p-8 rounded-lg w-full max-w-3xl">
                                    <!-- Modal Content -->
                                    <h2 class="text-2xl font-bold mb-4">Edit Item Game</h2>
                                    <form action={{ route('updatePrice') }} method="POST">
                                        @csrf
                                        <input type="hidden" name="id_nominal" value="{{ $nominal->id }}">
                                        <div class="flex justify-between">
                                            <div class="w-1/2 py-2">
                                                <p>Jenis Game</p>
                                            </div>

                                            <div class="relative">
                                                @php
                                                    $selectedItemName = optional($nominal->item)->name ?? '-- Pilih Item --';
                                                @endphp
                                                <button id="dropdownDefaultButton-{{ $nominal->id }}" data-dropdown-toggle="dropdown" class="w-96 dark:bg-gray-800 dark:text-gray-200 mt-1 border rounded-3xl flex items-center justify-between px-4 py-2" onclick="toggleDropdown(event, '{{ $nominal->id }}')">
                                                    {{ $selectedItemName }}
                                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                                    </svg>
                                                </button>
                                                <input type="hidden" name="selectedItem" id="selectedItem-{{ $nominal->id }}" value="{{ old('selectedItem') }}">
                                                <input type="hidden" name="selectedItemName" id="selectedItemName-{{ $nominal->id }}" value="{{ old('selectedItemName') }}">
                                                <!-- Dropdown menu -->
                                                <div id="dropdown-{{ $nominal->id }}" class="absolute z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton-{{ $nominal->id }}">
                                                        @foreach ($items as $item)
                                                        <li>
                                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectItem('{{ $item->id }}', '{{ $item->name }}', '{{ $nominal->id }}')">{{ $item->name }}</a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex justify-between">
                                            <div class="w-1/2 py-2">
                                                <p>Title</p>
                                            </div>
                                            <div class=" py-2">
                                                <input style="color:black" type="text" id="title" name="title" class="w-96 dark:bg-gray-200 dark:text-gray-200 mt-1 p-2 border rounded-3xl" placeholder="Judul" value="{{ $nominal->title }}">
                                            </div>
                                        </div>
                                        <div class="flex justify-between">
                                            <div class="w-1/2 py-2">
                                                <p>Nominal</p>
                                            </div>
                                            <div class="py-2">
                                                <input style="color:black" type="number" id="nominal" name="nominal" class="w-96 dark:bg-gray-200 dark:text-gray-200 mt-1 p-2 border rounded-3xl" placeholder="Nominal"  value="{{ $nominal->nominal }}">
                                            </div>
                                        </div>
                                        <div class="mt-4 flex justify-between">
                                            <!-- Tombol Keluar Modal -->
                                            <div class="flex-shrink-0">
                                                <button type="button" class="text-gray-200 bg-gray-600 hover:text-gray-300 py-2 px-4 rounded-md" onclick="closeModal('{{ $nominal->id }}')">Tutup Modal</button>
                                            </div>
                                            <!-- Tombol Simpan -->
                                            <div class="flex-shrink-0">
                                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div id="deleteModal-{{ $nominal->id }}" class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-50">
                            <div class="flex justify-center items-center min-h-screen">
                                <div class="bg-white text-gray-800 p-8 rounded-lg w-full max-w-xl">
                                    <!-- Modal Content -->
                                    <center><h3 class="text-xl font-bold mb-4">Apakah Anda yakin ingin menghapus nominal ini?</h3></center>
                                    <div class="flex-shrink-0 mt-4 text-center">
                                        <div class="inline-flex items-center justify-center">
                                            <button class="text-gray-200 bg-gray-600 hover:text-gray-300 py-2 px-4 rounded-md" onclick="closeDeleteModal('{{ $nominal->id }}')">Tidak</button>
                                            <form action="{{ route('deletePrice') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id_nominal" value="{{ $nominal->id }}">
                                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md ml-2">Yakin</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!--/Card-->
        </div>

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

<!-- Modal JavaScript -->
<script>
    function openModal(nominalId) {
        var modalId = 'modalEdit-' + nominalId;
        document.getElementById(modalId).classList.remove('hidden');
    }

    function closeModal(nominalId) {
        var modalId = 'modalEdit-' + nominalId;
        document.getElementById(modalId).classList.add('hidden');
    }

    function openDeleteModal(nominalId) {
        var modalId = 'deleteModal-' + nominalId;
        document.getElementById(modalId).classList.remove('hidden');
    }

    function closeDeleteModal(nominalId) {
        var modalId = 'deleteModal-' + nominalId;
        document.getElementById(modalId).classList.add('hidden');
    }

    function toggleDropdown(event, nominalId) {
        event.preventDefault();
        var dropdown = document.getElementById("dropdown-" + nominalId);
        dropdown.classList.toggle("hidden");
    }

    function selectItem(itemId, itemName, nominalId) {
        var dropdownButton = document.getElementById("dropdownDefaultButton-" + nominalId);
        var hiddenInput = document.getElementById("selectedItem-" + nominalId);
        var hiddenInputName = document.getElementById("selectedItemName-" + nominalId);

        dropdownButton.innerText = itemName;
        hiddenInput.value = itemId;
        hiddenInputName.value = itemName;

        var dropdown = document.getElementById("dropdown-" + nominalId);
        dropdown.classList.add("hidden");
    }
</script>

<script src="../path/to/datatables.min.js"></script>

@stop
