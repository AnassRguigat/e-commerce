
<?php $__env->startSection('profile-content'); ?>
<h2>Pending order</h2>
<table class="table-product-final">
        <thead class="thead-product-final">
          <tr border-bottom:0.5 solid black; class="tr-product-final">
            
          <th class="th-product-final">Name</th>
            <th class="th-product-final">Price</th>
            <!-- Ajoutez plus de colonnes au besoin -->
          </tr>
        </thead>
        <tbody class="tbody-product-final">
        <?php $__currentLoopData = $pending_orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php 
        $product_name = App\Models\Product::where('id',$order->product_id)->value('product_name');
        ?> 
          <tr style="border-bottom:0.5 solid black;" class="tr-product-final">
          <td class="td-product-final" data-label="Name"><?php echo e($product_name); ?></td>
            <td class="td-product-final" data-label="Price">$<?php echo e($order->total_price); ?></td>
            <!-- Ajoutez plus de lignes au besoin -->
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>
      </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.userprofiletemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\composer\ecomvape\resources\views/user/pendingorders.blade.php ENDPATH**/ ?>