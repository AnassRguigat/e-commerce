
<?php $__env->startSection('page_title'); ?>
All Product || WeSellVapes
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/ </span>All Products</h4>

<div class="card">
                <h5 class="card-header">Available All Products Information</h5>
                <?php if(session()->has('message')): ?>
                  <div class="alert alert-success">
                    <?php echo e(session()->get('message')); ?>

                  </div>
                <?php endif; ?>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-light">
                      <tr>
                        <th>Id</th>
                        <th>Product Name</th>
                        <th>Img</th>
                        <th>Price</th>
                        <th>quantity</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                          <td><?php echo e($product->id); ?></td>
                          <td><?php echo e($product->product_name); ?></td>
                          <td>
                            <img style="height:100px;" src="<?php echo e(asset($product->product_img)); ?>" alt="">
                            <br>
                            <a href="<?php echo e(route('editproductimg',$product->id)); ?>" class="btn btn-outline-primary mt-2">Update Image</a>
                          </td>
                          <td><?php echo e($product->price); ?></td>
                          <td><?php echo e($product->quantity); ?></td>
                          <td>
                              <a href="<?php echo e(route('editproduct',$product->id)); ?>" class="btn btn-outline-info">Edit</a>
                              <a href="<?php echo e(route('deleteproduct',$product->id)); ?>" class="btn btn-outline-danger">Delete</a>
                          </td>
                      </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\composer\ecomvape\resources\views/admin/allproduct.blade.php ENDPATH**/ ?>