<?php $__env->startSection('content'); ?>
<div class="col-span-2">
    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

        <div class="flex justify-between">
            <h4 class="text-left">List User</h4>

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
                            <th data-priority="2">Nama Lengkap</th>
                            <th data-priority="3">Email</th>
                            <th data-priority="3">Transaksi Terakhir</th>
                            <th data-priority="4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><center><?php echo e(++$key); ?></center></td>
                            <td><?php echo e($user->name); ?></td>
                            <td><?php echo e($user->email); ?></td>
                            <td><center><?php echo e(date_format($user->last_transaction->created_at,"d-m-Y H:i")); ?></center></td>
                            <td>
                                <div>
                                    <a href="#" class="mx-1 p-2 rounded-lg" onclick="openDetailModal('<?php echo e($user->id); ?>')">
                                        <i class="fas fa-eye text-xl text-blue-500"></i>
                                    </a>

                                    <a href="#" class="mx-1 p-2 rounded-lg" onclick="openDeleteModal('<?php echo e($user->id); ?>')">
                                        <i class="dark:text-red-600 fas fa-trash text-xl"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <div id="deleteModal-<?php echo e($user->id); ?>" class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-50">
                            <div class="flex justify-center items-center min-h-screen">
                                <div class="bg-white text-gray-800 p-8 rounded-lg w-full max-w-xl">
                                    <!-- Modal Content -->
                                    <center><h3 class="text-xl font-bold mb-4">Apakah Anda yakin ingin menghapus user ini?</h3></center>
                                    <div class="flex-shrink-0 mt-4 text-center">
                                        <div class="inline-flex items-center justify-center">
                                            <button class="text-gray-200 bg-gray-600 hover:text-gray-300 py-2 px-4 rounded-md" onclick="closeDeleteModal('<?php echo e($user->id); ?>')">Tidak</button>
                                            <form action="<?php echo e(route('deleteUser')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="id_user" value="<?php echo e($user->id); ?>">
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
        <!-- Modal -->
        <!-- Detail Modal -->
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div id="detailModal-<?php echo e($user->id); ?>" class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-50">
            <div class="flex justify-center items-center min-h-screen">
                <div class="bg-white text-gray-800 p-8 rounded-lg w-full max-w-3xl">
                    <!-- Modal Content -->
                    <h2 class="text-2xl font-bold mb-4">User Detail</h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border rounded-md">
                            <tbody>
                                <tr>
                                    <td class="py-2 px-4 border-b">Nama Lengkap</td>
                                    <td class="py-2 px-4 border-b"><?php echo e($user->name); ?></td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b">Email</td>
                                    <td class="py-2 px-4 border-b"><?php echo e($user->email); ?></td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b">Transaksi Terakhir</td>
                                    <td class="py-2 px-4 border-b"><?php echo e(date_format($user->last_transaction->created_at,"d-m-Y H:i")); ?></td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b">Item Terakhir</td>
                                    <td class="py-2 px-4 border-b"><?php echo e($user->last_transaction->item->name); ?></td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b">Banyaknya Transaksi</td>
                                    <td class="py-2 px-4 border-b"><?php echo e($user->total_transaction); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4 flex justify-between">
                        <!-- Tombol Keluar Modal -->
                        <div class="flex-shrink-0">
                            <button class="text-gray-200 bg-gray-600 hover:text-gray-300 py-2 px-4 rounded-md"
                            onclick="closeDetailModal('<?php echo e($user->id); ?>')">Tutup Modal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
    function openDetailModal(userId) {
            var modalId = 'detailModal-' + userId;
            document.getElementById(modalId).classList.remove('hidden');
        }

        function closeDetailModal(userId) {
            var modalId = 'detailModal-' + userId;
            document.getElementById(modalId).classList.add('hidden');
        }

        function openDeleteModal(userId) {
            var modalId = 'deleteModal-' + userId;
            document.getElementById(modalId).classList.remove('hidden');
        }

        function closeDeleteModal(userId) {
            var modalId = 'deleteModal-' + userId;
            document.getElementById(modalId).classList.add('hidden');
        }
</script>

<script src="../path/to/datatables.min.js"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin_order', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ega\kuliah\workshop aplikasi berbasis web\Proyek_akhir\zayrats_shop\resources\views/admin/list_user.blade.php ENDPATH**/ ?>