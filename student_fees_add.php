<?php include('include/header.php'); ?>
<?php include('include/sidebar.php'); ?>

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
                            <li class="breadcrumb-item"><a href="student_fees_add.php">Student fees</a></li>
                            <li class="breadcrumb-item active"><a href="student_fees_list.php">Student Fees List</a></li>
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
                    <div class="col-lg-3">
                        <label for="student_id">Student </label>
                        <select class="form-control" id="student_id" name="student_id">
                            <option value="">Select Student Id </option>
                            <?php 
                                $result=$mysqli->common_select('student_details');
                                if($result){
                                    if($result['data']){
                                        foreach($result['data'] as $d){
                            ?>
                            <option value="<?= $d->student_id ?>"><?= $d->student_id ?></option>
                            <?php } } } ?>
                        </select>
                    </div>
                    <div class="col-lg-4 pt-3 px-0">
                    <label class="col-lg-4 col-form-label" for="fees_date">Fees Date</label>
                    <input type="date" name="fees_date" id="fees_date" >
                </div>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary mt-4">Get Fees Catagories</button>
                </div>
            </form>   
            <form action="" method="post">   
            <table class="table">
                <thead>
                    <tr>
                        <th>#SL</th>
                        <th>Fees</th>
                        <th>Amount</th>
                        <th>Discount</th>
                        <th>Due</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if(isset($_GET['class_id']) && isset($_GET['session_id']) && isset($_GET['group_id'])){
                            $result=$mysqli->common_select_query("select student.name, student_details.* from student
                                                                join student_details on student_details.student_id=student.id
                                                                 where student_details.class_id={$_GET['class_id']}
                                                                  and student_details.section_id={$_GET['section_id']}
                                                                and student_details.deleted_at is null");
                        if($result){
                            if($result['data']){
                                foreach($result['data'] as $sid=>$data){
                    ?>
                    <tr>
                        <td>
                            <input type="checkbox" name="" value="<?= $data->fees_id ?>" >
                        </td>
                        <td> 
                            <?= $data->name ?>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="amount[<?= $data->student_id ?>]">
                        </td>
                        <td>
                            <input type="text" name="<?= $data->student_id ?>" class="form-control">
                        </td>
                       
                    </tr>
                    <?php } } } } ?>
                </tbody>
            </table>
            
                    
                <div class="col-lg-10 justify-content-end mt-2 pt-3 mt-sm-0 d-flex">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
    <?php 
        if($_POST){
           
            if(isset($rs['data'])){
            foreach($_POST['student_id'] as $i=>$student_id){
                $fee['student_id']=$student_id;
                $fee['fees_id']=$_POST['fees_id'][$student_id];
                $fee['amount']=$_POST['amount'][$student_id];
                $fee['discount']=$_POST['discount'][$student_id];
                $fee['due']=$_POST['due'][$student_id];
                $fee['created_at']=date('Y-m-d H:i:s');
                $fee['created_by']=$_SESSION['id'];
                
                $rs=$mysqli->common_create('student_fees',$fee);
            }
        }
            if(isset($rs)){
                if($rs['data']){
                    echo "<script>window.location='{$baseurl}student_fees_list.php'</script>";
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

 
<?php include('include/footer.php') ?> 
