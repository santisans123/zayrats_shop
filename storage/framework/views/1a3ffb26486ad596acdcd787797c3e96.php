<?php $__env->startSection('content'); ?>
<div class="col-span-2">
    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

        <div class="flex justify-between">
            <h4 class="text-left">Product Price</h4>

            <a href="<?php echo e(route('listPrice')); ?>" class="mx-1 dark:hover:bg-green-500 dark:bg-green-600 w-28 text-center mt-1 p-2 rounded-lg">
                <button>List Price</button>
            </a>
        </div>

        <hr class="my-2">

        <form action="/admin/create-price-store" method="POST">
            <?php echo csrf_field(); ?>

            <div class="flex justify-between">
                <div class="w-1/2 py-2">
                    <p>Jenis Game</p>
                </div>

                <div class="relative">
                    <?php
                        $selectedItemName = old('selectedItemName') ?? '-- Pilih Item --';
                    ?>
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="w-96 dark:bg-gray-800 dark:text-gray-200 mt-1 border rounded-3xl flex items-center justify-between px-4 py-2" onclick="toggleDropdown(event)">
                        <?php echo e($selectedItemName); ?>

                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <input type="hidden" name="selectedItem" id="selectedItem" value="<?php echo e(old('selectedItem')); ?>">
                    <input type="hidden" name="selectedItemName" id="selectedItemName" value="<?php echo e(old('selectedItemName')); ?>">
                    <!-- Dropdown menu -->
                    <div id="dropdown" class="absolute z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="selectItem('<?php echo e($item->id); ?>', '<?php echo e($item->name); ?>')"><?php echo e($item->name); ?></a>   
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flex justify-between">
                <div class="w-1/2 py-2">
                    <p>Title</p>
                </div>
                <div class=" py-2">
                    <input style="color:black" type="text" id="title" name="title" class="w-96 dark:bg-gray-200 dark:text-gray-200 mt-1 p-2 border rounded-3xl" placeholder="Judul">
                </div>
            </div>
            <div class="flex justify-between">
                <div class="w-1/2 py-2">
                    <p>Nominal</p>
                </div>
                <div class="py-2">
                    <input style="color:black" type="number" id="nominal" name="nominal" class="w-96 dark:bg-gray-200 dark:text-gray-200 mt-1 p-2 border rounded-3xl" placeholder="Nominal">
                </div>
            </div>
            <div class="mt-4">
                <div class="flex justify-end">
                    <button type="submit" class="mx-1 dark:hover:bg-blue-500 dark:bg-blue-600 w-28 text-center mt-1 p-2 rounded-lg ">
                        <h4>Save</h4>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


</div>

<?php $__env->stopSection(); ?>

<script>
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
    }
</script>
<?php echo $__env->make('admin.layouts.admin_order', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ega\kuliah\workshop aplikasi berbasis web\Proyek_akhir\zayrats_shop\resources\views/admin/product_price.blade.php ENDPATH**/ ?>