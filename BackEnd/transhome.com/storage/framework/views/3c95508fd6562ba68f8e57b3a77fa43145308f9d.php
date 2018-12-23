<?php $__env->startSection('title','Setup'); ?>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>
    <style>
        a {
            text-decoration: none !important;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content-wrap">
        <div class="container">
        <div class="set-up__top">
            <?php if(session()->has('success')): ?>
                <br/>
                <div class="alert alert-success text-center">
                    <?php echo e(session('success')); ?>

                </div>
                <?php echo e(session()->forget('success')); ?>

            <?php endif; ?>
            <div class="set-up__top--title">
                <h2>Set up</h2>
            </div>
            <form class="form-horizontal" action="<?php echo e(route('admin.setups.update', ['setup' => $setup->id])); ?>" method="POST" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <?php echo e(method_field("PUT")); ?>

                <h3 class="text-center font-weight-bold set-up__content--title">
                    Set up overview
                </h3>
                <div class="form-group form--base set-up-form--item">
                    <label class="control-label col-sm-2 text" for="website_name">Website name:</label>    
                    <div class="col-sm-10 content">
                        <input type="text" class="form-control border--base padding--base" id="website_name" value="<?php echo e($setup->website_name); ?>" name="website_name" required maxlength="25">
                        <?php if($errors): ?>
                            <p class="text-danger"><?php echo e($errors->first('website_name')); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="clear-fix"></div>
                </div>
                <div class="form-group form--base set-up-form--item">
                    <label class="control-label col-sm-2 text" for="description">Description:</label>
                    <div class="col-sm-10 content">
                        <textarea class="form-control" name="description" required maxlength="250"><?php echo e($setup->description); ?></textarea>
                        <?php if($errors): ?>
                            <p class="text-danger"><?php echo e($errors->first('description')); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="clear-fix"></div>
                </div>
                <div class="form-group form--base set-up-form--item">
                    <label class="control-label col-sm-2 text" for="image">Logo header:</label>
                    <div class="col-sm-10 content">
                        <div class="position-relative images">
                            <img src="<?php echo e(asset($setup->logo_header)); ?>" alt="">
                            <button type="button" class="position-absolute close text-black" style="top: 10px; right: 10px;">&times;</button>
                        </div>
                        <input type="file" id="image" name="logo_header">
                        <!-- <input type="hidden" name="logo_header"> -->
                        <?php if($errors): ?>
                            <p class="text-danger"><?php echo e($errors->first('logo_header')); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="clear-fix"></div>
                </div>
                <div class="form-group form--base set-up-form--item">
                    <label class="control-label col-sm-2 text" for="image">Logo footer:</label>
                    <div class="col-sm-10 content">
                        <div class="position-relative images">
                            <img src="<?php echo e(asset($setup->logo_footer)); ?>" alt="">
                            <button type="button" class="position-absolute close text-black" style="top: 10px; right: 10px;">&times;</button>
                        </div>
                        <input type="file" id="image" name="logo_footer">
                        <!-- <input type="hidden" name="logo_footer"> -->
                        <?php if($errors): ?>
                            <p class="text-danger"><?php echo e($errors->first('logo_footer')); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="clear-fix"></div>
                </div>
                <div class="form-group form--base set-up-form--item">
                    <label class="control-label col-sm-2 text" for="image">Thanks you:</label>
                    <div class="col-sm-10 content">
                        <textarea name="thank_you" id="news" cols="30" rows="10"><?php echo e($setup->thank_you); ?></textarea>
                        <?php if($errors): ?>
                            <p class="text-danger"><?php echo e($errors->first('thank_you')); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="clear-fix"></div>
                </div>
                <div class="form-group form--base set-up-form--item">
                    <label class="control-label col-sm-2 text" for="image">Description sell my home:</label>
                    <div class="col-sm-10 content">
                        <textarea name="sell_my_home"  cols="30" rows="10"><?php echo e($setup->sell_my_home); ?></textarea>
                        <?php if($errors): ?>
                            <p class="text-danger"><?php echo e($errors->first('sell_my_home')); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="clear-fix"></div>
                </div>
                <h3 class="text-center font-weight-bold set-up__content--title">
                    Information company
                </h3>
                <div class="form-group form--base set-up-form--item">
                    <label for="phone" class="control-label col-sm-2 text">Phone number</label>
                    <div class="col-sm-10 content">
                        <input type="text" class="form-control border--base padding--base" value="<?php echo e($setup->phone); ?>" id="phone" name="phone">
                        <?php if($errors): ?>
                            <p class="text-danger"><?php echo e($errors->first('phone')); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="clear-fix"></div>
                </div>
                <div class="form-group form--base set-up-form--item">
                    <label for="email" class="control-label col-sm-2 text">Email</label>
                    <div class="col-sm-10 content">
                        <input type="text" class="form-control border--base padding--base" value="<?php echo e($setup->email); ?>" id="email" name="email" required maxlength="100">
                        <?php if($errors): ?>
                            <p class="text-danger"><?php echo e($errors->first('email')); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="clear-fix"></div>
                </div>
                <div class="form-group form--base set-up-form--item">
                    <label for="address" class="control-label col-sm-2 text">Address</label>
                    <div class="col-sm-10 content">
                        <input type="text" class="form-control border--base padding--base" value="<?php echo e($setup->address); ?>" id="address" name="address" required maxlength="250">
                        <?php if($errors): ?>
                            <p class="text-danger"><?php echo e($errors->first('address')); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="clear-fix"></div>
                </div>
                <div class="form-group form--base set-up-form--item">
                    <label for="address" class="control-label col-sm-2 text">License</label>
                    <div class="col-sm-10 content">
                        <input type="text" class="form-control border--base padding--base" value="<?php echo e($setup->lisence); ?>" id="lisence" name="lisence" required maxlength="250">
                        <?php if($errors): ?>
                            <p class="text-danger"><?php echo e($errors->first('lisence')); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="clear-fix"></div>
                </div>

                <h3 class="text-center font-weight-bold set-up__content--title">
                    Link
                </h3>
                <div class="form-group form--base set-up-form--item">
                    <label for="facebook" class="control-label col-sm-2 text">Facebook</label>
                    <div class="col-sm-10 content">
                        <input type="text" class="form-control border--base padding--base" value="<?php echo e($setup->facebook); ?>" id="facebook" name="facebook" required>
                        <?php if($errors): ?>
                            <p class="text-danger"><?php echo e($errors->first('facebook')); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="clear-fix"></div>
                </div>
                <div class="form-group form--base set-up-form--item">
                    <label for="instagram" class="control-label col-sm-2 text">Instagram</label>
                    <div class="col-sm-10 content">
                        <input type="text" class="form-control border--base padding--base" value="<?php echo e($setup->instagram); ?>" id="instagram" name="instagram" required>
                        <?php if($errors): ?>
                            <p class="text-danger"><?php echo e($errors->first('instagram')); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="clear-fix"></div>
                </div>
                <div class="form-group form--base set-up-form--item">
                    <label for="twitter" class="control-label col-sm-2 text">Twitter</label>
                    <div class="col-sm-10 content">
                        <input type="text" class="form-control border--base padding--base" value="<?php echo e($setup->twitter); ?>" id="twitter" name="twitter" required>
                        <?php if($errors): ?>
                            <p class="text-danger"><?php echo e($errors->first('twitter')); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="clear-fix"></div>
                </div>
                <div class="form-group form--base set-up-form--item text-center">
                    <button class="btn btn-primary border--base padding--base" type="submit">Save</button>
                    <button class="btn btn-secondary border--base padding--base">Cancel</button>
                </div>
            </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
    ClassicEditor
            .create( document.querySelector( '#news' ) )
            .catch( error => {
                console.error( error );
            } );
</script>
<script>
    ClassicEditor
            .create( document.querySelector( '#sell' ) )
            .catch( error => {
                console.error( error );
            } );
</script>
<script>
    
    (function previewImage(){
        $("input[type='file']").change(function(){

            if (this.files && this.files[0]) {
                var reader = new FileReader();

                reader.onload = (e) => {
                    $(this).prev(".images").find("img").attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);
            }
        });
    })();

    $(".close").click(function(){
        $(this).parents(".images").find("img").attr('src', "");
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>