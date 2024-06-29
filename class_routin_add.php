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
                            <li class="breadcrumb-item"><a href="student_fees_add.php">Class routine</a></li>
                            <li class="breadcrumb-item active"><a href="student_fees_list.php">Class routine</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
           
            <form method="post" action="">
                 <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="class_id">Class</label>
                    <div class="col-lg-6">
                        <select class="form-control" id="class" name="class">
                            <option value="">Select Class</option>
                            <?php 
                                $result=$mysqli->common_select('class');
                                if($result){
                                    if($result['data']){
                                        $i=1;
                                        foreach($result['data'] as $d){
                            ?>
                            <option value="<?= $d->id ?>"><?= $d->class ?> </option>
                            <?php } } } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="teacher_id">Teacher</label>
                    <div class="col-lg-6">
                        <select class="form-control" id="name" name="name">
                            <option value="">Select Teacher</option>
                            <?php 
                                $result=$mysqli->common_select('teacher');
                                if($result){
                                    if($result['data']){
                                        $i=1;
                                        foreach($result['data'] as $d){
                            ?>
                            <option value="<?= $d->id ?>"><?= $d->name ?></option>
                            <?php } } } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="class_id">Section</label>
                    <div class="col-lg-6">
                        <select class="form-control" id="section" name="section">
                            <option value="">Select Class</option>
                            <?php 
                                $result=$mysqli->common_select('section');
                                if($result){
                                    if($result['data']){
                                        $i=1;
                                        foreach($result['data'] as $d){
                            ?>
                            <option value="<?= $d->id ?>"><?= $d->section ?> </option>
                            <?php } } } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="group_id">Session</label>
                    <div class="col-lg-6">
                        <select class="form-control" id="session" name="session">
                            <option value="">Select Group </option>
                            <?php 
                                $result=$mysqli->common_select('session');
                                if($result){
                                    if($result['data']){
                                        $i=1;
                                        foreach($result['data'] as $d){
                            ?>
                            <option value="<?= $d->id ?>"><?= $d->session ?></option>
                            <?php } } } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="subject_name">1st Period</label>
                    <div class="col-lg-6">
                        <select class="form-control" id="subject_name" name="subject_name">
                            <option value="">Select Subject</option>
                            <?php 
                                $result=$mysqli->common_select('subject');
                                if($result){
                                    if($result['data']){
                                        $i=1;
                                        foreach($result['data'] as $d){
                            ?>
                            <option value="<?= $d->id ?>"><?= $d->subject_name ?></option>
                            <?php } } } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="subject_name">2nd Period</label>
                    <div class="col-lg-6">
                        <select class="form-control" id="subject_name" name="subject_name">
                            <option value="">Select Subject</option>
                            <?php 
                                $result=$mysqli->common_select('subject');
                                if($result){
                                    if($result['data']){
                                        $i=1;
                                        foreach($result['data'] as $d){
                            ?>
                            <option value="<?= $d->id ?>"><?= $d->subject_name ?></option>
                            <?php } } } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="subject_name">3rd Period</label>
                    <div class="col-lg-6">
                        <select class="form-control" id="subject_name" name="subject_name">
                            <option value="">Select Subject</option>
                            <?php 
                                $result=$mysqli->common_select('subject');
                                if($result){
                                    if($result['data']){
                                        $i=1;
                                        foreach($result['data'] as $d){
                            ?>
                            <option value="<?= $d->id ?>"><?= $d->subject_name ?></option>
                            <?php } } } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="subject_name">4th Period</label>
                    <div class="col-lg-6">
                        <select class="form-control" id="subject_name" name="subject_name">
                            <option value="">Select Subject</option>
                            <?php 
                                $result=$mysqli->common_select('subject');
                                if($result){
                                    if($result['data']){
                                        $i=1;
                                        foreach($result['data'] as $d){
                            ?>
                            <option value="<?= $d->id ?>"><?= $d->subject_name ?></option>
                            <?php } } } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="subject_name">5th Period</label>
                    <div class="col-lg-6">
                        <select class="form-control" id="subject_name" name="subject_name">
                            <option value="">Select Subject</option>
                            <?php 
                                $result=$mysqli->common_select('subject');
                                if($result){
                                    if($result['data']){
                                        $i=1;
                                        foreach($result['data'] as $d){
                            ?>
                            <option value="<?= $d->id ?>"><?= $d->subject_name ?></option>
                            <?php } } } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="subject_name">6th Period</label>
                    <div class="col-lg-6">
                        <select class="form-control" id="subject_name" name="subject_name">
                            <option value="">Select Subject</option>
                            <?php 
                                $result=$mysqli->common_select('subject');
                                if($result){
                                    if($result['data']){
                                        $i=1;
                                        foreach($result['data'] as $d){
                            ?>
                            <option value="<?= $d->id ?>"><?= $d->subject_name ?></option>
                            <?php } } } ?>
                        </select>
                    </div>
                </div>


                    <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="day_name">Day </label>
                    <div class="col-lg-6 ">
                        <select class="form-control" id="day_name" name="day_name">
                            <option value="">Select Day </option>
                            <?php 
                                $result=$mysqli->common_select('Day_name');
                                if($result){
                                    if($result['data']){
                                        $i=1;
                                        foreach($result['data'] as $d){
                            ?>
                            <option value="<?= $d->id ?>"><?= $d->day_name ?></option>
                            <?php } } } ?>
                        </select>
                    </div>
                    <div class="col-lg-10 justify-content-end mt-2 pt-3 mt-sm-0 d-flex">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <?php 
        if($_POST){
            $stu['class']=$_POST['class'];
            $stu['name']=$_POST['name'];
            $stu['section']=$_POST['section'];
            $stu['session']=$_POST['session'];
            $stu['day_name']=$_POST['day_name'];
            $stu['created_at']=date('Y-m-d H:i:s');
            $stu['created_by']=1;
            $rs=$mysqli->common_create('Class_routine',$stu);
            if($rs){
                if($rs['data']){
                    $stud['subject_id']=$rs['data'];
                    $stud['subject_name']=$_POST['first_sub'];
                    $stud['subject_name']=$_POST['second_sub'];
                    $stud['subject_name']=$_POST['third_sub'];
                    $stud['subject_name']=$_POST['forth_sub'];
                    $stud['subject_name']=$_POST['fifth_sub'];
                    $stud['subject_name']=$_POST['sixth_sub'];
                    $stud['created_at']=date('Y-m-d H:i:s');
                    $stud['created_by']=1;
                    $st=$mysqli->common_create('period',$stud);
                    
                    if($st){
                        if($st['data']){
                            echo "<script>window.location='{$baseurl}class_routine_list.php'</script>";
                        }else{
                            echo $st['error'];
                        }
                    }
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
