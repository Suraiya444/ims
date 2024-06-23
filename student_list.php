<?php include('include/header.php') ?>
<?php include('include/sidebar.php') ?>

<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Student </h4>
                    <p class="mb-0">Student information</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="student_list.php">Student</a></li>
                    <li class="breadcrumb-item active"><a href="#">List</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Student List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Father</th>
                                        <th scope="col">Mother</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Photo</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $result=$mysqli->common_select('student');
                                    if($result){
                                        if($result['data']){
                                            $i=1;
                                            foreach($result['data'] as $data){
                                ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $data-> name ?></td>
                                    <td><?= $data-> father_name ?></td>
                                    <td><?= $data-> mother_name ?></td>
                                    <td><?= $data-> email ?></td>
                                    <td><?= $data-> contact ?></td>
                                    <td><img src="<?= $baseurl ?>assets/students/<?= $data-> photo ?>" width="80px" alt=""></td>
                                    <td>
                                        <span>
                                            <a href="<?= $baseurl ?>student_edit.php?id=<?= $data ->id ?>" class="mr-4" data-toggle="tooltip"
                                                data-placement="top" title="Edit"><i
                                                    class="fa fa-pencil color-muted"></i> </a>
                                            <a href="<?= $baseurl ?>student_delete.php?id=<?= $data ->id ?>" data-toggle="tooltip"
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
    
<?php include('include/footer.php') ?> 
