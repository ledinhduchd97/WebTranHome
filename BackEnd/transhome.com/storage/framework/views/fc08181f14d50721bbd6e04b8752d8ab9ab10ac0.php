<!-- Mixins--><!DOCTYPE html>
<html lang="en">
  <?php echo $__env->make('partials._head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <body>
    <div id="wrapper">
      <?php echo $__env->make('partials._header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!--#header-->
      <?php echo $__env->yieldContent('content'); ?>
      <!--#content-->
      <?php echo $__env->make('partials._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!--#footer-->
    </div>
    <!--#wrapper-->
    <!--JS-->
    <?php echo $__env->make('partials._scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </body>
</html>