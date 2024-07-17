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
                            <li class="breadcrumb-item"><a href="subject_add.php">Subject Add</a></li>
                            <li class="breadcrumb-item active"><a href="subject_list.php">Subject List</a></li>
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
                        <label for="class_id">Section</label>
                        <select class="form-control" id="section_id" name="section_id">
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
                    
                    <div class="col-lg-3 pt-2">
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
                    <div class="row">
                    <div class="col-lg-3">
                        <label for="class_id">Exam Term</label>
                        <select class="form-control" id="term" name="term">
                            <option value="">Select Class</option>
                            <?php 
                                $result=$mysqli->common_select('exam_term');
                                if($result){
                                    if($result['data']){
                                        foreach($result['data'] as $d){
                            ?>
                            <option value="<?= $d->id ?>"><?= $d->term ?> </option>
                            <?php } } } ?>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label for="class_id">Subject</label>
                        <select class="form-control" id="subject" name="subject_id">
                            <option value="">Select Class</option>
                            <?php 
                                $result=$mysqli->common_select('subject');
                                if($result){
                                    if($result['data']){
                                        foreach($result['data'] as $d){
                            ?>
                            <option value="<?= $d->id ?>"><?= $d->subject_name ?> </option>
                            <?php } } } ?>
                        </select>
                    </div>
                    </div> 
                    
                <div class="col-lg-10 justify-content-start mt-2 pt-3 mt-sm-0 d-flex">
                    <button type="submit" class="btn btn-primary">gert Student</button>
                </div>
            </form>
            <form action="" method="post">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Student</th>
                        <th>Marks</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                        if(isset($_GET['class_id']) && isset($_GET['section_id']) && isset($_GET['session_id'])){
                            $result=$mysqli->common_select_query("select student.name, student_details.* from student_details
                                                                join student_details on student_details.student_id=student_marks.student_details
                                                                 where student_marks.class_id={$_GET['class_id']}
                                                                  and student_marks.section_id={$_GET['section_id']}
                                                                   and student_marks.subject_id={$_GET['subject_id']}
                                                                and student_marks.deleted_at is null");

     
                        if($result){
                            if($result['data']){
                                foreach($result['data'] as $sid=>$data){
                    ?> 
                    <tr>
                        <td>
                            <input type="checkbox" name="student_id[]" value="<?= $data->student_id ?>" >
                        </td>
                        <td> 
                            <?= $data->name ?>
                        </td>
                        <td>
                            <input type="text" class="form-control" value="<?=$data->total_marks ?>" name="total_marks[<?= $data->student_id ?>]">
                        </td>
                       
                         
                    </tr>
                    <?php } } } } ?>
                    </tbody>
                </table>
            </form>


            <?php 
        if($_POST){
            
            foreach($_POST['student_id'] as $i=>$student_id){
                $att['student_id']=$student_id;
                $att['total_marks']=$_POST['total_marks'][$student_id];
                $att['created_at']=date('Y-m-d H:i:s');                
                $att['created_by']=$_SESSION['id'];                
                $rs=$mysqli->common_create('student_marks',$att);
            }
            if($rs){
                if($rs['data']){
                    echo "<script>window.location='{$baseurl}exam_term_list.php'</script>";
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
