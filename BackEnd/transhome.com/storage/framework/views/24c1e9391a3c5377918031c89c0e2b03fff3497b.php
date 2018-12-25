<?php $__env->startSection('title','Edit About Us'); ?>
<?php $__env->startSection('css'); ?>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="about_us-edit content-wrap content-wrap2" id="about_us-edit">
        <h2 class="about_us-edit__title" style="margin-left: 15px;">About us</h2>
        <?php if(session()->has('success')): ?>
            <div class="alert alert-success" style="margin-left: 15px;">
                <?php echo e(session()->has('success') ? session('success') : ""); ?>

                <?php echo e(session()->forget('success')); ?>

            </div>
        <?php endif; ?>
        <form action="<?php echo e(route('admin.aboutus.update')); ?>" method="post" accept-charset="utf-8"
              enctype="multipart/form-data" id="form-edit-customer">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('PUT')); ?>

            <div class="about-us-view about-us-view-wrap">
                <div class="about_us-view__content">
                    <div class="col-7 fleft">
                        <div class="about_us-view__left">
                            <div class="about_us-view__row">
                                <p class="text">Title</p>
                                <input class="content padding--base border--base" name="title" type="text"
                                       value="<?php echo e($aboutus->title); ?>" placeholder="Enter the title here"
                                       required="required"/>
                                <?php if($errors->has('title')): ?>
                                    <p class="text-danger"><?php echo e($errors->first('title')); ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="about_us-view__row">
                                <p class="text">Short description</p>
                                <input class="content padding--base border--base" type="text"
                                       value="<?php echo e($aboutus->short_description); ?>" name="short_description"
                                       placeholder="Short description" required="required"/>
                                <?php if($errors->has('short_description')): ?>
                                    <p class="text-danger"><?php echo e($errors->first('short_description')); ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="about_us-view__row">
                                <p class="text">Detail description</p>
                                <textarea id="editor" class="content padding--base border--base" name="detail_description"
                                          cols="30" rows="4" placeholder="Short description"
                                          required="required"><?php echo e($aboutus->detail_description); ?></textarea>
                                <?php if($errors->has('detail_description')): ?>
                                    <p class="text-danger"><?php echo e($errors->first('detail_description')); ?></p>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                    <div class="col-5 fleft">
                        <div class="about_us-view__right text-center">
                            <div class="fleft col-50">
                                <div class="img position-relative">
                                    <img class="img--add image-responsive" src="<?php echo e(asset($aboutus->image_avatar)); ?>"/>
                                    <button type="button" class="position-absolute close text-black"
                                            style="top: 10px; right: 10px;">&times;
                                    </button>
                                </div>
                                <label for="img-file" class="btn btn-primary btn-inputfile">Select the file</label>
                                <input id="img-file" type="file" name="image_avatar" style="display:none;"/>
                                <label>Image Avatar</label>
                            </div>
                            <div class="fleft col-50">
                                <div class="img position-relative">
                                    <img class="img--add image-responsive" src="<?php echo e(asset($aboutus->image_signature)); ?>"/>
                                    <button type="button" class="position-absolute close text-black"
                                            style="top: 10px; right: 10px;">&times;
                                    </button>
                                </div>
                                <label for="img-file" class="btn btn-primary btn-inputfile">Select the file</label>
                                <input id="img-file" type="file" name="image_signature" style="display:none;"/>
                                <label>Image Signature</label>
                            </div>
                            <div class="clear-fix"></div>
                        </div>
                    </div>
                    <div class="clear-fix"></div>
                </div>
            </div>
            <!--.about-us-view-wrap-->
            <div class="about_us-edit__link text-center">
                <input class="btn--primary padding--base btn-save" type="submit" value="Save"/><a
                        class="btn--primary padding--base btn-cancel" href=""><span>Cancel</span></a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        (function previewImage() {
            $("input[type='file']").change(function () {
                if (this.files && this.files[0]) {
                    var reader = new FileReader();

                    reader.onload = (e) => {
                        console.log($(this).prev(".img"));
                        $(this).prev(".img").find("img").attr('src', e.target.result);
                        $(this).prev(".img").find(".close").show();
                    }

                    reader.readAsDataURL(this.files[0]);
                }
            });
        })();
        $(".close").click(function () {
            $(this).prev("img").attr("src", "");
            $(this).hide();
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>