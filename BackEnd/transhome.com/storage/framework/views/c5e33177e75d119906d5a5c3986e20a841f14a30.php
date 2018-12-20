<?php $__env->startSection('title','OVERVIEW'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"/>
    <link rel="stylesheet" href="<?php echo e(asset('frontend-admin/libs/datepicker/jquery-ui.theme.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('frontend-admin/libs/datepicker/jquery-ui.min.css')); ?>"/>
    <style>
        a {
            text-decoration: none !important;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="acc-detail content-wrap content-wrap2" id="acc-detail">
        <div class="view-detail view-detail-wrap">
            <div class="view-detail__top">
                <div class="view-detail__top--left fleft col-50">
                    <h2 class="view-detail__title">View Detail Task to do</h2>
                </div>
                <div class="view-detail__top--right fleft col-50">
                    <div class="text-right"><span class="dashboard">Dashboard</span></div>
                </div>
                <div class="clear-fix"></div>
            </div>
            <div class="view-detail__content">
                <div class="view-detail__content--title text-center">
                    <h3>View Detail Task to do</h3>
                </div>
                <form action="">
                    <div class="view-detail__content--row">
                        <div class="text"><span>Title task :</span></div>
                        <div class="content"><span class="acc-name"><?php echo e($task->title); ?></span></div>
                        <div class="clear-fix"></div>
                    </div>
                    <!-- <div class="view-detail__content--row">
                        <div class="text"><span>Age :</span></div>
                        <div class="content"><span class="acc-email"><?php echo e($task->age); ?></span></div>
                        <div class="clear-fix"></div>
                    </div>
                    <div class="view-detail__content--row">
                        <div class="text"><span>Update :</span></div>
                        <div class="content"><span class="acc-username"><?php echo e($task->update); ?></span></div>
                        <div class="clear-fix"></div>
                    </div> -->
                    <div class="view-detail__content--row">
                        <div class="text"><span>To do type :</span></div>
                        <div class="content">
                        <span class="acc-username"><?php echo e($task->type); ?></span></div>
                        <div class="clear-fix"></div>
                        <div class="clear-fix"></div>
                    </div>
                    <div class="view-detail__content--row">
                        <div class="text"><span>Date :</span></div>
                        <div class="content"><span class="acc-phone"><?php echo e($task->created_at); ?></span></div>
                        <div class="clear-fix"></div>
                    </div>
                    <div class="view-detail__content--row">
                        <div class="text"><span>Deadline :</span></div>
                        <div class="content"><span class="acc-date"><?php echo e($task->deadline); ?></span></div>
                        <div class="clear-fix"></div>
                    </div>
                    <div class="view-detail__content--row">
                        <div class="text"><span>Ranking :</span></div>
                        <div class="content"><span class="acc-address"><?php echo e($task->ranking); ?></span></div>
                        <div class="clear-fix"></div>
                    </div>
                    <div class="view-detail__content--row">
                        <div class="text"><span>Note :</span></div>
                        <div class="content"><span class="acc-address"><?php echo e($task->note); ?></span></div>
                        <div class="clear-fix"></div>
                    </div>
                    <!-- <div class="view-detail__content--row">
                        <div class="text"><span>Status :</span></div>
                        <div class="content"><span class="acc-address"><?php echo e($task->status); ?></span></div>
                        <div class="clear-fix"></div>
                    </div> -->
                    <div class="view-detail__content--row text-center">
                        <a class="btn-edit btn--primary padding--base"
                           href="<?php echo e(route('admin.customerTasks.edit',['id'=>$task->id])); ?>">Edit</a>
                        <a class="btn-cancel btn--primary padding--base" href="<?php echo e(route('admin.customers.index')); ?>">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
        <!--.view-detail-wrap-->
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>