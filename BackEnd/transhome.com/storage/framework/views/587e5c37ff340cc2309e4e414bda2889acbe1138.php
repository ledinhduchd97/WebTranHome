<?php $__env->startSection('title','Login'); ?>
<?php $__env->startSection('content'); ?>
	<section class="login-wrap">
        <div class="container">
          <div class="direction"><a href="#"><span>Home</span></a><span class="angle_right"><i class="fas fa-angle-right"></i></span><a class="active" href="#"><span>Login</span></a></div>
          <div class="form-login">
            <div class="row">
              <div class="col-lg-6 col-md-8 col-sm-10">
                <form id="form_login" action="<?php echo e(route('post.login')); ?>" method="post">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                  <h1>Login</h1>
                  <?php if(session()->has('fail')): ?>
                    <br><span class="text-danger" style="font-size: 12px;">
                        <?php echo e(session('fail')); ?>

                    </span>
                        <?php echo e(session()->forget('fail')); ?>

                  <?php endif; ?>
                  <div class="form-login--item"><i class="fas fa-user"></i>
                    <input id="full_name" type="text" name="username" placeholder="USERNAME"/>
                    <?php if(sizeof($errors) != 0): ?>
                      <?php if($errors): ?>
                        <br><span class="text-danger" style="font-size: 9px;"><?php echo e($errors->first('username')); ?></span>
                      <?php endif; ?>
                    <?php endif; ?>
                  </div>
                  <div class="form-login--item"><i class="fas fa-lock"></i>
                    <input id="password" type="password" name="password" placeholder="PASSWORD"/>
                    <?php if(sizeof($errors) != 0): ?>
                      <?php if($errors): ?>
                        <br><span class="text-danger" style="font-size: 9px;"><?php echo e($errors->first('password')); ?></span>
                        <br>
                      <?php endif; ?>
                    <?php endif; ?>
                  </div>
                  <label for="remember"> 
                    <input type="checkbox" name="remember" />Remember Me
                  </label>
                  <div class="site-btn"> 
                    <input class="btn btn-primary btn-base" type="submit" value="Login"/>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>