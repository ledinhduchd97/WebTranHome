<?php $__env->startSection('title','House'); ?>
<?php $__env->startSection('content'); ?>
    <div class="house-add content-wrap content-wrap2" id="house-add">
        <div class="edit-house edit-house-wrap">
            <div class="edit-house__top">
                <h2 class="edit-house__top--title">Add a new house</h2>
            </div>

            <div class="edit-house__main">
                <div class="edit-house--left fleft">
                    <div class="edit-house--padding">
                        <div class="edit-house--left__content">
                            <form id="house_infor_add" action="<?php echo e(route('admin.house.store')); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <div class="edit-house--left__title">
                                    <h3>Overview</h3>
                                </div>
                                <div class="message-house" style="text-align: center;">
                                    <?php if(session()->has('success')): ?>
                                        <div class="text-center">
                                            <p class="text-success">
                                                <?php echo e(session('success')); ?>

                                                <?php echo e(session()->forget("success")); ?>

                                            </p>
                                        </div>
                                    <?php endif; ?>  
                                </div>
                                <input type="hidden" value="<?php echo e(Auth::id()); ?>" name="user_id">
                                <input type="hidden" value="1" name="status">
                                <div class="edit-house--left__item">
                                    <div class="text"><span>House name :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" value="" name="name"/>
                                        <div class="error-name">
                                            <?php if(sizeof($errors) != 0): ?>
                                              <?php if($errors): ?>
                                                <p style="color:red; font-size: 10px;"><?php echo e($errors->first('name')); ?></p>
                                              <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="edit-house--left__item">
                                    <div class="text"><span>Code :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" value="" name="code"/>
                                        <div class="error-code">
                                            <?php if(sizeof($errors) != 0): ?>
                                              <?php if($errors): ?>
                                                <p style="color:red; font-size: 10px;"><?php echo e($errors->first('code')); ?></p>
                                              <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="edit-house--left__item">
                                    <div class="text"><span>Note :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" value="" name="note"/>
                                        <div class="error-note">
                                            <?php if(sizeof($errors) != 0): ?>
                                              <?php if($errors): ?>
                                                <p style="color:red; font-size: 10px;"><?php echo e($errors->first('note')); ?></p>
                                              <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="edit-house--left__item">
                                    <div class="text"><span>Phone :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" value="" name="phone"/>
                                        <div class="error-phone">
                                            <?php if(sizeof($errors) != 0): ?>
                                              <?php if($errors): ?>
                                                <p style="color:red; font-size: 10px;"><?php echo e($errors->first('phone')); ?></p>
                                              <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="edit-house--left__item">
                                    <div class="text"><span>Address :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" value="" name="address"/>
                                        <div class="error-address">
                                            <?php if(sizeof($errors) != 0): ?>
                                              <?php if($errors): ?>
                                                <p style="color:red; font-size: 10px;"><?php echo e($errors->first('address')); ?></p>
                                              <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="edit-house--left__item">
                                    <div class="text"><span>Area :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" value="" name="area"/>
                                        <div class="error-area">
                                            <?php if(sizeof($errors) != 0): ?>
                                              <?php if($errors): ?>
                                                <p style="color:red; font-size: 10px;"><?php echo e($errors->first('area')); ?></p>
                                              <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="edit-house--left__title">
                                    <h3>Facts and Features</h3>
                                </div>
                                <div class="edit-house--left__item">
                                    <div class="text"><span>Number_bedroom :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" value=""
                                               name="number_bedroom"/>
                                        <div class="error-number_bedroom">
                                            <?php if(sizeof($errors) != 0): ?>
                                              <?php if($errors): ?>
                                                <p style="color:red; font-size: 10px;"><?php echo e($errors->first('number_bedroom')); ?></p>
                                              <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="edit-house--left__item">
                                    <div class="text"><span>Number_bathroom :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" value=""
                                               name="number_bathroom"/>
                                        <div class="error-number_bathroom">
                                            <?php if(sizeof($errors) != 0): ?>
                                              <?php if($errors): ?>
                                                <p style="color:red; font-size: 10px;"><?php echo e($errors->first('number_bathroom')); ?></p>
                                              <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="edit-house--left__item">
                                    <div class="text"><span>Living Area :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" value=""
                                               name="site_area"/>
                                        <div class="error-site_area">
                                            <?php if(sizeof($errors) != 0): ?>
                                              <?php if($errors): ?>
                                                <p style="color:red; font-size: 10px;"><?php echo e($errors->first('site_area')); ?></p>
                                              <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="edit-house--left__item">
                                    <div class="text"><span>Lot Size :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" type="text" value=""
                                               name="area_gross_floor"/>
                                        <div class="error-area_gross_floor">
                                            <?php if(sizeof($errors) != 0): ?>
                                              <?php if($errors): ?>
                                                <p style="color:red; font-size: 10px;"><?php echo e($errors->first('area_gross_floor')); ?></p>
                                              <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="edit-house--left__item">
                                    <div class="text"><span>Price :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" id="price" type="text" title="price is a number" pattern="^[0-9]+$" required value=""
                                               name="price"/><span class="unit-text">Unit :</span>
                                        <select class="border--base padding--base" id="unit" name="unit">
                                            <option value="0">€</option>
                                            <option value="1">$</option>
                                            <option value="2">£</option>
                                        </select>
                                        <div class="error-price">
                                            <?php if(sizeof($errors) != 0): ?>
                                              <?php if($errors): ?>
                                                <p style="color:red; font-size: 10px;"><?php echo e($errors->first('price')); ?></p>
                                              <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <!-- image -->
                                <div class="edit-house--left__item">
                                    <div class="text"><span>Images Slide Page Home :</span></div>
                                    <div class="content">
                                        <img src="" alt="">
                                        <input type="file" name="image_home" accept="image/*">
                                        <div class="error-image_home">
                                            <?php if(sizeof($errors) != 0): ?>
                                              <?php if($errors): ?>
                                                <p style="color:red; font-size: 10px;"><?php echo e($errors->first('image_home')); ?></p>
                                              <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>

                                <div class="edit-house--left__item">
                                    <div class="text"><span>Images Slide Page Detail :</span></div>
                                    <div class="content" id="content_image">
                                        <img src="" alt="">
                                        <input type="file" name="image[]" accept="image/*">
                                    </div>
                                    <div class="error-image">
                                        <?php if(sizeof($errors) != 0): ?>
                                          <?php if($errors): ?>
                                            <p style="color:red; font-size: 10px;"><?php echo e($errors->first('image')); ?></p>
                                          <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                    <span class="add_more_image" title="Add image"
                                          style="font-size: 25px; position: relative; top:-30px;left: 72%;"><i
                                                class="fas fa-plus-square"></i></span>
                                    <div class="clear-fix"></div>
                                </div>

                                <div class="edit-house--left__item">
                                    <div class="text"><span>Images Thumb :</span></div>
                                    <div class="content">
                                        <img src="" alt="">
                                        <input type="file" name="image_thumb" accept="image/*">
                                        <div class="error-image_thumb">
                                        <?php if(sizeof($errors) != 0): ?>
                                          <?php if($errors): ?>
                                            <p style="color:red; font-size: 10px;"><?php echo e($errors->first('image_thumb')); ?></p>
                                          <?php endif; ?>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <!-- image -->
                                <div class="edit-house--left__item">
                                    <div class="text"><span></span></div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="edit-house--left__item">
                                    <div class="text"><span>Video URL :</span></div>
                                    <div class="content">
                                        <input class="border--base padding--base" id="file_youtube" type="url"
                                               name="video" value=""/>
                                        <div class="error-video">
                                        <?php if(sizeof($errors) != 0): ?>
                                          <?php if($errors): ?>
                                            <p style="color:red; font-size: 10px;"><?php echo e($errors->first('video')); ?></p>
                                          <?php endif; ?>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="clear-fix"></div>
                                </div>
                                <div class="edit-house--left__item">
                                    <div class="text"><span>Description :</span></div>
                                    <div class="content">
                                        <textarea class="border--base padding--base" id="desc" name="description"
                                                  cols="30" rows="10" value=""></textarea>
                                        <div class="error-description">
                                        <?php if(sizeof($errors) != 0): ?>
                                          <?php if($errors): ?>
                                            <p style="color:red; font-size: 10px;"><?php echo e($errors->first('description')); ?></p>
                                          <?php endif; ?>
                                        <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="clear-fix"></div>
                                    <div class="edit-house--left__title">
                                        <h3>General Information</h3>
                                    </div>
                                    <div class="edit-house--left__item">
                                        <div class="text"><span>Brokerage Name :</span></div>
                                        <div class="content">
                                            <input class="border--base padding--base" type="text" value=""
                                                   name="brokerage"/>
                                            <div class="error-brokerage">
                                                <?php if(sizeof($errors) != 0): ?>
                                                  <?php if($errors): ?>
                                                    <p style="color:red; font-size: 10px;"><?php echo e($errors->first('brokerage')); ?></p>
                                                  <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="clear-fix"></div>
                                    </div>
                                    <div class="edit-house--left__item">
                                        <div class="text"><span>Agent :</span></div>
                                        <div class="content">
                                            <input class="border--base padding--base" type="text" value=""
                                                   name="agent"/>
                                            <div class="error-agent">
                                                <?php if(sizeof($errors) != 0): ?>
                                                  <?php if($errors): ?>
                                                    <p style="color:red; font-size: 10px;"><?php echo e($errors->first('agent')); ?></p>
                                                  <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="clear-fix"></div>
                                    </div>
                                    <div class="edit-house--left__item">
                                        <div class="text"><span>License :</span></div>
                                        <div class="content">
                                            <input class="border--base padding--base" type="text" value=""
                                                   name="license"/>
                                            <div class="error-license">
                                                <?php if(sizeof($errors) != 0): ?>
                                                  <?php if($errors): ?>
                                                    <p style="color:red; font-size: 10px;"><?php echo e($errors->first('license')); ?></p>
                                                  <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="clear-fix"></div>
                                    </div>
                                    <div class="edit-house--left__item">
                                        <div class="text"><span>MLS Number :</span></div>
                                        <div class="content">
                                            <input class="border--base padding--base" type="text" value="" name="mls"/>
                                            <div class="error-mls">
                                                <?php if(sizeof($errors) != 0): ?>
                                                  <?php if($errors): ?>
                                                    <p style="color:red; font-size: 10px;"><?php echo e($errors->first('mls')); ?></p>
                                                  <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="clear-fix"></div>
                                    </div>
                                    <div class="edit-house--left__item">
                                        <div class="text"><span>Zipcode :</span></div>
                                        <div class="content">
                                            <input class="border--base padding--base" type="text" value=""
                                                   name="zipcode" required pattern="^[0-9]+$" title="zipcode is a number"/>
                                            <div class="error-zipcode">
                                                <?php if(sizeof($errors) != 0): ?>
                                                  <?php if($errors): ?>
                                                    <p style="color:red; font-size: 10px;"><?php echo e($errors->first('zipcode')); ?></p>
                                                  <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="clear-fix"></div>
                                    </div>
                                    <div class="edit-house--left__item">
                                        <div class="text"><span>Year Built :</span></div>
                                        <div class="content">
                                            <input class="border--base padding--base" type="text" value=""
                                                   name="builded_year"/>
                                            <div class="error-builded_year">
                                                <?php if(sizeof($errors) != 0): ?>
                                                  <?php if($errors): ?>
                                                    <p style="color:red; font-size: 10px;"><?php echo e($errors->first('builded_year')); ?></p>
                                                  <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="clear-fix"></div>
                                    </div>
                                    <div class="edit-house--left__item text-center">
                                        <input id="btn_add_house" class="btn--primary padding--base btn--submit"
                                               type="submit" value="Submit"/><a
                                                class="btn--primary padding--base btn--cancel"
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
        <div class="clear-fix"></div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#desc' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

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
            $("#content_image").append(`
                <div class="slide_page_detail">
                <img src="" alt="">
                <input type="file" name="image[]" accept="image/*"><span class="remove_image" onclick="remove_image(this)"><i class="fa fa-trash"></i></<span>
                </div>
            `);
            previewImage();
        });
        function remove_image(that) {
            $(that).closest('.slide_page_detail').remove();
        }
        click;


        
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>