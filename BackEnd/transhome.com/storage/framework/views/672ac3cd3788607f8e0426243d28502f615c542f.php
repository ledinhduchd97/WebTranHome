<?php $__env->startSection('title','Edit'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"/>
    <link rel="stylesheet" href="<?php echo e(asset('frontend-admin/libs/datepicker/jquery-ui.theme.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('frontend-admin/libs/datepicker/jquery-ui.min.css')); ?>"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="customer_edit content-wrap content-wrap2" id="customer_edit">
        <div class="add-customer add-customer-wrap">
            <div class="add-customer__top">
                <h2 class="add-customer__top--title">Edit Customer</h2>
            </div>

            <div class="add-customer__main">
                <div class="add-customer--left fleft">
                    <div class="add-customer--padding">
                        <div class="add-customer--left__content">

                            <form id="house_infor" action="<?php echo e(route('admin.customerTasks.update', ['id' => $task->id])); ?>" method="POST">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('PUT')); ?>

                                <div class="add-customer--left__title">
                                    <h3>Edit Task</h3>
                                </div>
                                <div class="message-adduser" style="text-align: center;">
                                    <p class="text-success">
                                        
                                        <?php echo e(session()->has('success') ? session('success') : ""); ?>

                                    </p>
                                </div>
                                <div class="add-customer--left__item">
                                    <div class="text"><span>Title :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" name="title" value="<?php echo e($task->title); ?>" required="required" />
                                        <?php if($errors->has('title')): ?>
                                            <p class="text-danger"><?php echo e($errors->first('title')); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <!-- <div class="add-customer--left__item">
                                    <div class="text"><span>Age :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" name="age" value="<?php echo e($task->age); ?>" required="required" />
                                        <?php if($errors->has('age')): ?>
                                            <p class="text-danger"><?php echo e($errors->first('age')); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="add-customer--left__item">
                                    <div class="text"><span>Update :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" value="<?php echo e($task->update); ?>" name="update" required="required"/>
                                        <?php if($errors->has('update')): ?>
                                            <p class="text-danger"><?php echo e($errors->first('update')); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div> -->
                                <div class="add-customer--left__item">
                                    <div class="text"><span>To do type :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" name="type"  value="<?php echo e($task->type); ?>" required="required" />
                                        <?php if($errors->has('type')): ?>
                                            <p class="text-danger"><?php echo e($errors->first('type')); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="add-customer--left__item">
                                    <div class="text"><span>Date :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="date" name="created_at" value="<?php echo e(getDateFromDateTime($task->created_at)); ?>" required="required" />
                                        <?php if($errors->has('created_at')): ?>
                                            <p class="text-danger"><?php echo e($errors->first('created_at')); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="add-customer--left__item">
                                    <div class="text"><span>Deadline :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="date" name="deadline" value="<?php echo e(getDateFromDateTime($task->deadline)); ?>" required="required"/>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="add-customer--left__item">
                                    <div class="text"><span>Ranking :</span></div>
                                    <div class="content">
                                        <select class="border--base padding--base" name="ranking" id="ranking">
                                            <option value="0" <?php echo e($task->ranking=="Low" ? "selected": ""); ?>>Low</option>
                                            <option value="1" <?php echo e($task->ranking=="High" ? "selected" : ""); ?>>High</option>
                                        </select>
                                        <?php if($errors->has('ranking')): ?>
                                            <p class="text-danger"><?php echo e($errors->first('ranking')); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="edit-tk__content--row">
                                    <div class="text"><span>
                                 Note (<span class="required">*</span>):</span></div>
                                    <div class="content">
                                        <textarea class="border--base padding--base" id="note" type="text" name="note" style="width: 90%;"><?php echo e($task->note); ?></textarea>
                                        <div class="error-username">
                                            <?php if(sizeof($errors) != 0): ?>
                                                <?php if($errors): ?>
                                                    <p style="color:red; font-size: 10px;"><?php echo e($errors->first('note')); ?></p>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <!-- <div class="add-customer--left__item">
                                    <div class="text"><span>Status :</span></div>
                                    <div class="content">
                                        <select class="border--base padding--base" name="status" id="status">
                                            <option value="0" <?php echo e($task->status=="Done" ? "selected": ""); ?>>Done</option>
                                            <option value="1" <?php echo e($task->status=="Waiting" ? "selected" : ""); ?>>Waiting</option>
                                        </select>
                                        <?php if($errors->has('status')): ?>
                                            <p class="text-danger"><?php echo e($errors->first('status')); ?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div> -->
                                <div class="add-customer--left__item text-center">
                                    <button class="btn--primary padding--base btn--submit" type="submit">Save</button>
                                    <a class="btn--primary padding--base btn--cancel" href="<?php echo e(route('admin.partner.index')); ?>">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="clear-fix"></div>
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