<?php $__env->startSection('content'); ?>
    
  <?php if (count($product) > 0): ?>

  <div class="w3-container w3-text-grey" id="jeans">
    <p>items</p>
  </div>



  
  <!-- Product grid -->
<div class="w3-row w3-grayscale">
        <h2>All Products</h2>
    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="w3-col l3 s6">
  <div class="w3-container">
    <div class="w3-display-container">
      <img src="<?php echo e($single_product->image); ?>" style="width:100%">
      <div class="w3-display-middle w3-display-hover">
        <form action="<?php echo e(route('addtocart')); ?>" method="POST" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <input type="hidden" value="<?php echo e($single_product->id); ?>" id="id" name="id">
          <input type="hidden" value="<?php echo e($single_product->product_category_id); ?>" id="id" name="product_category_id">
          <input type="hidden" value="<?php echo e($single_product->name); ?>" id="name" name="name">
          <input type="hidden" value="<?php echo e($single_product->description); ?>" id="name" name="description">
          <input type="hidden" value="<?php echo e($single_product->price); ?>" id="price" name="price">
          <input type="hidden" value="<?php echo e($single_product->image); ?>" id="img" name="image">
          <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
      </form>
      </div>
    </div>
    <p><?php echo e($single_product->name); ?><br><b>$<?php echo e($single_product->price); ?></b></p>
  </div>  
</div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </div>
  <?php else: ?>
    <h2>No records found!</h2>
  <?php endif ?>

  <!-- Subscribe section -->

  <!-- Footer -->
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kali/Kali/Work/Laravel/cochingtest/resources/views/home.blade.php ENDPATH**/ ?>