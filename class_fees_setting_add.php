<?php include('include/header.php'); ?>
<?php include('include/sidebar.php'); ?>

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 f-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <f class="mb-0">Your school dashboard</f>
                        </div>
                    </div>
                    <div class="col-sm-6 f-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="class_routine_add.php">Class routine</a></li>
                            <li class="breadcrumb-item active"><a href="class_routine_list.php">Class routine</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
           
            <form method="post" action="">
                 <div class="row">
                    <div class="col-lg-3">
                        <label for="class_id">Class</label>
                        <select class="form-control" id="class_id" name="class_id">
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
                    <div class="col-lg-3">
                        <label for="group_id">Group</label>
                        <select class="form-control" id="group_id" name="group_id">
                            <option value="">Select Group</option>
                            <?php 
                                $result=$mysqli->common_select('`group`');
                                if($result){
                                    if($result['data']){
                                        foreach($result['data'] as $d){
                            ?>
                            <option value="<?= $d->id ?>"><?= $d->group ?> </option>
                            <?php } } } ?>
                        </select>
                    </div>
                    
                    <div class="col-lg-3">
                        <label for="group_id">Session</label>
                        <select class="form-control" id="session_id" name="session_id">
                            <option value="">Select Session </option>
                            <?php 
                                $result=$mysqli->common_select('session');
                                if($result){
                                    if($result['data']){
                                        foreach($result['data'] as $d){
                            ?>
                            <option value="<?= $d->id ?>"><?= $d->session ?></option>
                            <?php } } } ?>
                        </select>
                    </div>
                   
                </div>
            <?php 
                $result=$mysqli->common_select_query('select fees_category.* from fees_category
                                                        where fees_category.deleted_at is null');
                if($result){
                    if($result['data']){
                       
                        foreach($result['data'] as $d){  ?>
           
                <div class="row mt-2">
                    <div>
                        <input type="checkbox" name="fees_id[<?= $d->id ?>]" value="<?= $d->id ?>" >
                    </div>
    
                    <div class="col-lg-3">
                        <?= $d->name ?> 
                        <input type="hidden" name="fees_id[<?= $d->name ?>]" value="<?= $d->name ?>">
                    </div>
                    
                    <div class="col-lg-3">
                        <label for="">Amount</label>
                        <input type="text" name="amount"  class="form-control">
                        </td>
                    </div>
                </div>
            <?php } } } ?>
                

            
                    
                <div class="col-lg-10 justify-content-end mt-2 pt-3 mt-sm-0 d-flex">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <?php 
        if($_POST){
            if(isset($_POST['fees_id'])){
                foreach($_POST['fees_id'] as $f=>$fees_id){
                    $stu['class_id']=$_POST['class_id'];
                    $stu['group_id']=$_POST['group_id'];
                    $stu['session_id']=$_POST['session_id'];
                    $stu['fees_id']=$f;
                    $stu['created_at']=date('Y-m-d H:i:s');
                    $stu['created_by']=$_SESSION['id'];
                    $rs=$mysqli->common_create('class_fees_setting',$stu);
                }
                if($rs){
                    if($rs['data']){
                        echo "<script>window.location='{$baseurl}class_fees_setting_list.php'</script>";
                    }else{
                        echo $rs['error'];
                    }
                }
            }
        }
    ?>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

 
<?php include('include/footer.php') ?> 
