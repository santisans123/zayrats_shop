@extends('admin.layouts.admin_order')

<style>
    #dropdownNominal {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    #dropdownNominal li {
        list-style-type: none;
    }

</style>
@section('content')
<div class="col-span-2">
    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <h4>Buat Order</h4>
        <hr class="my-2">

        <form action="{{ route('createOrderAdmin') }}" method="post">
            @csrf
            <div class="flex justify-between">
                <div class="w-1/2 py-2">
                    <p>Nama Customer</p>
                </div>
    
                <div class="relative">
                    @php
                        $selectedUserName = old('selectedUserName') ?? '-- Pilih Customer --';
                    @endphp
                    <button id="dropdownDefaultButtonUser" data-dropdown-toggle="dropdownUser" class="w-96 dark:bg-gray-800 dark:text-gray-200 mt-1 border rounded-3xl flex items-center justify-between px-4 py-2" onclick="toggleDropdownUser(event)">
                        {{ $selectedUserName }}
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <input type="hidden" name="user_id" id="selectedUser" value="{{ old('selectedUser') }}"  required>
                    <input type="hidden" name="selectedUserName" id="selectedUserName" value="{{ old('selectedUserName') }}">
                    <!-- Dropdown menu -->
                    <div id="dropdownUser" class="absolute z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButtonUser">
                            @foreach ($users as $user)
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectUser('{{ $user->id }}', '{{ $user->name }}')">{{ $user->name }}</a>   
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flex justify-between">
                <div class="w-1/2 py-2">
                    <p>Jenis Game</p>
                </div>
    
                <div class="relative">
                    @php
                        $selectedItemName = old('selectedItemName') ?? '-- Pilih Item --';
                    @endphp
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="w-96 dark:bg-gray-800 dark:text-gray-200 mt-1 border rounded-3xl flex items-center justify-between px-4 py-2" onclick="toggleDropdown(event)">
                        {{ $selectedItemName }}
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <input type="hidden" name="item_id" id="selectedItem" value="{{ old('selectedItem') }}"  required>
                    <input type="hidden" name="selectedItemName" id="selectedItemName" value="{{ old('selectedItemName') }}">
                    <!-- Dropdown menu -->
                    <div id="dropdown" class="absolute z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            @foreach ($items as $item)
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectItem('{{ $item->id }}', '{{ $item->name }}')">{{ $item->name }}</a>   
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
    
            <div class="flex justify-between">
                <div class="w-1/2 py-2">
                    <p>Nominal Topup</p>
                </div>
    
                <div class="relative">
                    @php
                        $selectedNominalName = old('selectedNominalName') ?? '-- Pilih Nominal --';
                    @endphp
                    <button id="dropdownNominalButton" data-dropdown-toggle="dropdownNominal" class="w-96 dark:bg-gray-800 dark:text-gray-200 mt-1 border rounded-3xl flex items-center justify-between px-4 py-2" onclick="toggleDropdownNominal(event)">
                        {{ $selectedNominalName }}
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <input type="hidden" name="nominal_id" id="selectedNominal" value="{{ old('selectedNominal') }}"  required>
                    <input type="hidden" name="selectedNominalName" id="selectedNominalName" value="{{ old('selectedNominalName') }}">
                    <!-- Dropdown menu -->
                    <div id="dropdownNominal" class="absolute z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownNominalButton">
                            <!-- Dropdown items will be dynamically inserted here using JavaScript -->
                        </ul>
                    </div>
                </div>
            </div>
    
            <div class="flex justify-between">
                <div class="w-1/2 py-2">
                    <p>Email User</p>
                </div>
                <div class="py-2">
                    <input style="color:black" type="email" id="email" name="email" class="w-96 dark:bg-gray-200 dark:text-gray-200 mt-1 p-2 border rounded-3xl" placeholder="Email" required>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="w-1/2 py-2">
                    <p>Whatsapp User</p>
                </div>
                <div class="py-2">
                    <input style="color:black" type="number" id="whatsapp" name="whatsapp" class="w-96 dark:bg-gray-200 dark:text-gray-200 mt-1 p-2 border rounded-3xl" placeholder="Whatsapp" required>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="w-1/2 py-2">
                    <p>Jenis Payment</p>
                </div>
    
                <div class="relative">
                    @php
                        $selectedPayment = old('selectPayment') ?? '-- Pilih Payment --';
                    @endphp
                    <button id="dropdownDefaultButton2" data-dropdown-toggle="dropdown2" class="w-96 dark:bg-gray-800 dark:text-gray-200 mt-1 border rounded-3xl flex items-center justify-between px-4 py-2" onclick="toggleDropdownPayment(event)">
                        -- Pilih Payment --
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <input type="hidden" name="payment" id="selectPayemnt" value="{{ old('selectPayment') }}"  required>
                    <!-- Dropdown menu -->
                    <div id="dropdown2" class="absolute z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectPayment('QRIS')">QRIS</a>   
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectPayment('Dana')">Dana</a>   
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectPayment('OVO')">OVO</a> 
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectPayment('LinkAja')">LinkAja</a> 
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectPayment('Spay')">Spay</a> 
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectPayment('Alfamart')">Alfamart</a> 
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectPayment('Indomaret')">Indomaret</a> 
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectPayemnt('BCA')">BCA</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectPayemnt('BRI')">BNI</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectPayemnt('BRI')">BRI</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectPayemnt('Mandiri')">Mandiri</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="w-1/2 py-2">
                    <p>ID Game</p>
                </div>
                <div class="py-2">
                    <input style="color:black" type="uid" id="uid" name="uid" class="w-96 dark:bg-gray-200 dark:text-gray-200 mt-1 p-2 border rounded-3xl" placeholder="ID Game" required>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="w-1/2 py-2">
                    <p>Server Game</p>
                </div>
                <div class="py-2">
                    <input style="color:black" type="serverid" id="serverid" name="serverid" class="w-96 dark:bg-gray-200 dark:text-gray-200 mt-1 p-2 border rounded-3xl" placeholder="Server Game" required>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="w-1/2 py-2">
                    <p>Nama Akun</p>
                </div>
                <div class="py-2">
                    <input style="color:black" type="account_name" id="account_name" name="account_name" class="w-96 dark:bg-gray-200 dark:text-gray-200 mt-1 p-2 border rounded-3xl" placeholder="Nama Akun" required>
                </div>
            </div>
            <div class="flex justify-between mt-4">
                {{-- <a href="">
                    <div class="dark:hover:bg-red-500 dark:bg-red-600 w-32 text-center mt-1 p-2 rounded-lg ">
                        <h4>Delete</h4>
                    </div>
                </a> --}}
                <div class="flex justify-end">
                    <button type="submit" class="mx-1 dark:hover:bg-blue-500 dark:bg-blue-600 w-28 text-center mt-1 p-2 rounded-lg ">
                            <h4>Save</h4>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@stop

<script>
    function toggleDropdownUser(event) {
        event.preventDefault();
        var dropdown = document.getElementById("dropdownUser");
        dropdown.classList.toggle("hidden");
    }

    function selectUser(userId, userName) {
        var dropdownButton = document.getElementById("dropdownDefaultButtonUser");
        var hiddenInput = document.getElementById("selectedUser");
        var hiddenInputName = document.getElementById("selectedUserName");

        dropdownButton.innerText = userName;
        hiddenInput.value = userId;
        hiddenInputName.value = userName;

        var dropdown = document.getElementById("dropdownUser");
        dropdown.classList.add("hidden");
    }

    function toggleDropdown(event) {
        event.preventDefault();
        var dropdown = document.getElementById("dropdown");
        dropdown.classList.toggle("hidden");
    }

    function selectItem(itemId, itemName) {
        var dropdownButton = document.getElementById("dropdownDefaultButton");
        var hiddenInput = document.getElementById("selectedItem");
        var hiddenInputName = document.getElementById("selectedItemName");

        dropdownButton.innerText = itemName;
        hiddenInput.value = itemId;
        hiddenInputName.value = itemName;

        var dropdown = document.getElementById("dropdown");
        dropdown.classList.add("hidden");

        // Fetch nominals based on selected item
        fetch('/getNominals/' + itemId)
            .then(response => response.json())
            .then(data => {
                // Update nominal dropdown items
                updateNominalDropdown(data);
            })
            .catch(error => {
                console.error('Error fetching nominals:', error);
            });
    }

    function toggleDropdownNominal(event) {
        event.preventDefault();
        var dropdown = document.getElementById("dropdownNominal");
        dropdown.classList.toggle("hidden");
    }

    function updateNominalDropdown(nominals) {
        var dropdownNominal = document.getElementById("dropdownNominal");
        dropdownNominal.innerHTML = ""; // Clear existing items

        nominals.forEach(nominal => {
            var listItem = document.createElement("li");
            var anchor = document.createElement("a");
            anchor.href = "#";
            anchor.classList.add("block", "px-4", "py-2", "hover:bg-gray-100", "dark:hover:bg-gray-600", "dark:hover:text-white");
            anchor.textContent = nominal.title + ' - Rp. ' + nominal.nominal;
            anchor.onclick = function () {
                selectNominal(nominal.id, nominal.title, nominal.nominal);
            };

            anchor.style.listStyleType = 'none';
            
            listItem.appendChild(anchor);
            dropdownNominal.appendChild(listItem);
        });
    }

    function selectNominal(nominalId, nominalTitle, nominalName) {
        var dropdownButton = document.getElementById("dropdownNominalButton");
        var hiddenInput = document.getElementById("selectedNominal");
        var hiddenInputName = document.getElementById("selectedNominalName");

        dropdownButton.innerText = nominalTitle + ' - Rp. ' + nominalName;
        hiddenInput.value = nominalId;
        hiddenInputName.value = nominalTitle + ' - Rp. ' + nominalName;

        var dropdown = document.getElementById("dropdownNominal");
        dropdown.classList.add("hidden");
    }

    function toggleDropdownPayment(event) {
        event.preventDefault();
        var dropdown = document.getElementById("dropdown2");
        dropdown.classList.toggle("hidden");
    }

    function selectPayment(payment) {
        var dropdownButton = document.getElementById("dropdownDefaultButton2");
        var hiddenInput = document.getElementById("selectPayemnt");

        dropdownButton.innerText = payment; 
        hiddenInput.value = payment;

        var dropdown = document.getElementById("dropdown2");
        dropdown.classList.add("hidden");
    }
</script>
