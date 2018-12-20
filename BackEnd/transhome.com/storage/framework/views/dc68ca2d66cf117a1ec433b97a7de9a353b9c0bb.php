<footer class="footer" id="footer">
  <div class="footer__top">
    <div class="container">
      <div class="footer__wrap">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="footer__col--title"><a href="<?php echo e(route('get.index')); ?>"><img src="<?php echo e(asset($setup->logo_footer)); ?>" alt="logo"/></a></div>
            <div class="footer__col--text">
              <p class="line-clame__base2"><?php echo e($setup->description); ?></p>
            </div>
            <div class="footer__col--links">
              <ul class="link-society list-inline">
                <li><a href="<?php echo e($setup->facebook); ?>"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="<?php echo e($setup->instagram); ?>"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="<?php echo e($setup->twitter); ?>"><i class="fab fa-twitter"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="footer__menu">
              <div class="footer__col--title">
                <h3>Menu</h3>
              </div>
              <div class="footer__col--text">
                <ul class="footer-menu menu--base">
                  <li><a href="<?php echo e(route('get.index')); ?>">home</a></li>
                  <li><a href="#">properties</a></li>
                  <li><a href="#">sell your home</a></li>
                  <li><a href="#">about us</a></li>
                  <li class="margin-none"><a href="#">partner</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="footer__contact">
              <div class="footer__col--title">
                <h3>Contact Us</h3>
              </div>
              <div class="footer__col--text">
                <p class="footer-contact__item"><i class="fas fa-map-marker-alt"></i><?php echo e($setup->address); ?></p>
                <p class="footer-contact__item"><i class="fas fa-phone"></i><?php echo e($setup->phone); ?></p>
                <p class="footer-contact__item"><i class="fas fa-envelope"></i><?php echo e($setup->email); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="container">
      <div class="footer__wrap2">
        <div class="row">
          <div class="col-9 col-xl-6 col-md-4 col-sm-8">
            <p><span>Copyright &copy;2018 </span><span class="white">Tranhome</span></p>
          </div>
          <div class="col-3 col-xl-6 text-right col-md-8 col-sm-4"><a class="login" href="<?php echo e(route('get.login')); ?>"><span>Login</span></a>
            <p class="design-by"><span>Tranhome theme, designed by </span><span class="white">3fgroup</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>