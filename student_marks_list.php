<?php include('include/header.php') ?>
<?php include('include/sidebar.php')?>

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
                        <li class="breadcrumb-item"><a href="student_marks_add.php">Student Marks</a></li>
                        <li class="breadcrumb-item active"><a href="student_marks_list.php">Student Marks List</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="row"> 
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Student Marks</h4>
                        </div>
                        <div class="row"> 
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <form method="get" action="">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label" for="class_id">class</label>
                                        <select class="form-control form-select" required name="class_id" id="class_id">
                                            <option value="">Select Class</option>
                                            <?php 
                                                $result=$mysqli->common_select('class');
                                                if($result){
                                                    if($result['data']){
                                                        foreach($result['data'] as $d){
                                            ?>
                                                <option <?= isset($_GET['class_id']) && $_GET['class_id']==$d->id?"selected":"" ?> value="<?= $d->id ?>" > <?= $d->class ?></option>
                                            <?php } } } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label" for="section_id">Section</label>
                                        <select class="form-control form-select" required name="section_id" id="section_id">
                                            <option value="">Select Section</option>
                                            <?php 
                                                $result=$mysqli->common_select('section');
                                                if($result){
                                                    if($result['data']){
                                                        foreach($result['data'] as $d){
                                            ?>
                                                <option value="<?= $d->id ?>" <?= isset($_GET['section_id']) && $_GET['section_id']==$d->id?"selected":"" ?>> <?= $d->section ?></option>
                                            <?php } } } ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                    <label for="term">Exam Term</label>
                                     <select class="form-control" id="term" name="term">
                                        <option value="">Select Term</option>
                                        <?php 
                                         $result=$mysqli->common_select('exam_term');
                                         if($result){
                                            if($result['data']){
                                                    foreach($result['data'] as $d){
                                        ?>
                                          <option value="<?= $d->id ?>" <?= isset($_GET['id']) && $_GET['id']==$d->id?"selected":"" ?>><?= $d->term ?> </option>
                                        <?php } } } ?>
                                    </select>
                                  </div>
                                  <div class="col-lg-3">
                                    <label for="term">Student</label>
                                     <select class="form-control" id="term" name="term">
                                        <option value="">Select student</option>
                                        <?php 
                                         $result=$mysqli->common_select('student_details');
                                         if($result){
                                            if($result['data']){
                                                    foreach($result['data'] as $d){
                                        ?>
                                        <option value="<?= $d->id ?>" <?= isset($_GET['id']) && $_GET['id']==$d->id?"selected":"" ?>><?= $d->student_id ?> </option>
                                        <?php } } } ?>
                                        </select>
                                        </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary mt-4">Get Routine</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        
    <?php 
    $class_subject=$subject=$marks=[];
    $result=$mysqli->common_select('class_subject');
    if($result){
        if($result['data']){
            foreach($result['data'] as $c){
                $class_subject[$c->subject_id]=$c;
            }

            
        }
    }
    $result=$mysqli->common_select('subject');
    if($result){
        if($result['data']){
            foreach($result['data'] as $s){
                $subject[$s->id]=$s;
            }
        }
    }
    if(isset($_GET['class_id']) && $_GET['student_id']){
        $result=$mysqli->common_select_query("select subject.*, class_subject.* 
                                    from class_subject
                                    join subject on subject.id=class_subject.subject_id
                                    where 
                                    class_subject.class_id={$_GET['class_id']}
                                    and class_subject.deleted_at is null");
        if($result){
            if($result['data']){
                foreach($result['data'] as $d){
                    $marks[$d->subject_name][$d->sub][$d->obj][$d->prac][$d->pass_marks]=$d;
                }
            }
        }
    }
?>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered verticle-middle table-responsive-sm">
                                    <thead>
                                        <tr> 
                                                <th scope="col">Subject </th>  
                                                <th scope="col">Subjective</th>
                                                <th scope="col">Objective</th>
                                                <th scope="col">Practical</th>
                                                <th scope="col">Pass Marks</th>
                                                <th scope="col">Total Marks</th>
                                                <th scope="col">GP</th>
                                                <th scope="col">GPL</th>
                                                <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($subject){
                                                foreach($subject as $s){
                                        ?>
                                            <tr>
                                                <th><?= $s->subject_name?></th>
                                                
                                                <?php if($class_subject){
                                                        foreach($class_subject as $c){
                                                ?>
                                                    <td>
                                                        <?php 
                                                            if(isset($marks[$c->subject_id][$s->id])){
                                                                echo $marks[$s->id][$c->subjec_id]->sub;} ?></td>
                                                                <td>
                                                                <?php 
                                                               if(isset($marks[$c->subject_id][$s->id])){
                                                                echo $marks[$s->id][$c->subjec_id]->obj;} ?>

                                                                </td>
                                                                <?php 
                                                               if(isset($marks[$c->subject_id][$s->id])){
                                                                echo $marks[$s->id][$c->subjec_id]->prac;} ?>

                                                                </td>
                                                                <?php 
                                                               if(isset($marks[$c->subject_id][$s->id])){
                                                                echo $marks[$s->id][$c->subjec_id]->pass_marks;} ?>

                                                                </td>
                                                            
                                                        
                                                    
                                                <?php } } ?>
                                            </tr>
                                        <?php } } ?>
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

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?= $baseurl ?>assets/vendor/global/global.min.js"></script>
    <script src="<?= $baseurl ?>assets/js/quixnav-init.js"></script>
    <script src="<?= $baseurl ?>assets/js/custom.min.js"></script>
    
</body>
<?php include('include/footer.php') ?> 
