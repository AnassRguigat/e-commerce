
<?php $__env->startSection('menu'); ?>
<?php $__currentLoopData = $allproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div style="max-width:450px;" class="box">
                <span class="price">MAD <?php echo e($product->price); ?></span>
                <img src="<?php echo e(asset($product->product_img)); ?>" alt="">
                <h3 style="font-size: 36px;font-family: Helvetica, Arial, sans-serif;font-weight: 600;text-align: center; color: #000000;"><?php echo e($product->product_name); ?></h3>
                <a href="<?php echo e(route('singleproduct',[$product->id,$product->slug])); ?>" class="btn-seemore">See more</a>
                <form action="<?php echo e(route('addproducttocart')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" value="<?php echo e($product->id); ?>" name="product_id" />
                    <input type="hidden" value="<?php echo e($product->price); ?>" name="price" />
                    <input type="hidden" value="1" name="quantity" />
                    <input class="btn-add-to-cart" style="color: #000;
    background-color: #FF4C29;
    border-radius: 15PX;
    border:none;width:120px;
    padding:10px 18px;
    float:left;
font-size: 16px;" type="submit" value="Add To Cart" >
                </form>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\composer\ecomvape\resources\views/user/menuall.blade.php ENDPATH**/ ?>