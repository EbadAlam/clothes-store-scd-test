
<?php $__env->startSection('content'); ?>

<div id="page-wrapper">

  

    <div class="container-fluid">
               <!-- Page Heading -->
               <div class="row">
                   <div class="col-lg-12">
                       <h1 class="page-header">
                          Update user
                       </h1>
                   </div>
               </div>
   
               <div class="row">
                   <div class="col">
                       <a class="btn btn-primary" style="margin-left: 17px;margin-bottom: 20px;" href="<?php echo e(route('user')); ?>">Back To users</a>
                   </div>
               </div>
   
   <form action="<?php echo e(route('user_update_post',['id' => $user->id])); ?>" method="POST" role="form" enctype="multipart/form-data">
       <?php echo csrf_field(); ?>
       <?php echo method_field("PUT"); ?>
        <div class="row">
          <div class="col-lg-12"></div>
              <div class="form-group">
                 <label for="">Name</label>
                 <input type="text" class="form-control" name="name" value="<?php echo e($user->name); ?>">
              </div>
              <div class="form-group">
                 <label for="">Email</label>
                 <input type="email" class="form-control" name="email" value="<?php echo e($user->email); ?>">
              </div>
              <div class="form-group">
                 <label for="">Password</label>
                 <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
            </div>

           
   
           
       <button type="submit" class="btn btn-primary">Submit</button>
   </form>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kali/Kali/Work/cochingtest/resources/views/admin/users/edit.blade.php ENDPATH**/ ?>