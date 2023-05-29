
<?php $__env->startSection('page_title'); ?>
Pending Orders || WeSellVapes
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container my-5">
    <div class="card p-4">
        <div class="card-title">
            <h2 class='text-center'>Pending Orders</h2>
        </div>
        <div class="card-body">
            <table class='table'>
                    <tr>
                        <th>User Id</th>
                        <th>Shipping Information</th>
                        <th>Product Id</th>
                        <th>Quantity</th>
                        <th>Total Will Pay</th>
                        <th>Action</th>
                    </tr>
                <?php $__currentLoopData = $pending_orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($order->userid); ?></td>
                        <td>
                            <ul>
                                <li>Phone Number - <?php echo e($order->shipping_phoneNumber); ?></li>
                                <li>City - <?php echo e($order->shipping_city); ?></li>
                                <li>Postal code - <?php echo e($order->shipping_postalcode); ?></li>
                            </ul>
                        </td>
                        <td><?php echo e($order->product_id); ?></td>
                        <td><?php echo e($order->quantity); ?></td>
                        <td><?php echo e($order->total_price); ?></td>
                        <td><a href="<?php echo e(route('approve',$order->id)); ?>" class="btn btn-success">Approve Now</a></td>
                    </tr>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\composer\ecomvape\resources\views/admin/pendingorders.blade.php ENDPATH**/ ?>