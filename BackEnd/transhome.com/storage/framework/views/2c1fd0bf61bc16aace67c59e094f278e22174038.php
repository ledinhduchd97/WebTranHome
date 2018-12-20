<?php $__env->startSection('title','Add new Account'); ?>
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
                <h2 class="add-customer__top--title">Add Customer</h2>
            </div>

            <div class="add-customer__main">
                <div class="add-customer--left fleft">
                    <div class="add-customer--padding">
                        <div class="add-customer--left__content">

                            <form id="house_infor" action="<?php echo e(route('admin.customers.store')); ?>" method="POST">
                                <?php echo e(csrf_field()); ?>

                                <div class="add-customer--left__title">
                                    <h3>Add Customer</h3>
                                </div>
                                <div class="message-adduser" style="text-align: center;">
                                    <p class="text-success">
                                        
                                        <?php echo e(session()->has('success') ? session('success') : ""); ?>

                                        <?php echo e(session()->forget('success')); ?>

                                    </p>
                                </div>
                                <div class="add-customer--left__item">
                                    <div class="text"><span>First name :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" name="first_name" required="required" maxlength="64" pattern="^[a-zA-Z]+$"/>
                                        <?php if($errors->has('first_name')): ?>
                                            <p class="text-danger"><?php echo e($errors->first('first_name')); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="add-customer--left__item">
                                    <div class="text"><span>Last name :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" name="last_name" required="required" maxlength="64" pattern="^[a-zA-Z]+$"/>
                                        <?php if($errors->has('last_name')): ?>
                                            <p class="text-danger"><?php echo e($errors->first('last_name')); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="add-customer--left__item">
                                    <div class="text"><span>Date of birth :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="date" name="birthday" required="required"/>
                                        <?php if($errors->has('birthday')): ?>
                                            <p class="text-danger"><?php echo e($errors->first('birthday')); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="add-customer--left__item">
                                    <div class="text"><span>Email :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="email" name="email" required="required" pattern="^[a-zA-Z]{6,32}@gmail.com$"/>
                                        <?php if($errors->has('email')): ?>
                                            <p class="text-danger"><?php echo e($errors->first('email')); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="add-customer--left__item">
                                    <div class="text"><span>Phone :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="tel" name="phone" required="required" pattern="^([0-9]{3})[0-9]{4}\-[0-9]{3}"/>
                                        <?php if($errors->has('phone')): ?>
                                            <p class="text-danger"><?php echo e($errors->first('phone')); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="add-customer--left__item">
                                    <div class="text"><span>Address :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" name="address" required="required" maxlength="250" pattern="[a-zA-Z0-9]\-\/"/>
                                        <?php if($errors->has('address')): ?>
                                            <p class="text-danger"><?php echo e($errors->first('address')); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <!--Update HTML 11/11-->
                                <!-- <div class="add-customer--left__item">
                                    <div class="text"><span>Street address :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" name="address" required="required" maxlength="50"/>
                                        
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="add-customer--left__item">
                                    <div class="text"><span>City :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" name="address" required="required" maxlength="50"/>
                                        
                                    </div>
                                    <div class="clear-fix"></div>
                                </div> -->
                                <div class="add-customer--left__item">
                                    <div class="text"><span>Client Type :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" name="type" required="required"/>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <!-- <div class="add-customer--left__item">
                                    <div class="text"><span>Source :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" name="address" maxlength="100"/>
                                        
                                    </div>
                                    <div class="clear-fix"></div>
                                </div> -->
                                <!-- <div class="add-customer--left__item">
                                    <div class="text"><span>Note :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" name="note" required="required" maxlength="250" parttern="[a-zA-z0-9]"/>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div> -->
                                <div class="add-customer--left__item text-center">
                                    <button class="btn--primary padding--base btn--submit" type="submit">Submit</button>
                                    <a class="btn--primary padding--base btn--cancel" href="<?php echo e(route('admin.customers.index')); ?>">Cancel</a>
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
    <script type="text/javascript">

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>