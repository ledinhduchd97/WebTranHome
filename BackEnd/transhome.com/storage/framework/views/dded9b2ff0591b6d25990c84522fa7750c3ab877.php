<?php $__env->startSection('title','Add new partner'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"/>
    <link rel="stylesheet" href="<?php echo e(asset('frontend-admin/libs/datepicker/jquery-ui.theme.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('frontend-admin/libs/datepicker/jquery-ui.min.css')); ?>"/>
    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="customer_add content-wrap content-wrap2" id="customer_add">
        <div class="add-customer add-customer-wrap">
            <div class="add-customer__top">
                <h2 class="add-customer__top--title">Add Partner</h2>
            </div>

            <div class="add-customer__main">
                <div class="add-customer--left fleft">
                    <div class="add-customer--padding">
                        <div class="add-customer--left__content">

                            <form id="house_infor" action="<?php echo e(route('admin.partner.addPartner')); ?>" method="POST">
                                <?php echo e(csrf_field()); ?>

                                <div class="add-customer--left__title">
                                    <h3>Add Partner</h3>
                                </div>
                                <div class="message-adduser" style="text-align: center;">
                                    <p class="text-success">
                                        
                                        <?php echo e(session()->has('success') ? session('success') : ""); ?>

                                    </p>
                                </div>
                                <div class="add-customer--left__item">
                                    <div class="text"><span>Full name :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" name="fullname" required="required" maxlength="64" />
                                        <?php if($errors->has('fullname')): ?>
                                            <p class="text-danger"><?php echo e($errors->first('fullname')); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="add-customer--left__item">
                                    <div class="text"><span>Email :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" name="email" required="required" maxlength="64"/>
                                        <?php if($errors->has('email')): ?>
                                            <p class="text-danger"><?php echo e($errors->first('email')); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="add-customer--left__item">
                                    <div class="text"><span>Date of birth :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="date" name="date_of_birth" required="required"/>
                                        <?php if($errors->has('date_of_birth')): ?>
                                            <p class="text-danger"><?php echo e($errors->first('date_of_birth')); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="add-customer--left__item">
                                    <div class="text"><span>Phone :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="phone" name="phone" required="required" />
                                        <?php if($errors->has('phone')): ?>
                                            <p class="text-danger"><?php echo e($errors->first('phone')); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="add-customer--left__item">
                                    <div class="text"><span>Address :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" name="address" required="required" />
                                        <?php if($errors->has('address')): ?>
                                            <p class="text-danger"><?php echo e($errors->first('address')); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="add-customer--left__item">
                                    <div class="text"><span>Partner type :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" name="partner_type" value="" required="required" />
                                        <?php if($errors->has('partner_type')): ?>
                                            <p class="text-danger"><?php echo e($errors->first('partner_type')); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="add-customer--left__item">
                                    <div class="text"><span>Status :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" name="status" value="" required="required" />
                                        <?php if($errors->has('status')): ?>
                                            <p class="text-danger"><?php echo e($errors->first('status')); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="add-customer--left__item text-center">
                                    <button class="btn--primary padding--base btn--submit" type="submit">Save</button>
                                    <a class="btn--primary padding--base btn--cancel" href="<?php echo e(route('admin.partner.index')); ?>">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--.add-customer-wrap-->
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>
      <script>
      ClassicEditor
              .create( document.querySelector( '#editor' ) )
              .catch( error => {
                  console.error( error );
              } );
      </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>