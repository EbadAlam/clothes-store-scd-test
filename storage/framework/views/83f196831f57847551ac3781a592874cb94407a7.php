<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Shopping Cart </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">


<div class="container page">

    <table id="cart" class="table table-hover table-condensed">
        <thead>              
                        
        <tr>
            <td>Image</td>
            <td>Name</td>
            <td>Description</td>
            <td>Price</td>
            <td>Delete</td>
        </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
            <tr>
            <td><img src="<?php echo e($item->image); ?>" alt="" width="100"></td>
            <td><?php echo e($item->name); ?></td>
            <td><?php echo e($item->description); ?></td>
            <td><?php echo e($item->price); ?></td>
            <td><a href="<?php echo e(route('deletecartitem', $item->product_category_id)); ?>" class="btn btn-danger" onclick="return confirm('Are you Sure!')";><i class="fa fa-trash"  ></i></a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
        <tr>
            <td><a href="<?php echo e(url('/')); ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Total:$<?php echo e($total); ?></strong></td>
        </tr>
        </tfoot>
    </table>
</div>


</body>
</html><?php /**PATH /home/kali/Kali/Work/cochingtest/resources/views/shopping-cart.blade.php ENDPATH**/ ?>