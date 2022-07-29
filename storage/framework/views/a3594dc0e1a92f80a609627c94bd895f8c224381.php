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
                Products
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <a href="<?php echo e(route('createproductpage')); ?>" class="btn btn-primary" style="margin-left: 17px;margin-bottom: 20px;" href="">Create Product</a>
        </div>
    </div>
    
    <?php if(count($products) > 0): ?>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $single_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($key + 1); ?></td>
                <td><?php echo e($single_product->name); ?></td>
                <td><?php echo e($single_product->price); ?></td>
                <td><?php echo e($single_product->description); ?></td>
                <td>
                    <?php if($single_product->image): ?>
                    <img src="<?php echo e(asset($single_product->image)); ?>" alt="" width="150">
                    <?php else: ?>
                    <h5>No Image Found</h5>
                    <?php endif; ?>
                </td>
                <td>
                    <a href="<?php echo e(route('producteditpage', $single_product->id)); ?>" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="<?php echo e(route('deleteproduct', $single_product->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("DELETE"); ?>
                    <button class="btn btn-danger" onclick="return confirm('Are Your Sure')";>Delete</button>
                    </form>
                </td>
            </tr>               
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <?php else: ?>
    <h3>No Record Found!</h3>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kali/Kali/Work/Laravel/cochingtest/resources/views/admin/product/index.blade.php ENDPATH**/ ?>