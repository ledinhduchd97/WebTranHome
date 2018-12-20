<?php $__env->startSection('title','Recycle'); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
	  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"/>
    <link rel="stylesheet" href="<?php echo e(asset('frontend-admin/libs/datepicker/jquery-ui.theme.css')); ?>"/>
    <link rel="stylesheet" href="<?php echo e(asset('frontend-admin/libs/datepicker/jquery-ui.min.css')); ?>"/>
    <style>
      a {text-decoration: none !important;}
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
      <div class="danhsachtk content-wrap content-wrap2" id="danhsachtk">
        <div class="tk-top tk-top-wrap">
          <div class="tk-top__top">
            <div class="tk-top__top--left fleft col-50">
              <h2 class="tk-top__title">Account in Recycle Bin</h2><a class="add-new" href="<?php echo e(route('admin.user.get_create')); ?>">Add new</a>
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
                  <li><a href="<?php echo e(route('admin.user.index')); ?>"><span class="link-text">View </span><span class="link-number">(<?php echo e($view); ?>)</span></a></li>
                  <li><a href="<?php echo e(route('admin.user.recycle')); ?>"><span class="link-text">Recycle Bin </span><span class="link-number">(<?php echo e($recycle); ?>)</span></a></li>
                </ul>
              </div>
            </div>
            <div class="tk-top__content--row">
              <div class="tk-top__options">
                <form action="" method="get">
                  <div class="col2 fleft">
                    <select class="tk-position padding--base border--base" id="tk-position" name="position" >
                      <option value="">--- Position ---</option>
                      <option value="2" <?php echo e(request()->position==2 ? "selected" : ""); ?>>Member</option>
                      <option value="1" <?php echo e(request()->position==1? "selected" : ""); ?>>Admin</option>
                    </select>
                  </div>
                  <div class="col2 fleft">
                    <select class="tk-status padding--base border--base" id="tk-status" name="status" >
                      <option value="">--- Status ---</option>
                      <option value="0" <?php echo e(request()->status===0 ? "selected" : ""); ?>>Hidden</option>
                      <option value="1" <?php echo e(request()->status===1 ? "selected" : ""); ?>>Display</option>
                      <option value="2" <?php echo e(request()->status===2 ? "selected" : ""); ?>>Not activated</option>
                    </select>
                  </div>
                  <div class="col-25 fleft">
                    <div class="tk-top__from-date date--wrap"><span>Start day</span>
                      <div class="fromDate date--wrap2 myDate"><i class="far fa-calendar-alt"></i>
                        <input class="padding--date border--base" id="startDay" type="date" name="start_day" style="max-width: 95%;" value="<?php echo e(request()->start_day); ?>"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-25 fleft">
                    <div class="tk-top__to-date date--wrap"><span>Finish day</span>
                      <div class="toDate date--wrap2 myDate"><i class="far fa-calendar-alt"></i>
                        <input class="padding--date border--base" id="endDay" type="date"  name="end_day" style="max-width: 95%;" value="<?php echo e(request()->end_day); ?>"/>
                      </div>
                    </div>
                  </div>
                  <div class="col1 fleft text-right">
                    <button class="btn-filter btn--base padding--base border--base" type="submit" >Filter</button>
                  </div>
                  <div class="clear-fix"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--.tk-top-wrap-->
        <?php if(session()->has('success')): ?>
        <div class="alert alert-success" style="text-align: center; margin-top: 5px;">
                <?php echo e(session()->has('success') ? session('success') : ""); ?>

                <?php echo e(session()->forget('success')); ?>

        </div>
        <?php endif; ?>
        <div class="danhsachtk__table table--base">
          <table>
            <tr>
              <th>ID</th>
              <th>Username</th>
              <th>Name</th>
              <th>Phone</th>
              <th>Date time</th>
              <th>Email</th>
              <th>Position</th>
              <th>Status</th>
              <th>Options</th>
            </tr>
            <tr>
            <?php if(isset($users)): ?>
            	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	              <td>
	                <p><?php echo e((($users->currentPage()-1)* $users->perPage()) + ($key+1)); ?></p>
	              </td>
	              <td>
	                <p class="user"><?php echo e($user->username); ?></p>
	              </td>
	              <td>
	                <p class="name"><?php echo e($user->fullname); ?></p>
	              </td>
	              <td>
	                <p><?php echo e($user->phone); ?></p>
	              </td>
	              <td>
	                <p><?php echo e($user->birthday); ?></p>
	              </td>
	              <td>
	                <p><?php echo e($user->email); ?></p>
	              </td>
	              <td>
	                <p>
	                	<?php if($user->position == 1): ?>
        							Admin
        						<?php else: ?>
        							Member
        						<?php endif; ?>
	                </p>
	              </td>
	              <td>
	                <p>
	                	<?php if($user->status == 0): ?>
          							Hidden
          						<?php elseif($user->status == 1): ?>
          							Display
                      <?php else: ?>
                        Not activated
          						<?php endif; ?>
          					</p>
	              </td>
	              <td> 
	                <div class="table-icon"><a class="undo" href="#" undo="<?php echo e(route('admin.user.get_undo',['id'=>$user->id])); ?>" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-undo" title="Undo"></i></a>
                  <a class="delete" delete="<?php echo e(route('admin.user.delete',['id'=>$user->id])); ?>" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-trash-alt" title="Recycle"></i></a></div>
	              </td>
	            </tr>
            	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
          </table>
        </div>
        <div class="danhsachtk__bottom table-bot">

          <div class="fleft col-50">
            <p class="text"><span>Showing </span><span class="from-row"><?php echo e($users->count() ? (($users->currentPage() - 1 ) * $users->perPage())+1 : 0); ?> </span><span>to </span><span class="to-row"><?php echo e((($users->currentPage() - 1 ) * $users->perPage())+sizeof($users)); ?> </span><span>of </span><span class="title-row"><?php echo e($users->total()); ?> </span><span>entries</span></p>
          </div>
          <div class="fleft col-30" style="float: right;">
            <div class="paging text-right">
              <?php echo e($users->links('vendor.pagination.bootstrap-4', ['paginator' => $users])); ?>

            </div>
          </div>
          <div class="clear-fix"></div>
        </div>
      </div>
      <!--  -->
<!-- Modal Undo -->
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure about this?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h3>Recover account</h3>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <a id="form-undo" href=""><button id="btn-undo" type="submit" class="btn btn-primary">Sure</button></a>
        </div>
      </div>
  </div>
</div>
<!-- Modal Delete -->
<div class="modal" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form id="form-delete" action="" method="post">
        <?php echo e(method_field('DELETE')); ?>

        <?php echo e(csrf_field()); ?>

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure about this?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h3>Delete account</h3>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button id="btn-delete" type="submit" class="btn btn-primary">Sure</button>
        </div>
      </form>
      </div>
  </div>
</div>      
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
  <script src="<?php echo e(asset('bootstrap/js/bootstrap.min.js')); ?>"></script>
  <script>
    $(document).ready(function() {
        $(".undo").click(function(event) {
          var link_undo = $(this).attr('undo');
          console.log(link_undo);
          $("#form-undo").attr('href',link_undo);
        });
        $(".delete").click(function(event) {
          var link_delete = $(this).attr('delete');
          console.log(link_delete);
          $("#form-delete").attr('action',link_delete);
        });
    });

    $("input[name='start_day']").change(function (e) { 
            e.preventDefault();
            $("input[name='end_day']").attr('min', $(this).val());
        });

        $("input[name='end_day']").change(function (e) { 
            e.preventDefault();
            $("input[name='start_day']").attr('max', $(this).val());
        });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>