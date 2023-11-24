<?php $__env->startSection('content'); ?>
    <div class="col-span-2">
        <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

            <h4 class="text-left">List Order</h4>

            <hr class="my-2">
            <!--Container-->
            <div class="container ">

                <!--Card-->
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white text-gray-800">

                    <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                        <thead>
                            <tr>
                                <th data-priority="1">No</th>
                                <th data-priority="1">No. Transaksi</th>
                                <th data-priority="2">Nama</th>
                                <th data-priority="3">Game</th>
                                <th data-priority="3">Status</th>
                                <th data-priority="4">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <center><?php echo e(++$key); ?></center>
                                    </td>
                                    <td>
                                        <center><?php echo e($order->trx_num); ?></center>
                                    </td>
                                    <td><?php echo e(optional($order->user)->name ?: 'User tidak ditemukan'); ?></td>
                                    <td><?php echo e(optional($order->item)->name ?: 'Produk tidak ditemukan'); ?></td>
                                    <td class="<?php echo e($order->status == 0 ? 'text-red-800' : 'text-green-800'); ?>">
                                        <center><?php echo e($order->status == 0 ? 'Belum dibayar' : 'Sukses'); ?></center>
                                    </td>
                                    <td>
                                        <center>
                                            <a href="#" class="mx-1 p-2 rounded-lg" onclick="openDetailModal('<?php echo e($order->id); ?>')">
                                                <i class="fas fa-eye text-xl dark:text-blue-500"></i>
                                            </a>
                                            <?php if($order->status == 0): ?>
                                            <a href="#" class="mx-1 p-2 rounded-lg" onclick="openDeleteModal('<?php echo e($order->id); ?>')">
                                                <i class="dark:text-red-600 fas fa-trash text-xl"></i>
                                            </a>
                                            <?php else: ?>
                                                <a class="mx-1 p-2 rounded-lg">
                                                    <i class="dark:text-green-600 fas fa-check text-xl"></i>
                                                </a>
                                            <?php endif; ?>
                                        </center>
                                    </td>
                                </tr>
                                <div id="deleteModal-<?php echo e($order->id); ?>" class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-50">
                                    <div class="flex justify-center items-center min-h-screen">
                                        <div class="bg-white text-gray-800 p-8 rounded-lg w-full max-w-xl">
                                            <!-- Modal Content -->
                                            <center><h3 class="text-xl font-bold mb-4">Apakah Anda yakin ingin menghapus order ini?</h3></center>
                                            <div class="flex-shrink-0 mt-4 text-center">
                                                <div class="inline-flex items-center justify-center">
                                                    <button class="text-gray-200 bg-gray-600 hover:text-gray-300 py-2 px-4 rounded-md" onclick="closeDeleteModal('<?php echo e($order->id); ?>')">Tidak</button>
                                                    <form action="<?php echo e(route('deleteOrder')); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="id_order" value="<?php echo e($order->id); ?>">
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
        </div>
    </div>

    <!-- Detail Modal -->
    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div id="detailModal-<?php echo e($order->id); ?>" class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-50">
            <div class="flex justify-center items-center min-h-screen">
                <div class="bg-white text-gray-800 p-8 rounded-lg w-full max-w-3xl">
                    <!-- Modal Content -->
                    <h2 class="text-2xl font-bold mb-4">Order Detail</h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border rounded-md">
                            <tbody>
                                <tr>
                                    <td class="py-2 px-4 border-b">No Transaksi</td>
                                    <td class="py-2 px-4 border-b"><?php echo e($order->trx_num); ?></td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b">Server ID</td>
                                    <td class="py-2 px-4 border-b"><?php echo e($order->serverid); ?></td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b">Nominal</td>
                                    <td class="py-2 px-4 border-b">Rp. <?php echo e(number_format($order->nominal->nominal)); ?></td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b">Metode Pembayaran</td>
                                    <td class="py-2 px-4 border-b"><?php echo e($order->payment); ?></td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b">Akun Atas Nama</td>
                                    <td class="py-2 px-4 border-b"><?php echo e($order->account_name); ?></td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b">WhatsApp</td>
                                    <td class="py-2 px-4 border-b"><?php echo e($order->whatsapp); ?></td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b">Tanggal Transaksi</td>
                                    <td class="py-2 px-4 border-b"><?php echo e($order->created_at); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4 flex justify-between">
                        <!-- Tombol Keluar Modal -->
                        <div class="flex-shrink-0">
                            <button class="text-gray-200 bg-gray-600 hover:text-gray-300 py-2 px-4 rounded-md"
                                onclick="closeDetailModal('<?php echo e($order->id); ?>')">Tutup Modal</button>
                        </div>
                        <!-- Tombol Simpan -->
                        <?php if($order->status == 0): ?>
                        <div class="flex-shrink-0">
                            <form action="<?php echo e(route('updateOrder')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id_order" value="<?php echo e($order->id); ?>">
                                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md">ACC</button>
                            </form>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- Datatables -->
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

    <!-- Modal JavaScript -->
    <script>
        function openDetailModal(orderId) {
            var modalId = 'detailModal-' + orderId;
            document.getElementById(modalId).classList.remove('hidden');
        }

        function closeDetailModal(orderId) {
            var modalId = 'detailModal-' + orderId;
            document.getElementById(modalId).classList.add('hidden');
        }

        function openDeleteModal(orderId) {
            var modalId = 'deleteModal-' + orderId;
            document.getElementById(modalId).classList.remove('hidden');
        }

        function closeDeleteModal(orderId) {
            var modalId = 'deleteModal-' + orderId;
            document.getElementById(modalId).classList.add('hidden');
        }
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin_order', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ega\kuliah\workshop aplikasi berbasis web\Proyek_akhir\zayrats_shop\resources\views/admin/order_checkout.blade.php ENDPATH**/ ?>