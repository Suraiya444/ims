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
                    <h4>Attendance</h4>
                    <p class="mb-0">Add Attendance</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="student_attendance_list.php">Attendance</a></li>
                    <li class="breadcrumb-item active"><a href="#">Add New</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <form method="get" action="">
            <div class="row">
                <div class="col-md-4">
                    <label class="form-label" for="designation_id">Designation</label>
                    <select class="form-control form-select" required name="designation_id" id="designation_id">
                        <option value="">Select Class</option>
                        <?php 
                            $result=$mysqli->common_select('designation');
                            if($result){
                                if($result['data']){
                                    $i=1;
                                    foreach($result['data'] as $d){
                        ?>
                            <option <?= isset($_GET['designation_id']) && $_GET['designation_id']==$d->id?"selected":"" ?> value="<?= $d->id ?>" > <?= $d->designation ?></option>
                        <?php } } } ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="department_id">Department</label>
                    <select class="form-control form-select" required name="department_id" id="department_id">
                        <option value="">Select Section</option>
                        <?php 
                            $result=$mysqli->common_select('department');
                            if($result){
                                if($result['data']){
                                    $i=1;
                                    foreach($result['data'] as $d){
                        ?>
                            <option value="<?= $d->id ?>" <?= isset($_GET['department_id']) && $_GET['department_id']==$d->id?"selected":"" ?>> <?= $d->department ?></option>
                        <?php } } } ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary mt-4">Get Teacher</button>
                </div>
            </div>
            
        </form>
        <form method="post" action="">
            <table class="table">
                <thead>
                    <tr>
                        <th>#SL</th>
                        <th>Teacher</th>
                        <th>In Time</th>
                        <th>Out Time</th>
                        <th>Note</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if(isset($_GET['designation_id']) && isset($_GET['department_id'])){
                            $result=$mysqli->common_select_query("select teacher.* from teacher
                                                                 where teacher.designation_id={$_GET['designation_id']}
                                                                  and teacher.department_id={$_GET['department_id']}
                                                                and teacher.deleted_at is null");
                        if($result){
                            if($result['data']){
                                foreach($result['data'] as $sid=>$data){
                    ?>
                    <tr>
                        <td>
                            <input type="checkbox" name="teacher_id[]" value="<?= $data->name ?>" >
                        </td>
                        <td> 
                            <?= $data->name ?>
                        </td>
                        <td>
                            <input type="time" class="form-control" value="<?= date('H:i:s') ?>" name="in_time[<?= $data->name ?>]">
                        </td>
                        <td>
                            <input type="time" name="out_time[<?= $data->name ?>]" class="form-control">
                        </td>
                        <td>
                            <select name="note[<?= $data->name ?>]" class="form-control">
                                <option value="P">P</option>
                                <option value="A">A</option>
                                <option value="L">L</option>
                            </select>
                        </td>
                    </tr>
                    <?php } } } } ?>
                </tbody>
            </table>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    <?php 
        if($_POST){
            
            foreach($_POST['teacher_id'] as $i=>$teacher_id){
                $att['teacher_id']=$teacher_id;
                $att['in_time']=$_POST['in_time'][$teacher_id];
                $att['out_time']=$_POST['out_time'][$teacher_id];
                $att['note']=$_POST['note'][$teacher_id];
                $att['att_date']=date('Y-m-d');
                $att['created_at']=date('Y-m-d H:i:s');
                $att['created_by']=$_SESSION['id'];
                
                $rs=$mysqli->common_create('teacher_attendance',$att);
            }
            if($rs){
                if($rs['data']){
                    echo "<script>window.location='{$baseurl}teacher_attendance_list.php'</script>";
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
