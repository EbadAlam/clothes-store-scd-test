<?php $__env->startSection('content'); ?>

<div id="page-wrapper">
    
    <?php if(session()->has('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo e(session()->get('success')); ?>

        </div>
    <?php endif; ?>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Categories
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            
            <?php if($category_row): ?>
                <a href="<?php echo e(route('categories')); ?>" class="btn btn-primary">Back To Insert</a>
                <form action="<?php echo e(route('categories_update', ['category' => $category_row->cat_id])); ?>" method="POST"
                    role="form">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <h3>Update Category</h3>
                    <div class="form-group">
                        <label for="">Category Title</label>
                        <input type="text" class="form-control" id="" placeholder="Category Name"
                            name="cat_title" value="<?php echo e($category_row->cat_title); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            <?php else: ?>
                
                <form action="<?php echo e(route('categories_store')); ?>" method="POST" role="form">
                    <?php echo csrf_field(); ?>
                    <h3>Insert Category</h3>
                    <div class="form-group">
                        <label for="">Category Title</label>
                        <input type="text" class="form-control" id="" placeholder="Category Name"
                            name="cat_title">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            <?php endif; ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <?php if(count($categories) > 0): ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $single_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key + 1); ?></td>
                                <td><?php echo e($single_category->cat_title); ?></td>
                                <td>
                                    <a href="<?php echo e(route('categories', ['cat_id' => $single_category->cat_id])); ?>"
                                        class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('deletecategory', $single_category->cat_id )); ?>" class="btn btn-danger" onclick="return confirm('Are You Sure')";>Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            <?php else: ?>
                <h2>No Record Found!</h2>
            <?php endif; ?>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kali/Kali/Work/Laravel/cochingtest/resources/views/admin/categories/index.blade.php ENDPATH**/ ?>