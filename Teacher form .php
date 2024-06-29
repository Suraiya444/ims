<?php include('include/header.php'); ?>
<?php include('include/sidebar.php'); ?>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="./images/logo.png" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

         

        

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-1">Validation</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Validation</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
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
                                    <input type="text" class="form-control" id="val-username" name="name" placeholder="Enter name..">
                                </div>
                                <div class="form-group">
                                    <label for="val-email">Father's Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-email" name="father_name" placeholder="Enter name..">
                                </div>
                                <div class="form-group">
                                    <label for="val-password">Mother's Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-password" name="mother_name" placeholder="Enter name..">
                                </div>
                                <div class="form-group">
                                    <label for="val-email">Contact<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-email" name="contact" placeholder="Enter phone no..">
                                </div>
                                <div class="form-group">
                                    <label for="val-email">Email <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-email" name="email" placeholder="Enter email..">
                                </div>
                                <div class="form-group">
                                <label class="form-label" for="class_id">Department</label>
                                        <select class="form-control form-select" required name="department_id" id="class_id">
                                        <option value="">Select Department</option>
                                        <?php 
                                            $result=$mysqli->common_select('department');
                                            if($result){
                                                if($result['data']){
                                                    $i=1;
                                                    foreach($result['data'] as $d){
                                        ?>
                                            <option value="<?= $d->id ?>" > <?= $d->department ?></option>
                                        <?php } } } ?>
                                    </select>
                                </div>
                                <!-- Continue adding other fields -->
                            </div>
                            <div class="col-lg-6">
                                <!-- Second Column -->
                                <div class="form-group">
                                    <label for="val-currency">Qualification <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-currency" name="qualification" placeholder="last degree">
                                </div>
                                <div class="form-group">
                                    <label for="val-currency">Assigned Class <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="val-currency" name="assigned_class" placeholder="Assigned Class..">
                                </div>
                                <div class="form-group">
                                    <label for="val-website">Joining Date <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="val-website" name="joining" placeholder="http://example.com">
                                </div>
                                <div class="form-group">
                                    <label for="val-phoneus">Resign Date <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="val-phoneus" name="resign" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="val-digits">Designation  <span class="text-danger">*</span></label>
                                    <select class="form-control form-select" required name="designation_id" id="class_id">
                                        <option value="">Select Department</option>
                                        <?php 
                                            $result=$mysqli->common_select('designation');
                                            if($result){
                                                if($result['data']){
                                                    $i=1;
                                                    foreach($result['data'] as $d){
                                        ?>
                                            <option value="<?= $d->id ?>" > <?= $d->designation ?></option>
                                        <?php } } } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="val-currency">Photo <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="val-currency" name="photo" >
                                </div>
                               
                            </div>
                        </div>
                          <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label"><a
                                                            href="javascript:void()">Terms &amp; Conditions</a> <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-8">
                                                        <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                                            <input type="checkbox" class="css-control-input mr-2"
                                                                id="val-terms" name="val-terms" value="1">
                                                            <span class="css-control-indicator"></span>All given informations are Validate
                                                            </label>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-8 ml-2">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <?php 
                if($_POST){
                    $_POST['created_at']=date('Y-m-d H:i:s');
                    $_POST['created_by']=1;
                    $rs=$mysqli->common_create('`teacher`',$_POST);
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
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>
    



    <!-- Jquery Validation -->
    <script src="./vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Form validate init -->
    <script src="./js/plugins-init/jquery.validate-init.js"></script>

</body>
<?php include('include/footer.php') ?> 
 