<?php $__env->startSection('title','Edit'); ?>
<?php $__env->startSection('css'); ?>
	 <!-- Styles-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"/>
    <link rel="stylesheet" href="libs/datepicker/jquery-ui.theme.css"/>
    <link rel="stylesheet" href="libs/datepicker/jquery-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	     <div class="tasktodo-edit content-wrap content-wrap2" id="tasktodo-edit">
        <div class="tasktodo tasktodo-wrap">
          <div class="tasktodo-edit__top">
            <h2 class="tasktodo-edit__top--title">Edit To Do Task</h2>
            <?php if(session()->has('success')): ?>
            <div class="alert alert-success" style="margin-left: center;">
                    <?php echo e(session()->has('success') ? session('success') : ""); ?>

                    <?php echo e(session()->forget('success')); ?>

            </div>
           <?php endif; ?>
          </div>
          <div class="tasktodo-edit__main">
            <form id="form--tasktodo-edit" action="<?php echo e(route('admin.tasks.update',['task'=>$tasktodo->id])); ?>" method="post">
              <?php echo e(csrf_field()); ?>

              <?php echo e(method_field("PUT")); ?>

              <div class="tasktodo-edit--item">
                <div class="text"><span>Title task :</span></div>
                <div class="content">
                  <input class="border--base padding--base" type="text" name="title" value="<?php echo e($tasktodo->title); ?>"/>
                  <?php if(sizeof($errors) != 0): ?>
                    <?php if($errors): ?>
                      <p style="color:red; font-size: 10px;"><?php echo e($errors->first('title')); ?></p>
                    <?php endif; ?>
                  <?php endif; ?>
                </div>
                <div class="clear-fix"></div>
              </div>
              <div class="tasktodo-edit--item">
                <div class="text"><span>Customer Name :</span></div>
                <div class="content">
                  <select class="padding--base border--base" id="tasktodo-add--status" name="customer_id">
                    <?php if(isset($customers)): ?>
                      <option value="<?php echo e($tasktodo->customer->id); ?>"><?php echo e($tasktodo->customer->first_name); ?> <?php echo e($tasktodo->customer->last_name); ?></option>
                      <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($customer->id != $tasktodo->customer->id): ?>
                          <option value="<?php echo e($customer->id); ?>"><?php echo e($customer->first_name); ?> <?php echo e($customer->last_name); ?></option>
                        <?php endif; ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                  </select>
                  <!-- <input class="border--base padding--base" type="text" value="" name="customer_name"/> -->
                  <?php if(sizeof($errors) != 0): ?>
                    <?php if($errors): ?>
                      <p style="color:red; font-size: 10px;"><?php echo e($errors->first('customer_id')); ?></p>
                    <?php endif; ?>
                  <?php endif; ?>
                </div>
                <div class="clear-fix"></div>
              </div>
              <!-- <div class="tasktodo-edit--item">
                <div class="text"><span>Age :</span></div>
                <div class="content">
                  <?php echo e($tasktodo->age); ?>

                </div>
                <div class="clear-fix"></div>
              </div> -->
              <!-- <div class="tasktodo-edit--item">
                <div class="text"><span>Update :</span></div>
                <div class="content">
                  <input class="border--base padding--base" value="<?php echo e($tasktodo->update); ?>" name="update"/>
                  <?php if(sizeof($errors) != 0): ?>
                    <?php if($errors): ?>
                      <p style="color:red; font-size: 10px;"><?php echo e($errors->first('update')); ?></p>
                    <?php endif; ?>
                  <?php endif; ?>
                </div>
                <div class="clear-fix"></div>
              </div> -->
              <div class="tasktodo-edit--item">
                <div class="text"><span>To do type :</span></div>
                <div class="content">
                  <input class="border--base padding--base" type="text" value="<?php echo e($tasktodo->to_do_type); ?>" name="to_do_type"/>
                  <?php if(sizeof($errors) != 0): ?>
                    <?php if($errors): ?>
                      <p style="color:red; font-size: 10px;"><?php echo e($errors->first('to_do_type')); ?></p>
                    <?php endif; ?>
                  <?php endif; ?>
                </div>
                <div class="clear-fix"></div>
              </div>
              <div class="tasktodo-edit--item">
                <div class="text"><span>Start task on :</span></div>
                <div class="content">
                  <input class="border--base padding--base" type="datetime-local" value="<?php echo e($tasktodo->start_task); ?>" name="start_task"/>
                  <?php if(sizeof($errors) != 0): ?>
                    <?php if($errors): ?>
                      <p style="color:red; font-size: 10px;"><?php echo e($errors->first('start_task')); ?></p>
                    <?php endif; ?>
                  <?php endif; ?>
                </div>
                <div class="clear-fix"></div>
              </div>
              <!-- <div class="tasktodo-edit--item">
                <div class="text"><span>Age :</span></div>
                <div class="content">
                  <input class="border--base padding--base" value="<?php echo e($tasktodo->age); ?>" name="age"/>
                  <?php if(sizeof($errors) != 0): ?>
                    <?php if($errors): ?>
                      <p style="color:red; font-size: 10px;"><?php echo e($errors->first('age')); ?></p>
                    <?php endif; ?>
                  <?php endif; ?>
                </div>
                <div class="clear-fix"></div>
              </div> -->
              <div class="tasktodo-edit--item">
                <div class="text"><span>Time :</span></div>
                <div class="content">
                  <input class="border--base padding--base" type="datetime-local" value="<?php echo e($tasktodo->deadline); ?>" name="deadline"/>
                  <?php if(sizeof($errors) != 0): ?>
                    <?php if($errors): ?>
                      <p style="color:red; font-size: 10px;"><?php echo e($errors->first('deadline')); ?></p>
                    <?php endif; ?>
                  <?php endif; ?>
                </div>
                <div class="clear-fix"></div>
              </div>
              <div class="tasktodo-edit--item">
                <div class="text"><span>Note :</span></div>
                <div class="content">
                  <textarea id="editor" class="content padding--base border--base" name="note" cols="30" rows="6" placeholder="Short description" ><?php echo $tasktodo->note; ?></textarea>
                  <?php if(sizeof($errors) != 0): ?>
                    <?php if($errors): ?>
                      <p style="color:red; font-size: 10px;"><?php echo e($errors->first('note')); ?></p>
                    <?php endif; ?>
                  <?php endif; ?>
                </div>
                <div class="clear-fix"></div>
              </div>
              <div class="tasktodo-edit--item">
                <div class="text"><span>Ranking :</span></div>
                <div class="content">
                  <select class="padding--base border--base" id="tasktodo-edit--rank" name="ranking">
                    <?php if($tasktodo->ranking == 0): ?>
                      <option value="0">Low</option>
                      <option value="1">High</option>
                      <option value="2">Nomal</option>
                    <?php endif; ?>
                    <?php if($tasktodo->ranking == 1): ?>
                      <option value="1">High</option>
                      <option value="2">Nomal</option>
                      <option value="0">Low</option>
                    <?php endif; ?>
                    <?php if($tasktodo->ranking == 2): ?>
                      <option value="2">Nomal</option>
                      <option value="1">High</option>
                      <option value="0">Low</option>
                    <?php endif; ?>
                  </select>
                  <?php if(sizeof($errors) != 0): ?>
                    <?php if($errors): ?>
                      <p style="color:red; font-size: 10px;"><?php echo e($errors->first('ranking')); ?></p>
                    <?php endif; ?>
                  <?php endif; ?>
                </div>
                <div class="clear-fix"></div>
              </div>
              <div class="tasktodo-edit--item">
                <div class="text"><span>Status :</span></div>
                <div class="content">
                  <select class="padding--base border--base" id="tasktodo-edit--status" name="status">
                    <?php if($tasktodo->status == 0): ?>
                      <option value="0">Waiting</option>
                      <option value="1">Done</option>
                    <?php else: ?>
                      <option value="1">Done</option>
                      <option value="0">Waiting</option>
                    <?php endif; ?>
                  </select>
                  <?php if(sizeof($errors) != 0): ?>
                    <?php if($errors): ?>
                      <p style="color:red; font-size: 10px;"><?php echo e($errors->first('status')); ?></p>
                    <?php endif; ?>
                  <?php endif; ?>
                </div>
                <div class="clear-fix"></div>
              </div>
              <div class="tasktodo-edit--item">
                <div class="text"><span>Assigned to  :</span></div>
                <div class="content">
                  <input class="border--base padding--base" type="text" value="Tranhomes" name="assigned" value="<?php echo e($tasktodo->assigned); ?>" />
                  <?php if(sizeof($errors) != 0): ?>
                    <?php if($errors): ?>
                      <p style="color:red; font-size: 10px;"><?php echo e($errors->first('assigned')); ?></p>
                    <?php endif; ?>
                  <?php endif; ?>
                </div>
                <div class="clear-fix"></div>
              </div>
              <div class="tasktodo-edit--item text-center">
                <input class="btn--save btn--primary padding--base" type="submit" value="Save"/><a class="btn--primary padding--base btn--cancel" style="color: #fff;" href="<?php echo e(route('admin.tasks.index')); ?>">Cancel</a>
              </div>
            </form>
          </div>
        </div>
        <!--.tasktodo-wrap-->
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