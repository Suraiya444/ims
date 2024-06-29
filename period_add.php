<?php include('include/header.php'); ?>
<?php include('include/sidebar.php'); ?>


<body>
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
                            <li class="breadcrumb-item"><a href=" ">Period</a></li>
                            <li class="breadcrumb-item active"><a href=" ">Period</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
           
            <form method="post" action="">
                <div class="row">
                    <div class="col-3">
                        <label>Class</label>
                        <select class="form-control" id="class" name="class_id">
                            <option value="">Select Class</option>
                            <?php 
                                $result=$mysqli->common_select('class');
                                if($result){
                                    if($result['data']){
                                        foreach($result['data'] as $d){
                            ?>
                            <option value="<?= $d->id ?>"><?= $d->class ?> </option>
                            <?php } } } ?>
                        </select>
                    </div>
                    <div class="col-3">
                        <label>Section</label>
                        <select class="form-control" id="section" name="section_id">
                            <option value="">Select Section</option>
                            <?php 
                                $result=$mysqli->common_select('section');
                                if($result){
                                    if($result['data']){
                                        foreach($result['data'] as $d){
                            ?>
                            <option value="<?= $d->id ?>"><?= $d->section ?> </option>
                            <?php } } } ?>
                        </select>
                    </div>
                    <div class="col-3">
                        <?php $period=array("1st","2nd","3rd","4th","5th","6th","7th","8th","9th","Tiffin"); ?>
                        <label class="form-label" for="department">Period</label>
                        <select name="period_name" class="form-control" id="">
                            <?php foreach($period as $p){ ?>
                                <option value="<?= $p ?>"><?= $p ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-3">
                        <label class="form-label" for="period_time">Time</label>
                        <input type="text" name="period_time" class="form-control" id="period_time" placeholder="00:00 - 00:00"/>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
            <?php 
                if($_POST){
                    $_POST['created_at']=date('Y-m-d H:i:s');
                    $_POST['created_by']=1;
                    $rs=$mysqli->common_create('period',$_POST);
                    if($rs){
                        if($rs['data']){
                            echo "<script>window.location='{$baseurl}period_list.php'</script>";
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
