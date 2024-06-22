<?php include('include/header.php') ; ?>
<?php include('include/sidebar.php'); ?>

<body>
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
        <?php 
            $olddata=array();
            $con['id']=$_GET['id'];
            $result=$mysqli->common_select_single('`teacher`','*',$con);
            if($result){
                if($result['data']){
                    $olddata=$result['data'];
                }
            }
       ?>
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-0">Your school dashboard</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="teacher_add.php">Teacher</a></li>
                            <li class="breadcrumb-item active"><a href="teacher_list.php">Teacher Table</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
           
            <form method="post" action="">
                 
            <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form Validation</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="#" method="post">
                                    <div class="row">
                            <div class="col-lg-6">
                                <!-- First Column -->
                                <div class="form-group">
                                    <label for="val-username">Teacher's Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-username" name="name" placeholder="Enter name.." value="<?=$olddata->name ?>">
                                </div>
                                <div class="form-group">
                                    <label for="val-email">Father's Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-email" name="father_name" placeholder="Enter name.." value="<?=$olddata->father_name?>">
                                </div>
                                <div class="form-group">
                                    <label for="val-password">Mother's Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-password" name="mother_name" placeholder="Enter name.."value="<?=$olddata->mother_name?>">
                                </div>
                                <div class="form-group">
                                    <label for="val-email">Contact<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-email" name="contact" placeholder="Enter phone no.." value="<?=$olddata->contact ?>">
                                </div>
                                <div class="form-group">
                                    <label for="val-email">Email <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-email" name="email" placeholder="Enter email.." value="<?=$olddata->email?>">
                                </div>
                                <div class="form-group">
                                    <label for="val-number">Department ID <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-number" name="department_id" placeholder="Department ID.." value="<?=$olddata->department_id?>">
                                </div>
                                <!-- Continue adding other fields -->
                            </div>
                            <div class="col-lg-6">
                                <!-- Second Column -->
                                <div class="form-group">
                                    <label for="val-currency">Qualification <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-currency" name="qualification" placeholder="last degree" value="<?=$olddata->qualification?>">
                                </div>
                                <div class="form-group">
                                    <label for="val-currency">Assigned Class <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-currency" name="assigned_class" placeholder="Assigned Class.." value="<?=$olddata->assigned_class ?>">
                                </div>
                                <div class="form-group">
                                    <label for="val-website">Joining Date <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="val-website" name="joining" placeholder="http://example.com" value="<?=$olddata->joining?>">
                                </div>
                                <div class="form-group">
                                    <label for="val-phoneus">Resign Date <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="val-phoneus" name="resign" value="<?=$olddata->resign?>">
                                </div>
                                <div class="form-group">
                                    <label for="val-digits">Designation ID <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-digits" name="designation_id" placeholder="Designation ID.." value="<?=$olddata->designation_id ?>">
                                </div>
                                <div class="form-group">
                                    <label for="val-currency">Photo <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="val-currency" name="photo" >
                                </div>
                               
                            </div>
                        </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <?php 
                if($_POST){
                    $_POST['updated_at']=date('Y-m-d H:i:s');
                    $_POST['updated_by']=1;
                    $rs=$mysqli->common_update('`teacher`',$_POST,$con);
                    if($rs){
                        if($rs['data']){
                            echo "<script>window.location='{$baseurl}teacher_list.php'</script>";
                        }else{
                            echo $rs['error'];
                        }
                    }
                }
            ?>
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
