<?php $__env->startSection('title','House'); ?>
<?php $__env->startSection('content'); ?>
<div class="house-detail content-wrap content-wrap2" id="house-detail">
    <div class="edit-house edit-house-wrap">
      <div class="edit-house__top">
        <h2 class="edit-house__top--title">View detail</h2>
      </div>
      <div class="edit-house__main">
        <div class="edit-house--left fleft">
          <div class="edit-house--padding">
            <div class="edit-house--left__content">
              <div class="edit-house--left__title">
                <h3>Overview</h3>
              </div>
              <form action="<?php echo e(route('admin.house.delete.recycle',$house)); ?>" method="get" onsubmit="return smDestroy()">
                <div class="edit-house--left__item">
                  <div class="text"><span>House name :</span></div>
                  <div class="content"><span><?php echo e($house->name); ?></span></div>
                  <div class="clear-fix"></div>
                </div>
                <div class="edit-house--left__item">
                  <div class="text"><span>Note :</span></div>
                  <div class="content"><span><?php echo e($house->note); ?></span></div>
                  <div class="clear-fix"></div>
                </div>
                <div class="edit-house--left__item">
                  <div class="text"><span>Phone :</span></div>
                  <div class="content"><span><?php echo e($house->phone); ?></span></div>
                  <div class="clear-fix"></div>
                </div>
                <div class="edit-house--left__item">
                  <div class="text"><span>Address :</span></div>
                  <div class="content"><span><?php echo e($house->address); ?></span></div>
                  <div class="clear-fix"></div>
                </div>
                <div class="edit-house--left__item edit-item--margintop">
                  <div class="text"><span>Area :</span></div>
                  <div class="content"><span><?php echo e($house->area); ?></span></div>
                  <div class="clear-fix"></div>
                </div>
              </form>
              <div class="edit-house--left__title">
                <h3>Facts and Futures</h3>
              </div>
              <form action="<?php echo e(route('admin.house.delete.recycle',$house)); ?>" method="get" onsubmit="return smDestroy()">
		      	    <?php echo e(csrf_field()); ?>

                <div class="edit-house--left__item">
                  <div class="text"><span>Number_bedroom :</span></div>
                  <div class="content"><span><?php echo e($house->number_bedroom); ?></span></div>
                  <div class="clear-fix"></div>
                </div>
                <div class="edit-house--left__item">
                  <div class="text"><span>Number_bathroom :</span></div>
                  <div class="content"><span><?php echo e($house->number_bathroom); ?></span></div>
                  <div class="clear-fix"></div>
                </div>
                <div class="edit-house--left__item">
                  <div class="text"><span>Living Area :</span></div>
                  <div class="content"><span><?php echo e($house->site_area); ?> sq ft</span></div>
                  <div class="clear-fix"></div>
                </div>
                <div class="edit-house--left__item">
                  <div class="text"><span>Lot Size :</span></div>
                  <div class="content"><span><?php echo e($house->area_gross_floor); ?> sq ft</span></div>
                  <div class="clear-fix"></div>
                </div>
                <div class="edit-house--left__item">
                  <div class="text"><span>Price :</span></div>
                  <div class="content"><span>
                    <?php echo e($house->unit); ?>

                    <?php echo e($house->price); ?>

                  </span>
                </div>
                  <div class="clear-fix"></div>
                </div>
                <div class="edit-house--left__item">
                  <div class="text"><span>Images :</span></div>
                  <div class="content">
                    <div class="select_image"><span>
                      <?php $__currentLoopData = $house->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($image->level == 1): ?>
                          <img src="<?php echo e(asset($image->link)); ?>" alt="anh"/>
                        <?php endif; ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </span></div>
                  </div>
                  <div class="clear-fix"></div>
                </div>
                <div class="edit-house--left__item">
                  <div class="text"><span>Video URL :</span></div>
                  <div class="content"><span><?php echo e($house->video); ?></span></div>
                  <div class="clear-fix"></div>
                </div>
                <div class="edit-house--left__item">
                  <div class="text"><span>Description :</span></div>
                  <div class="content"><span><?php echo $house->description; ?></span></div>
                  <div class="clear-fix"></div>
                </div>
                <div class="edit-house--left__title">
                  <h3>General Information</h3>
                </div>
                <div class="edit-house--left__item">
                  <div class="text"><span>Brokerage Name :</span></div>
                  <div class="content"><span><?php echo e($house->brokerage); ?></span></div>
                  <div class="clear-fix"></div>
                </div>
                <div class="edit-house--left__item">
                  <div class="text"><span>Agent :</span></div>
                  <div class="content"><span><?php echo e($house->agent); ?></span></div>
                  <div class="clear-fix"></div>
                </div>
                <div class="edit-house--left__item">
                  <div class="text"><span>License :</span></div>
                  <div class="content"><span><?php echo e($house->license); ?></span></div>
                  <div class="clear-fix"></div>
                </div>
                <div class="edit-house--left__item">
                  <div class="text"><span>MLS Number :</span></div>
                  <div class="content"><span><?php echo e($house->mls); ?></span></div>
                  <div class="clear-fix"></div>
                </div>
                <div class="edit-house--left__item">
                  <div class="text"><span>Zipcode :</span></div>
                  <div class="content"><span><?php echo e($house->zipcode); ?></span></div>
                  <div class="clear-fix"></div>
                </div>
                <div class="edit-house--left__item">
                  <div class="text"><span>Year Built :</span></div>
                  <div class="content"><span><?php echo e($house->builded_year); ?></span></div>
                  <div class="clear-fix"></div>
                </div>
                <div class="edit-house--left__item text-center">
                	<a href="<?php echo e(route('admin.house.edit',$house)); ?>" class="btn--edit btn--primary padding--base">Edit</a>
            	  	<input type="submit" class="btn--edit btn--primary padding--base" value="Delete">
                	<a href="<?php echo e(route('admin.house.index')); ?>" class="btn--edit btn--primary padding--base">Cancel</a>
                  <div class="clear-fix"></div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="edit-house--right fright">
          <div class="edit-house--padding">
            <div class="edit-house--right__content">
              <h4>Lưu thay đổi</h4>
              <p><i class="fas fa-calendar-alt"></i>Được đăng bởi:<span class="time-up"> <?php echo e($house->created_at); ?> </span><span class="admin-up"><?php echo e($house->user->fullname); ?></span></p>
              <?php if(isset($house->user_updated->fullname)): ?>
              <p>Được chỉnh sửa lần cuối by <strong class="admin-edit"> <?php echo e($house->user_updated->fullname); ?> </strong><span class="time-edit"><?php echo e($house->updated_at); ?></span></p>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="clear-fix"></div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>