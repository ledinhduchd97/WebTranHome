<?php $__env->startSection('title','ADD NEW ACCOUNT'); ?>
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
    <div class="tk-add content-wrap content-wrap2" id="tk-add">
        <div class="edit-tk edit-tk-wrap">
            <div class="edit-tk__top">
                <div class="edit-tk__top--left fleft col-50">
                    <h2 class="edit-tk__title">Add new task to do</h2>
                </div>
                <div class="edit-tk__top--right fleft col-50">
                    <div class="text-right"><span class="dashboard">Dashboard</span></div>
                </div>
                <div class="clear-fix"></div>
            </div>
            <div class="edit-tk__content">
                <div class="edit-tk__content--title text-center">
                    <h3>Add new task to do</h3>
                </div>
                <div class="message-adduser" style="text-align: center;">
                   
                    <?php if(session()->has('success')): ?>
                        <div class="text-center">
                            <p class="text-success">
                                <?php echo e(session('success')); ?>

                            </p>
                        </div>
                    <?php endif; ?>
                </div>
                <form class="form-adduser" action="<?php echo e(route('admin.partnerTasks.store')); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="partner_id" value="<?php echo e(request()->partner_id); ?>">
                    <div class="edit-tk__content--row">
                        <div class="text"> <span>
                     Title task (<span class="required">*</span>):</span></div>
                        <div class="content">
                            <input class="border--base padding--base" id="title" type="text" value="" name="title"/>
                            <div class="error-fullname">
                                <?php if(sizeof($errors) != 0): ?>
                                    <?php if($errors): ?>
                                        <p style="color:red; font-size: 10px;"><?php echo e($errors->first('title')); ?></p>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="clear-fix"></div>
                    </div>

                    <div class="edit-tk__content--row">
                        <div class="text"><span>
                     Age (<span class="required">*</span>):</span></div>
                        <div class="content">
                            <input class="border--base padding--base" id="age" type="text" value="" name="age" pattern="^[0-9]*$"/>
                            <div class="error-email">
                                <?php if(sizeof($errors) != 0): ?>
                                    <?php if($errors): ?>
                                        <p style="color:red; font-size: 10px;"><?php echo e($errors->first('age')); ?></p>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="clear-fix"></div>
                    </div>
                    <div class="edit-tk__content--row">
                        <div class="text"><span>
                     Update (<span class="required">*</span>):</span></div>
                        <div class="content">
                            <input class="border--base padding--base" id="update" type="text" value="" name="update" pattern="^[0-9]*$"/>
                            <div class="error-username">
                                <?php if(sizeof($errors) != 0): ?>
                                    <?php if($errors): ?>
                                        <p style="color:red; font-size: 10px;"><?php echo e($errors->first('update')); ?></p>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="clear-fix"></div>
                    </div>
                    <div class="edit-tk__content--row">
                        <div class="text"><span>
                     To do type (<span class="required">*</span>):</span></div>
                        <div class="content">
                            <input class="border--base padding--base" id="type" type="text" value="" name="type"/>
                            <div class="error-username">
                                <?php if(sizeof($errors) != 0): ?>
                                    <?php if($errors): ?>
                                        <p style="color:red; font-size: 10px;"><?php echo e($errors->first('type')); ?></p>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="clear-fix"></div>
                    </div>
                    <div class="edit-tk__content--row">
                        <div class="text"><span>
                     Date (<span class="required">*</span>):</span></div>
                        <div class="content">
                            <input class="border--base padding--base" id="created_at" type="date" value=""
                                   name="created_at"/>
                            <div class="error-username">
                                <?php if(sizeof($errors) != 0): ?>
                                    <?php if($errors): ?>
                                        <p style="color:red; font-size: 10px;"><?php echo e($errors->first('created_at')); ?></p>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="clear-fix"></div>
                    </div>
                    <div class="edit-tk__content--row">
                        <div class="text"><span>
                     Deadline (<span class="required">*</span>):</span></div>
                        <div class="content">
                            <input class="border--base padding--base" name="deadline" id="created_at" type="date">
                        </div>
                        <div class="clear-fix"></div>
                    </div>
                    <div class="edit-tk__content--row">
                        <div class="text"><span>
                     Ranking (<span class="required">*</span>):</span></div>
                        <div class="content">
                            <select class="account-position border--base padding--base" id="ranking" name="ranking">
                                <option value="">--- Ranking ---</option>
                                <option value="0">Normal</option>
                                <option value="1">High</option>
                            </select>
                            <div class="error-sex">
                                <?php if(sizeof($errors) != 0): ?>
                                    <?php if($errors): ?>
                                        <p style="color:red; font-size: 10px;"><?php echo e($errors->first('ranking')); ?></p>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="clear-fix"></div>
                    </div>
                    <div class="edit-tk__content--row">
                        <div class="text"><span>
                    Invest (<span class="required">*</span>):</span></div>
                        <div class="content">
                            <input class="border--base padding--base" id="invest" type="text" value="" name="invest"/>
                            <div class="error-invest">
                                <?php if(sizeof($errors) != 0): ?>
                                    <?php if($errors): ?>
                                        <p style="color:red; font-size: 10px;"><?php echo e($errors->first('invest')); ?></p>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="clear-fix"></div>
                    </div>
                    <div class="edit-tk__content--row">
                        <div class="text"><span>
                    Contract (<span class="required">*</span>):</span></div>
                        <div class="content">
                        <select class="account-position border--base padding--base" id="status" name="status">
                                <option value="">--- status ---</option>
                                <option value="0">Waiting</option>
                                <option value="1">Done</option>
                            </select>
                            <div class="error-contract">
                                <?php if(sizeof($errors) != 0): ?>
                                    <?php if($errors): ?>
                                        <p style="color:red; font-size: 10px;"><?php echo e($errors->first('contract')); ?></p>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="clear-fix"></div>
                    </div>
                    <div class="edit-tk__content--row">
                        <div class="text"><span>
                     Status (<span class="required">*</span>):</span></div>
                        <div class="content">
                            <input class="border--base padding--base" id="contract" type="text" value=""
                                   name="contract"/>
                            
                            <div class="error-sex">
                                <?php if(sizeof($errors) != 0): ?>
                                    <?php if($errors): ?>
                                        <p style="color:red; font-size: 10px;"><?php echo e($errors->first('status')); ?></p>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="clear-fix"></div>
                    </div>
                    <div class="edit-tk__content--row text-center">
                        <button class="btn-submit btn--primary padding--base" type="submit" id="btn-adduser">Submit</button>
                        <a class="btn-cancel btn--primary padding--base" href="<?php echo e(route('admin.partner.index')); ?>">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <!--.edit-tk-wrap-->
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>