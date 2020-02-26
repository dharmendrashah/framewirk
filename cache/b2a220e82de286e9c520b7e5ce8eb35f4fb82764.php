<?php $__env->startSection('contents'); ?>
<p>Total Videos : <?php echo e($resultDecode['count']); ?></p>
<div class="container-fluid">
    <?php print_r($theResult['0']['video']) ?>
<?php for($i = 0; $i < $resultDecode['count']; $i++): ?>
<?php echo e($i); ?>

<?php endfor; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webCrawler\views/homepage.blade.php ENDPATH**/ ?>