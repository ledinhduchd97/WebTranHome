<?php $__env->startSection('title','Detail'); ?>
<?php $__env->startSection('content'); ?>
<section class="detail" id="detail">
  <div class="container">
    <?php if(isset($house)): ?>
    <div class="direction"><a href="#"><span>Home</span></a><span class="angle_right"><i class="fas fa-angle-right"></i></span><a href="#"><span>Feartured Listings</span></a><span class="angle_right"><i class="fas fa-angle-right"></i></span><a class="active" href="#"><span><?php echo e($house->name); ?></span></a></div>
    <div class="detail__content">   
      <div class="row">
        
        <div class="col-md-12">
          <div class="information__house">
            <div class="row">
              <!--FE update code HTML 26/10-->
              <div class="col-12 col-md-4">
                <div class="information__house--desc">
                  <div class="information__house--desc2">
                    <h3 class="information__house--time link-base"><?php echo e($house->note); ?></h3>
                    <h1 class="information__house--title"><?php echo e($house->name); ?></h1>
                    <p class="information__house--address"><?php echo e($house->address); ?></p>
                  </div>
                </div>
              </div>
              <div class="col-8 col-md-5">
                <ul class="list-inline text-center information__house--parameter">
                  <li class="text-left">
                    <p><span class="number"><?php echo e($house->number_bedroom); ?></span></p>
                    <p class="name-room">bedrooms</p>
                  </li>
                  <li class="text-left">
                    <p><span class="number"><?php echo e($house->number_bathroom); ?></span></p>
                    <p class="name-room">bathrooms</p>
                  </li>
                  <li class="text-left">
                    <p><span class="number"><?php echo e($house->site_area); ?> </span>Sqft</p>
                    <p class="name-room">lot</p>
                  </li>
                  <li class="text-left">
                    <p><span class="number"><?php echo e($house->area_gross_floor); ?> </span>Sqft</p>
                    <p class="name-room">living room</p>
                  </li>
                </ul>
              </div>
              <div class="col-4 col-md-3 text-center">
                <div class="information__house--price">
                  <h4><?php echo e($house->unit); ?> <?php echo e($house->price); ?></h4>
                </div>
              </div>
              <!--FE end update HTML 26/10-->
            </div>
          </div>
          <div class="detail__main">
            <div class="row">
              <div class="col-md-9">
                <div class="detail__slide">     
                  <div class="detail__slides owl-carousel owl-theme">
                    <?php $__currentLoopData = $house->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if($images->level == 2): ?>
                        <div class="items" data-hash="item<?php echo e($images->id); ?>"><img src="<?php echo e(asset($images->link)); ?>" alt="anh"/></div>
                      <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                  </div>
                  <div class="detail__small-slider owl-carousel owl-theme myslider">
                    <?php $__currentLoopData = $house->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if($images->level == 2): ?>
                        <a class="small-item" href="#item<?php echo e($images->id); ?>"><img src="<?php echo e(asset($images->link)); ?>" alt=""/></a>
                      <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
                  </div>
                  <div class="detail__small-slider--nav">
                    <div class="detail__small-slider--pre nav--previous"><img src="<?php echo e(asset('frontend/images/icon-pre.png')); ?>" alt=""/></div>
                    <div class="detail__small-slider--next nav--next"><img src="<?php echo e(asset('frontend/images/icon-next.png')); ?>" alt=""/></div>
                  </div>
                </div>
                <div class="property_desc">
                  <h3 class="property_desc--title">Property Description</h3>
                  <p class="property_desc--content"><?php echo $house->description; ?></p>
                </div>
                <div class="general_table">
                  <table class="general_infor">
                    <tr>
                      <th colspan="2">General Information</th>
                      <th> </th>
                    </tr>
                    <tr>
                      <td>Broker's Name</td>
                      <td><?php echo e($house->brokerage); ?></td>
                    </tr>
                    <!--FE update html 24/10-->
                    <tr>
                      <td>Agent</td>
                      <td><?php echo e($house->agent); ?></td>
                    </tr>
                    <tr>
                      <td>License</td>
                      <td><?php echo e($house->license); ?></td>
                    </tr>
                    <tr>
                      <td>MLS Number</td>
                      <td><?php echo e($house->mls); ?></td>
                    </tr>
                    <tr>
                      <td>Country</td>
                      <td><?php echo e($house->area); ?></td>
                    </tr>
                    <!--FE end update 24/10-->
                    <tr>
                      <td>City</td>
                      <td><?php echo e($house->address); ?></td>
                    </tr>
                    <tr>
                      <td>Zip</td>
                      <td><?php echo e($house->zipcode); ?></td>
                    </tr>
                    <tr>
                      <td>Year Build</td>
                      <td><?php echo e($house->builded_year); ?></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="col-md-3">
                <div class="other_house"><a class="btn btn-base btn-primary btn-phone" href="#"><img src="<?php echo e(asset('frontend/images/icon-phone2.png')); ?>" alt=""/><span><?php echo e($house->phone); ?></span></a>
                  <div class="other_house__wrap">
                    <h3 class="other_house--title">Other Apartments</h3>
                    <?php if(isset($house_list)): ?>
                      <?php $__currentLoopData = $house_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="other_house--item">
                          <!--FE update html 24/10-->
                          <div class="other_house--content text-center">
                            <a class="other_house--item__content2" href="<?php echo e(route('get.detail',['id'=>$hl->id])); ?>">
                              <?php $__currentLoopData = $hl->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($images->level == 3): ?>
                                  <img src="<?php echo e(asset($images->link)); ?>" alt="#"/>
                                <?php endif; ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <div class="other_house--overlay-black"></div>
                              <div class="other_house--item__desc text-left">
                                <p class="name_house"><?php echo e($hl->name); ?></p>
                                <p class="price highlight2"><?php echo e($hl->unit); ?> <?php echo e($hl->price); ?></p>
                              </div>
                            </a>
                          </div>
                          <!--FE end update html 24/10-->

                          <!-- <div class="other_house--item__desc">
                            <p class="name_house"><?php echo e($hl->area); ?></p>
                            <p class="price highlight">$ <?php echo e($hl->price); ?></p>
                          </div> -->
                        </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       <?php endif; ?> 
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>