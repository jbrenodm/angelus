

<?php $__env->startSection('title'); ?> Dashboard <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
     <!-- start page title -->
                    <div class="row">

                <?php $__env->startComponent('common-components.breadcrumb'); ?>
                     <?php $__env->slot('title'); ?> Dashboard  <?php $__env->endSlot(); ?>                     
                     <?php $__env->slot('li1'); ?> Lexa  <?php $__env->endSlot(); ?>
                     <?php $__env->slot('li2'); ?> Dashboard  <?php $__env->endSlot(); ?>
                     <?php $__env->slot('li3'); ?> Index  <?php $__env->endSlot(); ?>
                <?php if (isset($__componentOriginalca1ecd71c079b0986f63b19e32f1541d590c0929)): ?>
<?php $component = $__componentOriginalca1ecd71c079b0986f63b19e32f1541d590c0929; ?>
<?php unset($__componentOriginalca1ecd71c079b0986f63b19e32f1541d590c0929); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

                <?php $__env->startComponent('common-components.chart'); ?>
                     <?php $__env->slot('chart1_id'); ?> header-chart-1  <?php $__env->endSlot(); ?>                     
                     <?php $__env->slot('chart1_title'); ?> Balance $ 2,317  <?php $__env->endSlot(); ?>
                     <?php $__env->slot('chart2_id'); ?> header-chart-2  <?php $__env->endSlot(); ?>                     
                     <?php $__env->slot('chart3_title'); ?> Item Sold 1230  <?php $__env->endSlot(); ?>
                <?php if (isset($__componentOriginalfa6d97ca636dc084ddb9468400bbb392b431a64f)): ?>
<?php $component = $__componentOriginalfa6d97ca636dc084ddb9468400bbb392b431a64f; ?>
<?php unset($__componentOriginalfa6d97ca636dc084ddb9468400bbb392b431a64f); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

                    
                    </div>
                    <!-- end page title -->

                    <div class="row">

                <?php $__env->startComponent('common-components.dashboard-widget'); ?>
                     <?php $__env->slot('icons'); ?> mdi mdi-cube-outline float-right  <?php $__env->endSlot(); ?>                     
                     <?php $__env->slot('title'); ?> Orders  <?php $__env->endSlot(); ?>                     
                     <?php $__env->slot('price'); ?> 1,587  <?php $__env->endSlot(); ?>                       
                     <?php $__env->slot('badgeClass'); ?> badge-info <?php $__env->endSlot(); ?>                          
                     <?php $__env->slot('per'); ?> +11%  <?php $__env->endSlot(); ?>                       
                <?php if (isset($__componentOriginalf0a6ef235b9b11a64f8c73708bf71c7feb479a8c)): ?>
<?php $component = $__componentOriginalf0a6ef235b9b11a64f8c73708bf71c7feb479a8c; ?>
<?php unset($__componentOriginalf0a6ef235b9b11a64f8c73708bf71c7feb479a8c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

                <?php $__env->startComponent('common-components.dashboard-widget'); ?>
                     <?php $__env->slot('icons'); ?> mdi mdi-buffer float-right  <?php $__env->endSlot(); ?>                     
                     <?php $__env->slot('title'); ?> Revenue  <?php $__env->endSlot(); ?>                     
                     <?php $__env->slot('price'); ?> $46,782  <?php $__env->endSlot(); ?>                       
                     <?php $__env->slot('badgeClass'); ?> badge-danger <?php $__env->endSlot(); ?>                          
                     <?php $__env->slot('per'); ?> -29%  <?php $__env->endSlot(); ?>                       
                <?php if (isset($__componentOriginalf0a6ef235b9b11a64f8c73708bf71c7feb479a8c)): ?>
<?php $component = $__componentOriginalf0a6ef235b9b11a64f8c73708bf71c7feb479a8c; ?>
<?php unset($__componentOriginalf0a6ef235b9b11a64f8c73708bf71c7feb479a8c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

                <?php $__env->startComponent('common-components.dashboard-widget'); ?>
                     <?php $__env->slot('icons'); ?> mdi mdi-tag-text-outline float-right  <?php $__env->endSlot(); ?>                     
                     <?php $__env->slot('title'); ?> Average Price  <?php $__env->endSlot(); ?>                     
                     <?php $__env->slot('price'); ?> $15.9  <?php $__env->endSlot(); ?>                       
                     <?php $__env->slot('badgeClass'); ?> badge-warning <?php $__env->endSlot(); ?>                          
                     <?php $__env->slot('per'); ?> 0%  <?php $__env->endSlot(); ?>                       
                <?php if (isset($__componentOriginalf0a6ef235b9b11a64f8c73708bf71c7feb479a8c)): ?>
<?php $component = $__componentOriginalf0a6ef235b9b11a64f8c73708bf71c7feb479a8c; ?>
<?php unset($__componentOriginalf0a6ef235b9b11a64f8c73708bf71c7feb479a8c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>


                <?php $__env->startComponent('common-components.dashboard-widget'); ?>
                     <?php $__env->slot('icons'); ?> mdi mdi-briefcase-check float-right  <?php $__env->endSlot(); ?>                     
                     <?php $__env->slot('title'); ?> Product Sold  <?php $__env->endSlot(); ?>                     
                     <?php $__env->slot('price'); ?> 1890  <?php $__env->endSlot(); ?>                       
                     <?php $__env->slot('badgeClass'); ?> badge-info <?php $__env->endSlot(); ?>                          
                     <?php $__env->slot('per'); ?> +89%  <?php $__env->endSlot(); ?>                       
                <?php if (isset($__componentOriginalf0a6ef235b9b11a64f8c73708bf71c7feb479a8c)): ?>
<?php $component = $__componentOriginalf0a6ef235b9b11a64f8c73708bf71c7feb479a8c; ?>
<?php unset($__componentOriginalf0a6ef235b9b11a64f8c73708bf71c7feb479a8c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

                    </div>
                    <!-- end row -->

                    <div class="row">

                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Monthlys Earnings</h4>

                                    <div class="row text-center mt-4">
                                        <div class="col-6">
                                            <h5 class="font-size-20">$56241</h5>
                                            <p class="text-muted">Marketplace</p>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="font-size-20">$23651</h5>
                                            <p class="text-muted">Total Income</p>
                                        </div>
                                    </div>

                                    <div id="morris-donut-example" class="morris-charts morris-charts-height" dir="ltr"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Email Sent</h4>

                                    <div class="row text-center mt-4">
                                        <div class="col-4">
                                            <h5 class="font-size-20">$ 89425</h5>
                                            <p class="text-muted">Marketplace</p>
                                        </div>
                                        <div class="col-4">
                                            <h5 class="font-size-20">$ 56210</h5>
                                            <p class="text-muted">Total Income</p>
                                        </div>
                                        <div class="col-4">
                                            <h5 class="font-size-20">$ 8974</h5>
                                            <p class="text-muted">Last Month</p>
                                        </div>
                                    </div>

                                    <div id="morris-area-example" class="morris-charts morris-charts-height" dir="ltr"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Monthly Earnings</h4>

                                    <div class="row text-center mt-4">
                                        <div class="col-6">
                                            <h5 class="font-size-20">$ 2548</h5>
                                            <p class="text-muted">Marketplace</p>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="font-size-20">$ 6985</h5>
                                            <p class="text-muted">Total Income</p>
                                        </div>
                                    </div>

                                    <div id="morris-bar-stacked" class="morris-charts morris-charts-height" dir="ltr"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end row -->

                    <div class="row">

                        <div class="col-xl-4 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">Inbox</h4>
                                    <div class="inbox-wid">
                                        <a href="#" class="text-dark">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img float-left mr-3"><img src="<?php echo e(URL::asset('/images/users/user-1.jpg')); ?>" class="avatar-sm rounded-circle" alt=""></div>
                                                <h6 class="inbox-item-author mt-0 mb-1 font-size-16">Misty</h6>
                                                <p class="inbox-item-text text-muted mb-0">Hey! there I'm available...</p>
                                                <p class="inbox-item-date text-muted">13:40 PM</p>
                                            </div>
                                        </a>
                                        <a href="#" class="text-dark">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img float-left mr-3"><img src="<?php echo e(URL::asset('/images/users/user-2.jpg')); ?>" class="avatar-sm rounded-circle" alt=""></div>
                                                <h6 class="inbox-item-author mt-0 mb-1 font-size-16">Melissa</h6>
                                                <p class="inbox-item-text text-muted mb-0">I've finished it! See you so...</p>
                                                <p class="inbox-item-date text-muted">13:34 PM</p>
                                            </div>
                                        </a>
                                        <a href="#" class="text-dark">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img float-left mr-3"><img src="<?php echo e(URL::asset('/images/users/user-3.jpg')); ?>" class="avatar-sm rounded-circle" alt=""></div>
                                                <h6 class="inbox-item-author mt-0 mb-1 font-size-16">Dwayne</h6>
                                                <p class="inbox-item-text text-muted mb-0">This theme is awesome!</p>
                                                <p class="inbox-item-date text-muted">13:17 PM</p>
                                            </div>
                                        </a>
                                        <a href="#" class="text-dark">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img float-left mr-3"><img src="<?php echo e(URL::asset('/images/users/user-4.jpg')); ?>" class="avatar-sm rounded-circle" alt=""></div>
                                                <h6 class="inbox-item-author mt-0 mb-1 font-size-16">Martin</h6>
                                                <p class="inbox-item-text text-muted mb-0">Nice to meet you</p>
                                                <p class="inbox-item-date text-muted">12:20 PM</p>
                                            </div>
                                        </a>
                                        <a href="#" class="text-dark">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img float-left mr-3"><img src="<?php echo e(URL::asset('/images/users/user-5.jpg')); ?>" class="avatar-sm rounded-circle" alt=""></div>
                                                <h6 class="inbox-item-author mt-0 mb-1 font-size-16">Vincent</h6>
                                                <p class="inbox-item-text text-muted mb-0">Hey! there I'm available...</p>
                                                <p class="inbox-item-date text-muted">11:47 AM</p>
                                            </div>
                                        </a>

                                        <a href="#" class="text-dark">
                                            <div class="inbox-item">
                                                <div class="inbox-item-img float-left mr-3"><img src="<?php echo e(URL::asset('/images/users/user-6.jpg')); ?>" class="avatar-sm rounded-circle" alt=""></div>
                                                <h6 class="inbox-item-author mt-0 mb-1 font-size-16">Robert Chappa</h6>
                                                <p class="inbox-item-text text-muted mb-0">Hey! there I'm available...</p>
                                                <p class="inbox-item-date text-muted">10:12 AM</p>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Recent Activity Feed</h4>

                                    <ol class="activity-feed mb-0">
                                        <li class="feed-item">
                                            <div class="feed-item-list">
                                                <span class="date">Jun 25</span>
                                                <span class="activity-text">Responded to need “Volunteer Activities”</span>
                                            </div>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-item-list">
                                                <span class="date">Jun 24</span>
                                                <span class="activity-text">Added an interest “Volunteer Activities”</span>
                                            </div>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-item-list">
                                                <span class="date">Jun 23</span>
                                                <span class="activity-text">Joined the group “Boardsmanship Forum”</span>
                                            </div>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-item-list">
                                                <span class="date">Jun 21</span>
                                                <span class="activity-text">Responded to need “In-Kind Opportunity”</span>
                                            </div>
                                        </li>
                                    </ol>

                                    <div class="text-center">
                                        <a href="#" class="btn btn-sm btn-primary">Load More</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-4">
                            <div class="card widget-user">
                                <div class="widget-user-desc p-4 text-center bg-primary position-relative">
                                    <i class="fas fa-quote-left h2 text-white-50"></i>
                                    <p class="text-white mb-0">The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe the same vocabulary. The languages only in their grammar.</p>
                                </div>
                                <div class="p-4">
                                    <div class="float-left mt-2 mr-3">
                                        <img src="<?php echo e(URL::asset('/images/users/user-2.jpg')); ?>" alt="" class="rounded-circle avatar-sm">
                                    </div>
                                    <h6 class="mb-1 font-size-16 mt-2">Marie Minnick</h6>
                                    <p class="text-muted mb-0">Marketing Manager</p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Yearly Sales</h4>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div>
                                                <h3>52,345</h3>
                                                <p class="text-muted">The languages only differ grammar</p>
                                                <a href="#" class="text-primary">Learn more <i class="mdi mdi-chevron-double-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 text-right">
                                            <div id="sparkline"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Latest Transactions</h4>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-vertical table-nowrap">

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="<?php echo e(URL::asset('/images/users/user-2.jpg')); ?>" alt="user-image" class="avatar-xs rounded-circle mr-2" /> Herbert C. Patton
                                                    </td>
                                                    <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm</td>
                                                    <td>
                                                        $14,584
                                                        <p class="m-0 text-muted font-14">Amount</p>
                                                    </td>
                                                    <td>
                                                        5/12/2016
                                                        <p class="m-0 text-muted font-14">Date</p>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="<?php echo e(URL::asset('/images/users/user-3.jpg')); ?>" alt="user-image" class="avatar-xs rounded-circle mr-2" /> Mathias N. Klausen
                                                    </td>
                                                    <td><i class="mdi mdi-checkbox-blank-circle text-warning"></i> Waiting payment</td>
                                                    <td>
                                                        $8,541
                                                        <p class="m-0 text-muted font-14">Amount</p>
                                                    </td>
                                                    <td>
                                                        10/11/2016
                                                        <p class="m-0 text-muted font-14">Date</p>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="<?php echo e(URL::asset('/images/users/user-4.jpg')); ?>" alt="user-image" class="avatar-xs rounded-circle mr-2" /> Nikolaj S. Henriksen
                                                    </td>
                                                    <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm</td>
                                                    <td>
                                                        $954
                                                        <p class="m-0 text-muted font-14">Amount</p>
                                                    </td>
                                                    <td>
                                                        8/11/2016
                                                        <p class="m-0 text-muted font-14">Date</p>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="<?php echo e(URL::asset('/images/users/user-5.jpg')); ?>" alt="user-image" class="avatar-xs rounded-circle mr-2" /> Lasse C. Overgaard
                                                    </td>
                                                    <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i> Payment expired</td>
                                                    <td>
                                                        $44,584
                                                        <p class="m-0 text-muted font-14">Amount</p>
                                                    </td>
                                                    <td>
                                                        7/11/2016
                                                        <p class="m-0 text-muted font-14">Date</p>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <img src="<?php echo e(URL::asset('/images/users/user-6.jpg')); ?>" alt="user-image" class="avatar-xs rounded-circle mr-2" /> Kasper S. Jessen
                                                    </td>
                                                    <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm</td>
                                                    <td>
                                                        $8,844
                                                        <p class="m-0 text-muted font-14">Amount</p>
                                                    </td>
                                                    <td>
                                                        1/11/2016
                                                        <p class="m-0 text-muted font-14">Date</p>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Latest Orders</h4>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-vertical table-nowrap mb-1">

                                            <tbody>
                                                <tr>
                                                    <td>#12354781</td>
                                                    <td>
                                                        <img src="<?php echo e(URL::asset('/images/users/user-1.jpg')); ?>" alt="user-image" class="avatar-xs mr-2 rounded-circle" /> Riverston Glass Chair
                                                    </td>
                                                    <td><span class="badge badge-pill badge-success">Delivered</span></td>
                                                    <td>
                                                        $185
                                                    </td>
                                                    <td>
                                                        5/12/2016
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>#52140300</td>
                                                    <td>
                                                        <img src="<?php echo e(URL::asset('/images/users/user-2.jpg')); ?>" alt="user-image" class="avatar-xs mr-2 rounded-circle" /> Shine Company Catalina
                                                    </td>
                                                    <td><span class="badge badge-pill badge-success">Delivered</span></td>
                                                    <td>
                                                        $1,024
                                                    </td>
                                                    <td>
                                                        5/12/2016
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>#96254137</td>
                                                    <td>
                                                        <img src="<?php echo e(URL::asset('/images/users/user-3.jpg')); ?>" alt="user-image" class="avatar-xs mr-2 rounded-circle" /> Trex Outdoor Furniture Cape
                                                    </td>
                                                    <td><span class="badge badge-pill badge-danger">Cancel</span></td>
                                                    <td>
                                                        $657
                                                    </td>
                                                    <td>
                                                        5/12/2016
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>#12365474</td>
                                                    <td>
                                                        <img src="<?php echo e(URL::asset('/images/users/user-4.jpg')); ?>" alt="user-image" class="avatar-xs mr-2 rounded-circle" /> Oasis Bathroom Teak Corner
                                                    </td>
                                                    <td><span class="badge badge-pill badge-warning">Shipped</span></td>
                                                    <td>
                                                        $8451
                                                    </td>
                                                    <td>
                                                        5/12/2016
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>#85214796</td>
                                                    <td>
                                                        <img src="<?php echo e(URL::asset('/images/users/user-5.jpg')); ?>" alt="user-image" class="avatar-xs mr-2 rounded-circle" /> BeoPlay Speaker
                                                    </td>
                                                    <td><span class="badge badge-pill badge-success">Delivered</span></td>
                                                    <td>
                                                        $584
                                                    </td>
                                                    <td>
                                                        5/12/2016
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#12354781</td>
                                                    <td>
                                                        <img src="<?php echo e(URL::asset('/images/users/user-6.jpg')); ?>" alt="user-image" class="avatar-xs mr-2 rounded-circle" /> Riverston Glass Chair
                                                    </td>
                                                    <td><span class="badge badge-pill badge-success">Delivered</span></td>
                                                    <td>
                                                        $185
                                                    </td>
                                                    <td>
                                                        5/12/2016
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light">Edit</button>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footerScript'); ?>
<!--Morris Chart-->
            <script src="<?php echo e(URL::asset('/libs/morris.js/morris.js.min.js')); ?>"></script>
            <script src="<?php echo e(URL::asset('/libs/raphael/raphael.min.js')); ?>"></script>
            <script src="<?php echo e(URL::asset('/js/pages/dashboard.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/LexaLaravel/resources/views/dashboard/index.blade.php ENDPATH**/ ?>