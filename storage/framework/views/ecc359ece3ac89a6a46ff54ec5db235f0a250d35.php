<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Admin Panel | Clothes Store</title>
<link rel="icon" type="text/css" href="<?php echo e(asset('icon.png')); ?>">

<!-- Bootstrap Core CSS -->
    
<link href="<?php echo e(asset('admin/css/bootstrap.min.css')); ?>" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?php echo e(asset('admin/css/sb-admin.css')); ?>" rel="stylesheet">

<!-- Custom Fonts -->
<link href="<?php echo e(asset('admin/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

</head>

<body>

<div id="wrapper">

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Home</a>
    </div>
    <!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo e(Auth::user()->name); ?><b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li>
                <a href="<?php echo e(route('profile.show')); ?>"><i class="fa fa-fw fa-user"></i> Profile</a>
            </li>
            <li class="divider"></li>
            <li>
                <?php if(Route::has('login')): ?>
                <?php if(auth()->guard()->check()): ?>
                    <form action="<?php echo e(route('logout')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
          <button type="submit" class="btn btn-info btn-sm" style="margin-left: 18px"><i class="fa fa-fw fa-power-off"></i><?php echo e(__('Log Out')); ?></a></button>
                </form>
                <?php endif; ?>
                <?php endif; ?>
                </li>
            </ul>
        </li>
    </ul>
<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
<ul class="nav navbar-nav side-nav">
    <li>
        <a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
    </li>
    <li>
        <a href="<?php echo e(route('categories')); ?>"><i class="fa fa-fw fa-gear"></i> Categories</a>
    </li>
    <li>
        <a href="<?php echo e(route('adminproducts')); ?>"><i class="fa fa-fw fa-gear"></i> Products</a>
    </li>

    <li>
        <a href="<?php echo e(route('user')); ?>"><i class="fa fa-fw fa-user"></i> Users</a>
    </li>

</ul>
</div>
<!-- /.navbar-collapse -->
</nav>

<?php echo $__env->yieldContent('content'); ?>


<script src="admin/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="admin/js/bootstrap.min.js"></script>

</body>

</html><?php /**PATH /home/kali/Kali/Work/cochingtest/resources/views/admin/layout/app.blade.php ENDPATH**/ ?>