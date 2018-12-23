<header class="header" id="header">
<div class="header__wrap">
  <div class="header__contact">
    <div class="container">
      <div class="fleft contact__infor">
        <a class="contact__phone" href="#"><span><img src="<?php echo e(asset('frontend/images/icon-phone.png')); ?>" alt=""/><span><?php echo e($setup->phone); ?></span></span></a>
        <a class="contact__email" href="#"><span><img src="<?php echo e(asset('frontend/images/icon-mail.png')); ?>" alt=""/><span><?php echo e($setup->email); ?></span></span></a>
        <a class="contact__lisence" href="#" style="margin-left: 25px;"><span><i class="fas fa-clone" style="margin-right: 10px;"></i><span><?php echo e($setup->lisence); ?></span></span></a>
      </div>
      <div class="fright contact__link">
        <ul class="list-inline link fright">
          <li><a href="<?php echo e($setup->facebook); ?>"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="<?php echo e($setup->instagram); ?>"><i class="fab fa-linkedin-in"></i></a></li>
          <li><a href="<?php echo e($setup->twitter); ?>"><i class="fab fa-twitter"></i></a></li>
        </ul>
        <div class="clear-fix"></div>
      </div>
      <div class="clear-fix"></div>
    </div>
  </div>
  <div class="header__main">
    <div class="btn--bar disabled" id="btn--bar"><i class="fas fa-bars"></i></div>
    <div class="container">
      <div class="row">
        <div class="col-3">
          <div class="logo"><a href="<?php echo e(route('get.index')); ?>"><img src="<?php echo e(asset($setup->logo_header)); ?>" alt="logo"/></a></div>
        </div>
        <div class="col-9">
          <div class="main__menu">
            <nav>
              <ul class="list-inline">
                <li><a href="<?php echo e(route('get.index')); ?>"><span>home</span></a></li>
                <li><a href="#feature"><span>Properties</span></a></li>
                <li><a href="http://127.0.0.1:8000/freecash"><span>Sell My House</span></a></li>
                <li><a href="#about-us"><span>About Us</span></a></li>
                <li class="padding-none"><a href="#partner"><span>Partner</span></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="header-mobile disabled">
  <div class="mobile__wrap">
    <div class="mobile__menu">
      <ul class="menu-mobile menu--base">
        <li><a href="<?php echo e(route('get.index')); ?>"><span>home</span></a></li>
        <!--FE update html 24/10-->
        <li><a href="#feature"><span>Properties</span></a></li>
        <li><a href="#sell"><span>Sell My Home</span></a></li>
        <li><a href="#about-us"><span>About Us</span></a></li>
        <li class="padding-none"><a href="#partner"><span>Partner</span></a></li>
        <!--FE end update html 24/10-->
      </ul>
    </div>
    <div class="mobile__contact">
      <div class="mobile__contact--infor">
        <div class="contact__phone"><a href="#"><span><img src="<?php echo e(asset('frontend/images/icon-phone.png')); ?>" alt=""/><span><?php echo e($setup->phone); ?></span></span></a></div>
        <div class="contact__email"><a href="#"><span><img src="<?php echo e(asset('frontend/images/icon-mail.png')); ?>" alt=""/><span><?php echo e($setup->email); ?></span></span></a></div>
        <div class="contact__lisence" style="margin-left: 20px; padding: 10px 0px; border-bottom: 1px solid #333;"><a href="#"><span><i class="fas fa-clone" style="margin-right: 10px;"></i><span><?php echo e($setup->lisence); ?></span></span></a></div>
      </div>
      <div class="mobile__contact--link">
        <ul class="list-inline">
          <li><a href="<?php echo e($setup->facebook); ?>"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="<?php echo e($setup->instagram); ?>"><i class="fab fa-linkedin-in"></i></a></li>
          <li><a href="<?php echo e($setup->twitter); ?>"><i class="fab fa-twitter"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="mobile__exit" id="mobile__exit">
    <button type="button">&times;</button>
  </div>
</div>
<div class="mobile--bg"></div>
</header>