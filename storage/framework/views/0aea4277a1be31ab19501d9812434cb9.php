
<?php $__env->startSection('page_title'); ?>
All Category || WeSellVapes
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/ </span>All Category</h4>

<div class="card">
                <h5 class="card-header">Available Category Information</h5>
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
                        <th>Category Name</th>
                        <th>Sub Category</th>
                        <th>Slug</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($category->id); ?></td>
                          <td><?php echo e($category->category_name); ?></td>
                          <td><?php echo e($category->subcategory_count); ?></td>
                          <td><?php echo e($category->slug); ?></td>
                          <td>
                              <a href="<?php echo e(route('editcategory',$category->id)); ?>" class="btn btn-outline-info">Edit</a>
                              <a href="<?php echo e(route('deletecategory',$category->id)); ?>" class="btn btn-outline-danger">Delete</a>
                          </td>
                        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                </div>
              </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\composer\ecomvape\resources\views/admin/allcategory.blade.php ENDPATH**/ ?>