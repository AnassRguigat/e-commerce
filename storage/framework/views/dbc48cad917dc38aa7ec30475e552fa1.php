
<?php $__env->startSection('page_title'); ?>
Edit Product || WeSellVapes
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/ </span>Edit Product</h4>
<div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Edit Product</h5>
                      <small class="text-muted float-end">Input information</small>
                    </div>
                    <div class="card-body">
                      <form action="<?php echo e(route('updateproduct')); ?>" method="POST" >
                        <?php echo csrf_field(); ?>
                        <input type="hidden" value="<?php echo e($productinfo->id); ?>" name="id" />
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Product Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="product_name" id="product_name" value="<?php echo e($productinfo->product_name); ?>"/>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
                          <div class="col-sm-10">
                            <input type="number" class="form-control" name="price" id="price" value="<?php echo e($productinfo->price); ?>" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Quantity</label>
                          <div class="col-sm-10">
                            <input type="number" class="form-control" name="quantity" id="quantity" value="<?php echo e($productinfo->quantity); ?>" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Product Short Description</label>
                          <div class="col-sm-10">
                            <textarea class="form-control"  name="product_short_des" id="" cols="30" rows="5"><?php echo e($productinfo->product_short_des); ?></textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Product Long Description</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" name="product_long_des" id="" cols="30" rows="10"><?php echo e($productinfo->product_long_des); ?></textarea>
                          </div>
                        </div>
                        
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Product</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\composer\ecomvape\resources\views/admin/editproduct.blade.php ENDPATH**/ ?>