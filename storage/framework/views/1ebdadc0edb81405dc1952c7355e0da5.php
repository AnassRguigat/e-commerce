
<?php $__env->startSection('page_title'); ?>
Add Product || WeSellVapes
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Page/ </span>Add Product</h4>
<div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Add New Product</h5>
                      <small class="text-muted float-end">Input information</small>
                    </div>
                    <div class="card-body">
                      <form action="<?php echo e(route('storeproduct')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Product Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Name" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
                          <div class="col-sm-10">
                            <input type="number" class="form-control" name="price" id="price" placeholder="Price" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Quantity</label>
                          <div class="col-sm-10">
                            <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Quantity" />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Product Short Description</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" name="product_short_des" id="" cols="30" rows="5"></textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Product Long Description</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" name="product_long_des" id="" cols="30" rows="10"></textarea>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Select Category</label>
                          <div class="col-sm-10">
                          <select class="form-select" id="product_category_id" name="product_category_id" aria-label="Default select example">
                          <option selected>Select Product Category</option>
                          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Select Sub Category</label>
                          <div class="col-sm-10">
                          <select class="form-select" id="product_subcategory_id" name="product_subcategory_id" aria-label="Default select example">
                          <option selected>Select Product Sub Category</option>
                          <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($subcategory->id); ?>"><?php echo e($subcategory->subcategory_name); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                            <label for="formFile" class="col-sm-2 col-form-label">Updload Product Image</label>
                            <div class="col-sm-10">
                            <input class="form-control" type="file" name="product_img" id="product_img" />
                        </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\composer\ecomvape\resources\views/admin/addproduct.blade.php ENDPATH**/ ?>