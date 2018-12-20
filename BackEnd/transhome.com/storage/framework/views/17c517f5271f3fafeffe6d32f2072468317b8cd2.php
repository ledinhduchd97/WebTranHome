<?php $__env->startSection('title','Edit House'); ?>
<?php $__env->startSection('content'); ?>
    <?php if(isset($house)): ?>
        <div class="house-edit content-wrap content-wrap2" id="house-edit">
            <div class="edit-house edit-house-wrap">
                <div class="edit-house__top">
                    <h2 class="edit-house__top--title">Edit a new house</h2>
                </div>
                <div class="edit-house__main">
                    <div class="edit-house--left fleft">
                        <div class="edit-house--padding">
                            <div class="edit-house--left__content">
                                <form action="<?php echo e(route('admin.house.update', ['house' => $house->id])); ?>" method="POST" enctype="multipart/form-data">
                                    <?php echo e(csrf_field()); ?>

                                    <?php echo e(method_field("PUT")); ?>

                                    <div class="edit-house--left__title">
                                        <h3>Overview</h3>
                                    </div>
                                    <?php if(session()->has('success')): ?>
                                        <div class="text-center">
                                            <p class="text-success">
                                                <?php echo e(session('success')); ?>

                                            </p>
                                        </div>
                                    <?php endif; ?>
                                    <div class="edit-house--left__item">
                                        <div class="text"><span>House name :</span></div>
                                        <input type="hidden" value="<?php echo e(Auth::id()); ?>" name="user_update">
                                        <div class="content">
                                            <input class="border--base padding--base" type="text"
                                                   value="<?php echo e($house->name); ?>" name="name"/>
                                            <?php if($errors->has('name')): ?>
                                                <p class="text-danger"><?php echo e($errors->first('name')); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="clear-fix"></div>
                                    </div>
                                    <div class="edit-house--left__item">
                                        <div class="text"><span>Code :</span></div>
                                        <div class="content">
                                            <input class="border--base padding--base" type="text"
                                                   value="<?php echo e($house->code); ?>" name="code"/>
                                            <?php if($errors->has('code')): ?>
                                                <p class="text-danger"><?php echo e($errors->first('code')); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="clear-fix"></div>
                                    </div>
                                    <div class="edit-house--left__item">
                                        <div class="text"><span>Note :</span></div>
                                        <div class="content">
                                            <input class="border--base padding--base" type="text"
                                                   value="<?php echo e($house->note); ?>" name="note"/>
                                            <?php if($errors->has('note')): ?>
                                                <p class="text-danger"><?php echo e($errors->first('note')); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="clear-fix"></div>
                                    </div>
                                    <div class="edit-house--left__item">
                                        <div class="text"><span>Phone :</span></div>
                                        <div class="content">
                                            <input class="border--base padding--base" type="text"
                                                   value="<?php echo e($house->phone); ?>" name="phone"/>
                                            <?php if($errors->has('phone')): ?>
                                                <p class="text-danger"><?php echo e($errors->first('phone')); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="clear-fix"></div>
                                    </div>
                                    <div class="edit-house--left__item">
                                        <div class="text"><span>Address :</span></div>
                                        <div class="content">
                                            <input class="border--base padding--base" type="text"
                                                   value="<?php echo e($house->address); ?>" name="address"/>
                                            <?php if($errors->has('address')): ?>
                                                <p class="text-danger"><?php echo e($errors->first('address')); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="clear-fix"></div>
                                    </div>
                                    <div class="edit-house--left__item">
                                        <div class="text"><span>Area :</span></div>
                                        <div class="content">
                                            <input class="border--base padding--base" type="text"
                                                   value="<?php echo e($house->area); ?>" name="area"/>
                                            <?php if($errors->has('area')): ?>
                                                <p class="text-danger"><?php echo e($errors->first('area')); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="clear-fix"></div>
                                    </div>
                                    <div class="edit-house--left__title">
                                        <h3>Facts and Features</h3>
                                    </div>
                                    <div class="edit-house--left__item">
                                        <div class="text"><span>Number_bedroom :</span></div>
                                        <div class="content">
                                            <input class="border--base padding--base" type="text"
                                                   value="<?php echo e($house->number_bedroom); ?>" name="number_bedroom"/>
                                            <?php if($errors->has('number_bedroom')): ?>
                                                <p class="text-danger"><?php echo e($errors->first('number_bedroom')); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="clear-fix"></div>
                                    </div>
                                    <div class="edit-house--left__item">
                                        <div class="text"><span>Number_bathroom :</span></div>
                                        <div class="content">
                                            <input class="border--base padding--base" type="text"
                                                   value="<?php echo e($house->number_bathroom); ?>" name="number_bathroom"/>
                                            <?php if($errors->has('number_bathroom')): ?>
                                                <p class="text-danger"><?php echo e($errors->first('number_bathroom')); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="clear-fix"></div>
                                    </div>
                                    <div class="edit-house--left__item">
                                        <div class="text"><span>Site area :</span></div>
                                        <div class="content">
                                            <input class="border--base padding--base" type="text"
                                                   value="<?php echo e($house->site_area); ?>" name="site_area"/>
                                            <?php if($errors->has('site_area')): ?>
                                                <p class="text-danger"><?php echo e($errors->first('site_area')); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="clear-fix"></div>
                                    </div>
                                    <div class="edit-house--left__item">
                                        <div class="text"><span>Gross floor area :</span></div>
                                        <div class="content">
                                            <input class="border--base padding--base" type="text"
                                                   value="<?php echo e($house->area_gross_floor); ?>" name="area_gross_floor"/>
                                            <?php if($errors->has('area_gross_floor')): ?>
                                                <p class="text-danger"><?php echo e($errors->first('area_gross_floor')); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="clear-fix"></div>
                                    </div>
                                    <div class="edit-house--left__item">
                                        <div class="text"><span>Price :</span></div>
                                        <div class="content">
                                            <input class="border--base padding--base" id="price" type="text"
                                                   value="<?php echo e($house->price); ?>" name="price"/><span class="unit-text">Unit :</span>
                                            <select class="border--base padding--base" id="unit" name="unit">
                                                <?php if($house->unit == 0 ): ?>
                                                    <option value="0">€</option>
                                                    <option value="1">$</option>
                                                    <option value="2">£</option>
                                                <?php endif; ?> 
                                                <?php if($house->unit == 1): ?>
                                                    <option value="1">$</option>
                                                    <option value="0">€</option>
                                                    <option value="2">£</option>
                                                <?php endif; ?>
                                                <?php if($house->unit == 2): ?>
                                                    <option value="2">£</option>
                                                    <option value="1">$</option>
                                                    <option value="0">€</option>    
                                                <?php endif; ?>
                                            </select>
                                            <?php if($errors->has('unit')): ?>
                                                <p class="text-danger"><?php echo e($errors->first('unit')); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="clear-fix"></div>
                                    </div>
                                    <!-- image -->
                                    <div class="edit-house--left__item">
                                        <div class="text"><span>Images Slide Page Home :</span></div>
                                        <div class="content">
                                            <div class="image_slide_home" style="width: 91%;">
                                                <?php $__currentLoopData = $house->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($image->level == 1): ?>
                                                        <div class="position-relative images">
                                                            <img src="<?php echo e(asset($image->link)); ?>" alt="">
                                                            <button type="button" class="position-absolute close text-black" style="top: 10px; right: 10px;">&times;</button>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <img src=""/>
                                                <input type="file" style="display:none;" name="image_home" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="clear-fix"></div>
                                    </div>
                                    <!--  -->
                                    <div class="edit-house--left__item">
                                        <div class="text"><span>Images Slide Page Detail :</span></div>
                                        <div class="content" id="content_image">
                                            <div class="image_slide_detail" style="width: 91%;">
                                                <?php $__currentLoopData = $house->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($image->level == 2): ?>
                                                        <div class="position-relative images">
                                                            <img src="<?php echo e(asset($image->link)); ?>" alt="">
                                                            <button type="button" class="position-absolute close text-black" style="top: 10px; right: 10px;">&times;</button>
                                                            <input type="hidden" value="<?php echo e($image->id); ?>" name="images_slide[]">
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <input type="hidden" value="" name="images_slide[]">
                                                <img src=""/>
                                                <input type="file" name="image[]" accept="image/*">
                                            </div>
                                        </div>
                                        <span class="add_more_image" title="Add image"
                                              style="font-size: 25px; position: relative; top:-30px;left: 72%;"><i
                                                    class="fas fa-plus-square"></i></span>
                                        <div class="clear-fix"></div>
                                    </div>
                                    <!--  -->

                                    <div class="edit-house--left__item">
                                        <div class="text"><span>Images Thumb :</span></div>
                                        <div class="content">
                                            <div class="image_thumb_detail" style="width: 91%;">
                                                <?php $__currentLoopData = $house->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($image->level == 3): ?>
                                                        <div class="position-relative images">
                                                            <img src="<?php echo e(asset($image->link)); ?>" alt="">
                                                            <button type="button" class="position-absolute close text-black" style="top: 10px; right: 10px;">&times;</button>
                                                            <input type="file" class="d-none">
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <img src=""/>
                                                <input type="file" style="display: none;" name="image_thumb" accept="image/*">
                                            </div>
                                        </div>
                                        <div class="clear-fix"></div>
                                    </div>
                                    <!-- /image -->
                                    <div class="edit-house--left__item">
                                        <div class="text"><span>Video URL :</span></div>
                                        <div class="content">
                                            <input class="border--base padding--base" id="file_youtube" type="url"
                                                   name="video" value="<?php echo e($house->video); ?>"/>
                                            <?php if($errors->has('video')): ?>
                                                <p class="text-danger"><?php echo e($errors->first('video')); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="clear-fix"></div>
                                    </div>
                                    <div class="edit-house--left__item">
                                        <div class="text"><span>Description :</span></div>
                                        <div class="content">
                                            <textarea class="border--base padding--base" id="desc" name="description"
                                                      cols="30" rows="10" value=""><?php echo e($house->description); ?></textarea>
                                            <?php if($errors->has('description')): ?>
                                                <p class="text-danger"><?php echo e($errors->first('description')); ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <div class="clear-fix"></div>
                                        <div class="edit-house--left__title">
                                            <h3>General Information</h3>
                                        </div>
                                        <div class="edit-house--left__item">
                                            <div class="text"><span>Brokerage Name :</span></div>
                                            <div class="content">
                                                <input class="border--base padding--base" type="text"
                                                       value="<?php echo e($house->brokerage); ?>" name="brokerage"/>
                                                <?php if($errors->has('brokerage')): ?>
                                                    <p class="text-danger"><?php echo e($errors->first('brokerage')); ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <div class="clear-fix"></div>
                                        </div>
                                        <div class="edit-house--left__item">
                                            <div class="text"><span>Agent :</span></div>
                                            <div class="content">
                                                <input class="border--base padding--base" type="text"
                                                       value="<?php echo e($house->agent); ?>" name="agent"/>
                                                <?php if($errors->has('agent')): ?>
                                                    <p class="text-danger"><?php echo e($errors->first('agent')); ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <div class="clear-fix"></div>
                                        </div>
                                        <div class="edit-house--left__item">
                                            <div class="text"><span>CRE License :</span></div>
                                            <div class="content">
                                                <input class="border--base padding--base" type="text"
                                                       value="<?php echo e($house->license); ?>" name="license"/>
                                                <?php if($errors->has('license')): ?>
                                                    <p class="text-danger"><?php echo e($errors->first('license')); ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <div class="clear-fix"></div>
                                        </div>
                                        <div class="edit-house--left__item">
                                            <div class="text"><span>MLS Number :</span></div>
                                            <div class="content">
                                                <input class="border--base padding--base" type="text"
                                                       value="<?php echo e($house->mls); ?>" name="mls"/>
                                                <?php if($errors->has('mls')): ?>
                                                    <p class="text-danger"><?php echo e($errors->first('mls')); ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <div class="clear-fix"></div>
                                        </div>
                                        <div class="edit-house--left__item">
                                            <div class="text"><span>Zipcode :</span></div>
                                            <div class="content">
                                                <input class="border--base padding--base" type="text"
                                                       value="<?php echo e($house->zipcode); ?>" name="zipcode"/>
                                                <?php if($errors->has('zipcode')): ?>
                                                    <p class="text-danger"><?php echo e($errors->first('zipcode')); ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <div class="clear-fix"></div>
                                        </div>
                                        <div class="edit-house--left__item">
                                            <div class="text"><span>Year Built :</span></div>
                                            <div class="content">
                                                <input class="border--base padding--base" type="text"
                                                       value="<?php echo e($house->builded_year); ?>" name="builded_year"/>
                                                <?php if($errors->has('builded_year')): ?>
                                                    <p class="text-danger"><?php echo e($errors->first('builded_year')); ?></p>
                                                <?php endif; ?>
                                            </div>
                                            <div class="clear-fix"></div>
                                        </div>
                                        <div class="edit-house--left__item text-center">
                                            <button class="btn--save btn--primary padding--base" type="submit">Save
                                            </button>
                                            <a class="btn--primary padding--base btn--cancel"
                                               href="<?php echo e(route('admin.house.index')); ?>">Cancel</a>
                                            <div class="clear-fix"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--.edit-house-wrap-->
            <div class="edit-house--right fright">
                <div class="edit-house--padding">
                    <div class="edit-house--right__content">
                        <h4>Lưu thay đổi</h4>
                        <p><i class="fas fa-calendar-alt"></i>Được đăng bởi:<span
                                    class="time-up"><?php echo e($house->created_at); ?> </span><span class="admin-up"><?php echo e($house->user->fullname); ?></span></p>
                        <?php if(isset($house->user_updated->fullname)): ?>
                        <p>Được chỉnh sửa lần cuối by <strong class="admin-edit"><?php echo e($house->user_updated->fullname); ?> </strong><span
                                    class="time-edit"><?php echo e($house->updated_at); ?></span></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="clear-fix"></div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        function previewImage(){
            $("input[type='file']").change(function(){

                if (this.files && this.files[0]) {
                    var reader = new FileReader();

                    reader.onload = (e) => {
                        $(this).prev("img").attr('src', e.target.result);
                    }

                    reader.readAsDataURL(this.files[0]);
                }
            });
        }

        previewImage();

        // click add image more
        var click = $(".add_more_image").click(function (event) {
            // $(this).remove();
            $(".image_slide_detail").append(`
                <img src/>
                <input type="file" name="image[]" accept="image/*">
            `);
            previewImage();
        });
        click;



        $(".close").click(function(){
            $(this).parents(".images").siblings("input[type='file']").show();
            $(this).parents(".images").remove();
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>