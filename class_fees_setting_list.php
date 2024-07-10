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
                        <li class="breadcrumb-item"><a href=" ">Class Fees</a></li>
                        <li class="breadcrumb-item active"><a href=" ">Class Fees</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="row"> 
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <form method="get" action="">
                                <div class="row">
                                    <div class="col-md-4">
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
                                    <div class="col-md-4">
                                        <label class="form-label" for="group_id">Group</label>
                                        <select class="form-control form-select" required name="group_id" id="group_id">
                                            <option value="">Select Session</option>
                                            <?php 
                                                $result=$mysqli->common_select('`group`');
                                                if($result){
                                                    if($result['data']){
                                                        foreach($result['data'] as $d){
                                            ?>
                                                <option value="<?= $d->id ?>" <?= isset($_GET['group_id']) && $_GET['group_id']==$d->id?"selected":"" ?>> <?= $d->group ?></option>
                                            <?php } } } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="session_id">Session</label>
                                        <select class="form-control form-select" required name="session_id" id="session_id">
                                            <option value="">Select Section</option>
                                            <?php 
                                                $result=$mysqli->common_select('session');
                                                if($result){
                                                    if($result['data']){
                                                        foreach($result['data'] as $d){
                                            ?>
                                                <option value="<?= $d->id ?>" <?= isset($_GET['session_id']) && $_GET['session_id']==$d->id?"selected":"" ?>> <?= $d->session ?></option>
                                            <?php } } } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary mt-4">Get Fees</button>
                                    </div>
                                </div>
                            </form>
                        </div>


        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered verticle-middle table-responsive-sm">
                    <thead>
                        <tr> 
                            <th scope="col">ID</th>
                            <th scope="col">Fees</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Actions</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php 


    
            if(isset($_GET['class_id']) && $_GET['group_id'] && $_GET['session_id']){
            $result=$mysqli->common_select_query("SELECT class_fees_setting.* ,  fees_category.name ,fees_category.id,class_fees_setting.* FROM `class_fees_setting` 
            JOIN fees_category on class_fees_setting.fees_id=fees_category.id                               
             where class_fees_setting.class_id={$_GET['class_id']} 
            and class_fees_setting.group_id={$_GET['group_id']}
            and class_fees_setting.session_id={$_GET['session_id']} ");
                        if($result){
                            if($result['data']){
                                $i=1;
                                foreach($result['data'] as $data){ ?>
            <tr>
            <td><?= $i++ ?></td>
            <td><?= $data-> name?></td>
            <td><?= $data-> amount?></td>
            <td>
                <span>
                    <a href="<?= $baseurl ?>class_fees_setting_edit.php?id=<?=$data->id ?>" class="mr-4" data-toggle="tooltip"
                        data-placement="top" title="Edit"><i
                            class="fa fa-pencil color-muted"></i> </a>
                    <a href="<?= $baseurl ?>class_fees_setting_delete.php?id=<?=$data->id ?>" data-toggle="tooltip"
                        data-placement="top" title="Close"><i
                            class="fa fa-close color-danger"></i></a>
                </span>
            </td>
        </tr>
        <?php } } } } ?>

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

<?php include('include/footer.php') ?> 
