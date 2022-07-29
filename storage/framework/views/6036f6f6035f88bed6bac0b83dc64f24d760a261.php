<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
         <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome To Dashboard Page
                </h1>
            </div>
        </div>
        <!-- /.row -->


        <!-- /.row -->
          <div class="row">
             <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                   <div class="panel-heading">
                      <div class="row">
                         <div class="col-xs-3">
                            <i class="fa fa-file-text fa-5x"></i>
                         </div>
                         <div class="col-xs-9 text-right">
                            
                            <div class='huge'><?php echo e($product_count); ?></div>
                            <div>Product</div>
                         </div>
                      </div>
                   </div>
                   <a href="/adminproducts">
                      <div class="panel-footer">
                         <span class="pull-left">View Details</span>
                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                         <div class="clearfix"></div>
                      </div>
                   </a>
                </div>
             </div>
             <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                   <div class="panel-heading">
                      <div class="row">
                         <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                         </div>
                         <div class="col-xs-9 text-right">
                            <div class='huge'><?php echo e($user_count); ?></div>
                            <div> Users</div>
                         </div>
                      </div>
                   </div>
                   <a href="<?php echo e(route('user')); ?>">
                      <div class="panel-footer">
                         <span class="pull-left">View Details</span>
                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                         <div class="clearfix"></div>
                      </div>
                   </a>
                </div>
             </div>
             <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                   <div class="panel-heading">
                      <div class="row">
                         <div class="col-xs-3">
                            <i class="fa fa-list fa-5x"></i>
                         </div>
                         <div class="col-xs-9 text-right">
                            <div class='huge'><?php echo e($category_count); ?></div>
                            <div>Categories</div>
                         </div>
                      </div>
                   </div>
                   <a href="/categories">
                      <div class="panel-footer">
                         <span class="pull-left">View Details</span>
                         <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                         <div class="clearfix"></div>
                      </div>
                   </a>
                </div>
             </div>
          </div>
          <!-- /.row -->

<canvas id="myChart" ></canvas>
<script>
    var xValues = ["Product", "Category", "User"];
    var yValues = ['<?php echo e($product_count); ?>', '<?php echo e($category_count); ?>', '<?php echo e($user_count); ?>'];
    var barColors = ["blue", "blue","blue"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Bar Chart"
    }
  }
});
</script>

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kali/Kali/Work/Laravel/cochingtest/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>