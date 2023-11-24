<?php $__env->startSection('content'); ?>
<div class="col-span-2">
    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

        <div class="flex justify-between">
            <a href="<?php echo e(route('createItem')); ?>" class="mx-1 dark:hover:bg-gray-500 dark:bg-gray-600 w-28 text-center mt-1 p-2 rounded-lg">
                <button>Back</button>
            </a>
            <h4 class="text-left">List Order</h4>

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
                            <th data-priority="2">Name</th>
                            <th data-priority="3">Images</th>
                            <th data-priority="4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td style="text-align: center"><?php echo e(++$key); ?></td>
                            <td ><?php echo e($item->name); ?></td>
                            <td style="text-align: center"><u><a href="#" class="mx-1 p-2 rounded-lg" onclick="openModalImage('<?php echo e($item->id); ?>')" style="color: blue"><?php echo e($item->image); ?></a></u></td>
                            <td style="text-align: center">
                                <div>
                                    <a href="#" class="mx-1 p-2 rounded-lg" onclick="openModal('<?php echo e($item->id); ?>')">
                                        <i class="fas fa-edit text-xl text-blue-500"></i>
                                    </a>

                                    <a href="#" class="mx-1 p-2 rounded-lg" onclick="openDeleteModal('<?php echo e($item->id); ?>')">
                                        <i class="dark:text-red-600 fas fa-trash text-xl"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <div id="imageModal-<?php echo e($item->id); ?>" class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-50">
                            <div class="flex justify-center items-center min-h-screen">
                                <div class="bg-white text-gray-800 p-8 rounded-lg w-96">
                                    <!-- Modal Content -->
                                    <h2 class="text-2xl font-bold mb-4">Gambar Produk</h2>
                                    <img src="<?php echo e(asset($item->image)); ?>">
                                    <div class="flex-shrink-0 mt-4">
                                        <button class="text-gray-200 bg-gray-600 hover:text-gray-300 py-2 px-4 rounded-md w-full" onclick="closeImageModal('<?php echo e($item->id); ?>')">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="modalEdit-<?php echo e($item->id); ?>" class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-50">
                            <div class="flex justify-center items-center min-h-screen">
                                <div class="bg-white text-gray-800 p-8 rounded-lg w-full max-w-3xl">
                                    <!-- Modal Content -->
                                    <h2 class="text-2xl font-bold mb-4">Edit Item Game</h2>
                                    <form action="<?php echo e(route('updateItem')); ?>" method="POST" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <!-- Nama Input -->
                                        <input type="hidden" name="id_item" value="<?php echo e($item->id); ?>">
                                        <div class="mb-4">
                                            <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                                            <input type="text" id="name" name="name" class="mt-1 p-2 border rounded-md w-full" placeholder="Masukkan nama" value="<?php echo e($item->name); ?>">
                                        </div>

                                        <!-- Keterangan Input -->
                                        <div class="mb-4">
                                            <label for="description" class="block text-sm font-medium text-gray-700">Keterangan</label>
                                            <textarea id="description" name="description" class="mt-1 p-2 border rounded-md w-full" placeholder="Masukkan keterangan"><?php echo e($item->description); ?></textarea>
                                        </div>

                                        <!-- Upload Gambar Input -->
                                        <div class="mb-4">
                                            <label for="photo" class="block text-sm font-medium text-gray-700">Upload Gambar</label>
                                            <input type="file" id="photo" name="photo" class="mt-1 p-2 border rounded-md w-full">
                                        </div>

                                        <div class="flex justify-between">
                                            <!-- Tombol Keluar Modal -->
                                            <div class="flex-shrink-0">
                                                <button type="button" class="text-gray-200 bg-gray-600 hover:text-gray-300 py-2 px-4 rounded-md" onclick="closeModal('<?php echo e($item->id); ?>')">Tutup Modal</button>
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

                        <div id="deleteModal-<?php echo e($item->id); ?>" class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-50">
                            <div class="flex justify-center items-center min-h-screen">
                                <div class="bg-white text-gray-800 p-8 rounded-lg w-full max-w-xl">
                                    <!-- Modal Content -->
                                    <center><h3 class="text-xl font-bold mb-4">Apakah Anda yakin ingin menghapus produk ini?</h3></center>
                                    <div class="flex-shrink-0 mt-4 text-center">
                                        <div class="inline-flex items-center justify-center">
                                            <button class="text-gray-200 bg-gray-600 hover:text-gray-300 py-2 px-4 rounded-md" onclick="closeDeleteModal('<?php echo e($item->id); ?>')">Tidak</button>
                                            <form action="<?php echo e(route('deleteItem')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="id_item" value="<?php echo e($item->id); ?>">
                                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md ml-2">Yakin</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>

                </table>
            </div>
            <!--/Card-->
        </div>
        <!--/container-->

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
    function openModal(itemId) {
        var modalId = 'modalEdit-' + itemId;
        document.getElementById(modalId).classList.remove('hidden');
    }

    function closeModal(itemId) {
        var modalId = 'modalEdit-' + itemId;
        document.getElementById(modalId).classList.add('hidden');
    }

    function openModalImage(itemId) {
        var modalId = 'imageModal-' + itemId;
        document.getElementById(modalId).classList.remove('hidden');
    }

    function closeImageModal(itemId) {
        var modalId = 'imageModal-' + itemId;
        document.getElementById(modalId).classList.add('hidden');
    }

    function openDeleteModal(itemId) {
        var modalId = 'deleteModal-' + itemId;
        document.getElementById(modalId).classList.remove('hidden');
    }

    function closeDeleteModal(itemId) {
        var modalId = 'deleteModal-' + itemId;
        document.getElementById(modalId).classList.add('hidden');
    }
</script>

<script src="../path/to/datatables.min.js"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin_order', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ega\kuliah\workshop aplikasi berbasis web\Proyek_akhir\zayrats_shop\resources\views/admin/list_items.blade.php ENDPATH**/ ?>