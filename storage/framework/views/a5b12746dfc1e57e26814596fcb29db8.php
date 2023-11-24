<?php $__env->startSection('content'); ?>
<div class="col-span-2">
    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

        <div class="flex justify-between">
            <a href="<?php echo e(route('recentOrder')); ?>" class="mx-1 dark:hover:bg-gray-500 dark:bg-gray-600 w-28 text-center mt-1 p-2 rounded-lg">
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
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <center><?php echo e(++$key); ?></center>
                                </td>
                                <td><center><?php echo e(date_format($order->updated_at, 'd-m-Y | h:m')); ?></center></td>
                                <td><?php echo e(optional($order->user)->name ?: 'User tidak ditemukan'); ?></td>
                                <td><?php echo e(optional($order->item)->name ?: 'Produk tidak ditemukan'); ?></td>
                                <td><?php echo e(optional($order->nominal)->title ?: 'Nominal Produk tidak ditemukan'); ?></td>
                                <td>
                                    <center>
                                        <a href="#" class="mx-1 p-2 rounded-lg" onclick="openDetailModal('<?php echo e($order->id); ?>')">
                                            <i class="fas fa-eye text-xl dark:text-blue-500"></i>
                                        </a>
                                        <a target="_blank" href="https://wa.me/<?php echo e($order->whatsapp); ?>" class="mx-1 p-2 rounded-lg">
                                            <i class="fab fa-whatsapp text-xl dark:text-blue-500"></i>
                                        </a>
                                    </center>
                                </td>
                            </tr> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

            </div>
            <!--/Card-->
        </div>

        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div id="detailModal-<?php echo e($order->id); ?>" class="fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-50">
                <div class="flex justify-center items-center min-h-screen">
                    <div class="bg-white text-gray-800 p-8 rounded-lg w-full max-w-3xl">
                        <!-- Modal Content -->
                        <h2 class="text-2xl font-bold mb-4">Detail Transaksi</h2>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin_order', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ega\kuliah\workshop aplikasi berbasis web\Proyek_akhir\zayrats_shop\resources\views/admin/list_recent.blade.php ENDPATH**/ ?>