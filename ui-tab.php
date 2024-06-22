<?php include('include/header.php');?>
<?php include('include/sidebar.php'); ?>
<body>
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">Tab</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Tab</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Default Tab</h4>
                            </div>
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <div class="default-tab">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#department">Department</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#profile">Designation</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#contact">Qualification</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#message">Assigned Class</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel">
                                            <div class="pt-4">
                                            <form method="post" action="">
                                             <div class="mb-3">
                                                 <label class="form-label" for="depatment">Department</label>
                                                 <input type="text" name="depatment" class="form-control" id="depatment" placeholder="depatment.." />
                                            </div>
                
                                             <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                            <?php 
                                                      if($_POST){
                                                      $_POST['created_at']=date('Y-m-d H:i:s');
                                                        $_POST['created_by']=1;
                                                        $rs=$mysqli->common_create('department',$_POST);
                                                         if($rs){
                                                        if($rs['data']){
                                                        echo "<script>window.location='{$baseurl}department_list.php'</script>";
                                                        }else{
                                                        echo $rs['error'];
                                                            }
                                                                }
                                                             }
                                                                 ?>
                                                
                                            </div>
                                        </div>
        </div>
          

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
