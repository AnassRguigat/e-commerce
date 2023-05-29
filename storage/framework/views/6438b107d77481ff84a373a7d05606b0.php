
<?php $__env->startSection('page_title'); ?>
Edit Category || WeSellVapes
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/ </span>Edit Category</h4>
<div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Edit Category</h5>
                      <small class="text-muted float-end">Input information</small>
                    </div>
                    <div class="card-body">
                      <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                          <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </ul>
                        </div>
                      <?php endif; ?>
                      <form action="<?php echo e(route('updatecategory')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" value="<?php echo e($category_info->id); ?>" name="category_id" />
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Category Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo e($category_info->category_name); ?>" name="category_name" id="category_name" />
                           </div>
                        </div>
                       
                       
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Category</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\composer\ecomvape\resources\views/admin/editcategory.blade.php ENDPATH**/ ?>