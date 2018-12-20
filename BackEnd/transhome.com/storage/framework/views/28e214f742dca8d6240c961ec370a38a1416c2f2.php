<?php $__env->startSection('title','Partner'); ?>
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
	<div class="partner-list content-wrap content-wrap2" id="partner-list">
        <div class="partner-list__top">
          <div class="tk-top tk-top-wrap">
            <div class="tk-top__top">
              <div class="tk-top__top--left fleft col-50">
                <h2 class="tk-top__title">Partner</h2><a class="add-new" href="<?php echo e(route('admin.partner.create')); ?>">Add new</a>
              </div>
              <div class="tk-top__top--right fleft col-50">
                <div class="text-right"><span class="dashboard">Dashboard</span></div>
              </div>
              <div class="clear-fix"></div>
            </div>
            <div class="tk-top__content">
              <div class="tk-top__content--row">
                <div class="tk-top__links">
                  <ul class="list-inline">
                    <li><a href="<?php echo e(route('admin.partner.index')); ?>"><span class="link-text">View </span><span class="link-number">(<?php echo e(($view)); ?>)</span></a></li>
                    <li><a href="<?php echo e(route('admin.partner.recycle')); ?>"><span class="link-text">Recycle Bin </span><span class="link-number">(<?php echo e(($recycle)); ?>)</span></a></li>
                  </ul>
                </div>
              </div>
              <div class="tk-top__content--row">
                <div class="tk-top__options">
                  <form action="">
                    <div class="col2 fleft">
                      <input class="customer_search padding--base border--base" id="customer_search" type="search" name="keyword" placeholder="keyword"/>
                    </div>
                    <div class="col2 fleft">
                      <!-- <select class="customer-status padding--base border--base" id="customer-status" name="status">
                        <option value="default">--- Status ---</option>
                        <option value="0">Waiting for approvel</option>
                        <option value="1">Active</option>
                      </select> -->
                      <input class="customer_search padding--base border--base" id="customer_search" type="search" name="status" placeholder="status"/>
                    </div>
                    <div class="col-25 fleft">
                      <div class="tk-top__from-date date--wrap"><span>Start day</span>
                        <div class="fromDate date--wrap2 myDate"><i class="far fa-calendar-alt"></i>
                          <input name="start_day" class="padding--base border--base padding--date" id="startDay" type="date"/>
                        </div>
                      </div>
                    </div>
                    <div class="col-25 fleft">
                      <div class="tk-top__to-date date--wrap"><span>Finish day</span>
                        <div class="toDate date--wrap2 myDate"><i class="far fa-calendar-alt"></i>
                          <input name="end_day" class="padding--base border--base padding--date" id="endDay" type="date"/>
                        </div>
                      </div>
                    </div>
                    <div class="col1 fleft">
                      <button class="btn-filter btn--base padding--base border--base" type="submit">Filter</button>
                    </div>
                    <div class="clear-fix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <?php if(session()->has('success')): ?>
          <br/>
          <div class="alert alert-success text-center">
              <?php echo e(session('success')); ?>

          </div>
              <?php echo e(session()->forget('success')); ?>

          <?php endif; ?>
          <!--.tk-top-wrap-->
        </div>
        <div class="partner-list__main">
          <div class="fright total">
            <p>Total : <span><?php echo e($view); ?> entries</span></p>
          </div>
          <div class="table--base partner-list__table">
            <table>
              <tr>
                <th>ID</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Date of foundation</th>
                <th>Partner type</th>
                <th>Status</th>
                <th>Note</th>
                <th>Options</th>
              </tr>
              <?php if(isset($partners)): ?>
              <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td>
                    <p><?php echo e((($partners->currentPage()-1)* $partners->perPage()) + ($key+1)); ?></p>
                  </td>
                  <td>
                    <p class="name"><?php echo e($partner->fullname); ?></p>
                  </td>
                  <td>
                    <p><?php echo e($partner->email); ?></p>
                  </td>
                  <td>
                    <p><?php echo e($partner->phone); ?></p>
                  </td>
                  <td>
                    <?php if(isset($partner->address)): ?>
                    <p class="address"><?php echo e($partner->address); ?></p>
                    <?php else: ?>
                    <p> - <p>
                    <?php endif; ?>
                  </td>
                  <td>
                    <p><?php echo e($partner->created_at); ?></p>
                  </td>
                  <td>
                    <?php if(isset($partner->partner_type)): ?>
                    <p><?php echo e($partner->partner_type); ?></p>
                    <?php else: ?>
                    <p> - <p>
                    <?php endif; ?>
                  </td>
                  <td>
                    <?php if(isset($partner->status)): ?>
                    <p><?php echo e($partner->status); ?></p>
                    <?php else: ?>
                    <p> - <p>
                    <?php endif; ?>
                  </td>
                  <td>
                    <div class="table-icon"><i class="far fa-sticky-note note_popup" data-toggle="modal" data-target="#exampleNote" id-customer="<?php echo e($partner->id); ?>"></i>
                                </div>
                  </td>
                  <td>
                  <div class="table-icon">
                      <a href="<?php echo e(route('admin.partner.show', ['id' => $partner->id])); ?>"><i class="far fa-eye"></i></a>
                      <a class="recycle" href="#"
                         idrecycle="<?php echo e(route('admin.partner.delete.recycle', ['id' => $partner->id])); ?>"
                         data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash-alt"></i></a>
                    </div>
                  </td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
            </table>
          </div>
          <div class="danhsachtk__bottom table-bot">
            <div class="fleft col-50">
                <p class="text"><span>Showing </span><span
                            class="from-row"><?php echo e((($partners->currentPage() - 1 ) * $partners->perPage())+1); ?> </span><span>to </span><span
                            class="to-row"><?php echo e((($partners->currentPage() - 1 ) * $partners->perPage())+sizeof($partners)); ?> </span><span>of </span><span
                            class="title-row"><?php echo e($partners->total()); ?> </span><span>entries</span></p>
            </div>
            <div class="fleft col-30" style="float: right;">
                <div class="paging text-right">
                    <?php echo e($partners->links('vendor.pagination.bootstrap-4', ['paginator' => $partners])); ?>

                </div>
            </div>
            <div class="clear-fix"></div>
        </div>
        </div>
      </div>
      <!-- Modal recycle -->
    <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content popup--content">
                <div class="modal-header popup--header">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Are you sure about this?</h5> -->
                    <button type="button" class="close btn--close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body popup--body text-center">
                    <h3>Are you sure to delete this row?</h3>
                </div>
                <div class="modal-footer popup--footer text-center">
                    <button type="button" class="btn btn-secondary btn--no" data-dismiss="modal">No</button>
                    <a id="form-recycle" href="">
                        <button type="submit" class="btn btn-primary btn--yes">Yes</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- modal note -->
    <div class="modal exampleNote" id="exampleNote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content popup--content">
                <div class="modal-header popup--header text-center">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Are you sure about this?</h5> -->
                    <h3 class="modal-title">List Note</h3>
                    <button type="button" class="close btn--close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body popup--body text-center data-note">
                    <!-- <h3>List Note</h3> -->
                    <table>
                        <thead>
                            <tr class="row">
                                <th class="col-md-3">
                                    ID
                                </th>
                                <th class="col-md-9">
                                    Content
                                </th>
                            </tr>
                        </thead>
                        <tbody class="content-note">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.recycle').click(function (event) {
                var link_recycle = $(this).attr('idrecycle');
                console.log(link_recycle);
                $("#form-recycle").attr('href', link_recycle);
            });
            $('.note_popup').click(function(event) {
                // alert('1111');
                var data = $(this).attr('id-customer');
                $.ajax({
                    url: '<?php echo e(route('admin.partner.getnotepartner')); ?>',
                    type: 'GET',
                    dataType: 'json',
                    data: {id : data },
                    success: function (data){
                        if(typeof data != "object"){
                            data = JSON.parse(data);
                        }
                        $(".content-note").html("");
                        console.log(data);
                        $.each(data, function(index, val) {
                            console.log(data[index].id);
                            $(".content-note").append(`
                                <tr class="row">
                                    <td class="col-md-3">
                                        `+data[index].id+`
                                    </td>
                                    <td class="col-md-9">
                                        `+data[index].content+`
                                    </td>
                                </tr> 
                            `)
                        });  
                    }
                })
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>