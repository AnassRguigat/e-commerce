
<?php $__env->startSection('page_title'); ?>
Edit Product Image || WeSellVapes
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/ </span>Edit Product Image</h4>
<div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Edit Product Image</h5>
                      <small class="text-muted float-end">Input information</small>
                    </div>
                    <div class="card-body">
                      <form action="<?php echo e(route('updateproductimg')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Previous Image</label>
                          <div class="col-sm-10">
                           <img style="height:300px;" src="<?php echo e(asset($productinfo->product_img)); ?>" alt="">
                          </div>
                        </div>
                       <input type="hidden" value="<?php echo e($productinfo->id); ?>" name="id" />
                        <div class="row mb-3">
                            <label for="formFile" class="col-sm-2 col-form-label">Updload New Image</label>
                            <div class="col-sm-10">
                            <input class="form-control" type="file" name="product_img" id="product_img" />
                        </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Product Image</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\composer\ecomvape\resources\views/admin/editproductimg.blade.php ENDPATH**/ ?>