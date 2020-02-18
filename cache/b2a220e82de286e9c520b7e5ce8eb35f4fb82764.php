<?php $__env->startSection('contents'
); ?>
<video
    id="my-video"
    class="video-js container"
    controls
    preload="auto"
    width="640"
    height="264"
    poster="https://www.mixeddesign.com.au/wp-content/uploads/2018/05/Fortnite-Room-Design-1-510x721.jpg"
    data-setup="{}"
  >
    <source src="/data/video/1.mkv" type="video/mp4" />
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a
      web browser that
      <a href="https://videojs.com/html5-video-support/" target="_blank"
        >supports HTML5 video</a
      >
    </p>
  </video>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webCrawler\views/homepage.blade.php ENDPATH**/ ?>