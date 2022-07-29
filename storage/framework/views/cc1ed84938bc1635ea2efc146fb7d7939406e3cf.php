


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
                Users
            </h1>
        </div>
    </div>
    
<?php if ( count($users) > 0): ?>
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $key => $user): ?>
            <tr>
                <td><?php echo e($key + 1); ?></td>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
            </tr>               
            <?php endforeach ?>
        </tbody>
    </table>
<?php else: ?>
    <h2>No records found!</h2>
<?php endif ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kali/Kali/Work/Laravel/cochingtest/resources/views/admin/users/index.blade.php ENDPATH**/ ?>