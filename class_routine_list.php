<?php include('include/header.php') ?>
<?php include('include/sidebar.php')?>

<!--**********************************
    Content body start
***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome back!</h4>
                        <p class="mb-0">Your school dashboard</p>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href=" ">Class Period</a></li>
                        <li class="breadcrumb-item active"><a href=" ">Class Period</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="row"> 
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Class Period</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered verticle-middle table-responsive-sm">
                                    <thead>
                                        <tr> 
                                            <th scope="col">Day</th>
                                            <th scope="col">1st Period</th>
                                            <th scope="col">2nd Period</th>
                                            <th scope="col">3rd Period</th>
                                            <th scope="col">4th Period</th>
                                            <th scope="col">5th Period</th>
                                            <th scope="col">6th Period</th>
                                            <th scope="col">6th Period</th>
                                            <th scope="col">7th Period</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php 
                                            $result=$mysqli->common_select_query( );
                                            if($result){
                                                if($result['data']){
                                                    $i=1;
                                                    foreach($result['data'] as $data){
                                        ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $data->day_time ?></td>
                                            <td><?= $data->first_sub ?></td>
                                            <td><?= $data->second_sub ?></td>
                                            <td><?= $data->third_sub?></td>
                                            <td><?= $data->forth_sub ?></td>
                                            <td><?= $data->fifth_sub ?></td>
                                            <td><?= $data->sixth_sub ?></td>
                                            <td>
                                                <span>
                                                    <a href="<?= $baseurl ?> class_routine_edit.php?id=<?= $data ->id ?>" class="mr-4" data-toggle="tooltip"
                                                        data-placement="top" title="Edit"><i
                                                            class="fa fa-pencil color-muted"></i> </a>
                                                    <a href="<?= $baseurl ?> class_routine_delete.php?id=<?= $data ->subject_name ?>" data-toggle="tooltip"
                                                        data-placement="top" title="Close"><i
                                                            class="fa fa-close color-danger"></i></a>
                                                </span>
                                            </td>
                                        </tr>
                                        <?php } } } ?>
                                    </tbody> 
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--**********************************
    Content body end
***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?= $baseurl ?>assets/vendor/global/global.min.js"></script>
    <script src="<?= $baseurl ?>assets/js/quixnav-init.js"></script>
    <script src="<?= $baseurl ?>assets/js/custom.min.js"></script>
    
</body>
<?php include('include/footer.php') ?> 
