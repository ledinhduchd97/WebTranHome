<?php $__env->startSection('title','Customer'); ?>
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
    <div class="danhsachtk content-wrap content-wrap2" id="danhsachtk">
        <div class="tk-top tk-top-wrap">
            <div class="tk-top__top">
                <div class="tk-top__top--left fleft col-50">
                    <h2 class="tk-top__title">Customer in Recycle</h2><a class="add-new"
                                                                          href="<?php echo e(route('admin.customers.create')); ?>">Add new</a>
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
                            <li><a href="<?php echo e(route('admin.customers.index')); ?>"><span class="link-text">View </span><span
                                            class="link-number">(<?php echo e($view); ?>)</span></a></li>
                            <li><a href="<?php echo e(route('admin.customers.recycle')); ?>"><span class="link-text">Recycle Bin </span><span
                                            class="link-number">(<?php echo e($recycle); ?>)</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="tk-top__content--row">
                    <div class="tk-top__options">
                        <form action="" method="get">
                            <div class="col2 fleft">
                                <input class="tk-position padding--base border--base" type="text" name="keyword"
                                       placeholder="Search keywords" value="<?php echo e(request()->keyword); ?>">
                            </div>
                            <div class="col2 fleft">
                                <select class="tk-status padding--base border--base" id="tk-status" name="status">
                                    <option value="">--- Status ---</option>
                                    <option value="0">Hidden</option>
                                    <option value="1">Display</option>
                                    <option value="2">Not Actived</option>
                                </select>
                            </div>
                            <div class="col-25 fleft">
                                <div class="tk-top__from-date date--wrap"><span>Start day</span>
                                    <div class="fromDate date--wrap2 myDate"><i class="far fa-calendar-alt"></i>
                                        <input class="myDatePicker padding--base border--base" type="text"
                                               name="date_from" style="max-width: 95%;" autocomplete="off" data-date-format="mm-dd-yyyy" value="<?php echo e(request()->date_from); ?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-25 fleft">
                                <div class="tk-top__to-date date--wrap"><span>Finish day</span>
                                    <div class="toDate date--wrap2 myDate"><i class="far fa-calendar-alt"></i>
                                        <input class="myDatePicker padding--base border--base" type="text"
                                               name="date_to" style="max-width: 95%;" autocomplete="off" data-date-format="mm-dd-yyyy" value="<?php echo e(request()->date_to); ?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col1 fleft">
                                <button class="btn-filter btn--base padding--base border--base" type="submit">Filter
                                </button>
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
        <div class="danhsachtk__table table--base">
            <table>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Create Date</th>
                    <th>Client Type</th>
                    <th>Status</th>
                    <th>Note</th>
                    <th>Options</th>
                </tr>
                <?php if(isset($customers)): ?>
                    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <p><?php echo e((($customers->currentPage()-1)* $customers->perPage()) + ($key+1)); ?></p>
                            </td>
                            <td>
                                <p class="name"><?php echo e($customer->first_name); ?></p>
                            </td>
                            <td>
                                <p class="name"><?php echo e($customer->last_name); ?></p>
                            </td>
                            <td>
                                <p>
                                    <?php echo e($customer->email); ?>

                                </p>
                            </td>
                            <td>
                                <p><?php echo e($customer->phone); ?></p>
                            </td>
                            <td>
                                <p><?php echo e($customer->address); ?></p>
                            </td>
                            <td>
                                <p><?php echo e($customer->created_at); ?></p>
                            </td>
                            <td>
                                <p><?php echo e($customer->type); ?></p>
                            </td>
                            <td>
                                <p><?php echo e($customer->status); ?></p>
                            </td>
                            <td>
                                <div class="table-icon"><i class="far fa-sticky-note note_popup" data-toggle="modal" data-target="#exampleNote" id-customer="<?php echo e($customer->id); ?>"></i>
                                </div>
                            </td>
                            <td>
                                <div class="table-icon">
                                    <a class="restore" data-url="<?php echo e(route('admin.customers.recycle_restore', ['id' => $customer->id])); ?>" data-toggle="modal" data-target="#restoreModal">
                                        <i class="fas fa-undo"></i>
                                    </a>
                                    <a class="recycle" data-url="<?php echo e(route('admin.customers.recycle_delete_permanently', ['id' => $customer->id])); ?>" data-toggle="modal" data-target="#deleteModal">
                                        <i class="fas fa-trash-alt" title="Recycle"></i>
                                    </a>
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
                            class="from-row"><?php echo e((($customers->currentPage() - 1 ) * $customers->perPage())+1); ?> </span><span>to </span><span
                            class="to-row"><?php echo e((($customers->currentPage() - 1 ) * $customers->perPage())+sizeof($customers)); ?> </span><span>of </span><span
                            class="title-row"><?php echo e($customers->total()); ?> </span><span>entries</span></p>
            </div>
            <div class="fleft col-30" style="float: right;">
                <div class="paging text-right">
                    <?php echo e($customers->links('vendor.pagination.bootstrap-4', ['paginator' => $customers])); ?>

                </div>
            </div>
            <div class="clear-fix"></div>
        </div>
    </div>
    <!-- Modal recycle -->
    <div class="modal" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure about this?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3>Permanently Delete</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form id="delete-form" action="" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field("DELETE")); ?>

                        <button type="submit" class="btn btn-primary">Sure</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal restore -->
    <div class="modal" id="restoreModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure about this?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3>Restore Record</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form id="restore-form" action="" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <?php echo e(method_field("PUT")); ?>

                        <button type="submit" class="btn btn-primary">Sure</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal note -->
    <div class="modal" id="exampleNote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content popup--content">
                <div class="modal-header popup--header">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Are you sure about this?</h5> -->
                    <button type="button" class="close btn--close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body popup--body text-center data-note">
                    <h3>List Note</h3>
                    <table>
                        <thead>
                            <tr>
                                <th class="col-md-2">
                                    ID
                                </th>
                                <th class="col-md-8">
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
                var link_recycle = $(this).data('url');
                var modalID = $(this).data('target');
                $("#delete-form").attr('action', link_recycle);
            });

            $('.restore').click(function (event) {
                var link_recycle = $(this).data('url');
                var modalID = $(this).data('target');
                $("#restore-form").attr('action', link_recycle);
            });
            $('.note_popup').click(function(event) {
                // alert('1111');
                var data = $(this).attr('id-customer');
                $.ajax({
                    url: '<?php echo e(route('admin.customers.getnotecustomer')); ?>',
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
                                <tr>
                                    <td class="col-md-2">
                                        `+data[index].id+`
                                    </td>
                                    <td class="col-md-8">
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