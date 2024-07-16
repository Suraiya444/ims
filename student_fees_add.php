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
           
            <form method="get" action="">
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
                            <option value="<?= $d->id ?>" <?= isset($_GET['class_id']) && $_GET['class_id']==$d->id?"selected":"" ?>><?= $d->class ?> </option>
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
                            <option value="<?= $d->id ?>" <?= isset($_GET['group_id']) && $_GET['group_id']==$d->id?"selected":"" ?>><?= $d->group ?> </option>
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
                            <option value="<?= $d->id ?>" <?= isset($_GET['session_id']) && $_GET['session_id']==$d->id?"selected":"" ?>><?= $d->session ?></option>
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
                             <option value="<?= $d->id ?>" <?= isset($_GET['student_id']) && $_GET['student_id']==$d->id?"selected":"" ?>> <?= $d->student_id ?></option>
                             <?php } } } ?>
                        </select>
                    </div>
                    <div class="col-lg-4 pt-3 px-0">
                    <label class="col-lg-4 col-form-label" for="fees_date">Fees Date</label>
                    <input type="date" id="fees_date" class="form-control" value="<?= date("Y-m-d") ?>" name="fees_date">
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
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if(isset($_GET['class_id']) && isset($_GET['session_id']) && isset($_GET['group_id']) && $_GET['student_id']){

                            $result=$mysqli->common_select_query("select cfs.*, fees_category.name
                            from class_fees_setting as cfs 
                            JOIN fees_category on fees_category.id=cfs.fees_category_id
                            where 
                            cfs.class_id={$_GET['class_id']} and
                            cfs.group_id={$_GET['group_id']} and
                            cfs.session_id={$_GET['session_id']} and
                            cfs.deleted_at is null 
                            ");
                            if($result){
                            if($result['data']){
                                foreach($result['data'] as $sid=>$data){
                            ?>
                                <tr>
                                    <td>
                                    <input type="checkbox" name="fees_category_id[]" value="<?= $data->fees_category_id ?> <?= json_encode($data) ?>" >
                                    </td>
                                    <td> 
                                        <?= $data->name ?>
                                    
                                    </td>
                                    <td>
                                    <?= $data-> amount?>
                                    </td>
                                </tr>
                    <?php }}}} ?>
                </tbody>
            </table>
            
                <div class="row mb-5">
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-4 offset-2 mt-2 text-end pe-3">
                                <label for="" class="form-group"><h6>Fees Amount</h6></label> 
                            </div>
                            <div class="col-4 mt-2">
                                <label for="" class="form-group"><h6 id="fees_amount">0</h6></label>
                                <input type="hidden" name="fees_amount" id="fees_amount_t">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 offset-2 mt-2 text-end pe-3">
                                <label for="" class="form-group"><h6>Fee Waiver</h6></label> 
                            </div>
                            <div class="col-6 mt-2">
                                <input type="text" class="form-control form-group" id="discount" name="discount" onkeyup="check_change()">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 offset-2 mt-2 text-end pe-3">
                                <label for="" class="form-group"></label> 
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-4 offset-2 mt-2 text-end pe-3">
                                <label for="" class="form-group"><h6>Due</h6></label> 
                            </div>
                            <div class="col-4 mt-2">
                                <input type="text" class="form-control form-group" id="due" onkeyup="check_change()">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-4 offset-4 mt-2 pe-2 text-end">
                                <label for="" class="form-group"><h6>Total Amount</h6></label> 
                            </div>
                            <div class="col-4 mt-2 pe-5 text-end">
                                <label for="" class="form-group"><h6 id="totalamount">0.00</h6></label>
                                <input type="hidden" name="totalamount" id="totalamount_f">
                            </div>
                        </div>   
                        
                        <div class="row">
                            <div class="col-4 offset-4 mt-2 pe-2 text-end">
                                <label for="" class="form-group"><h6>Fee Waiver</h6></label> 
                            </div>
                            <div class="col-4 mt-2 pe-5 text-end">
                                <label for="" class="form-group"><h6 id="fdiscount">0.00</h6></label>
                                <input type="hidden" name="fdiscount" id="fdiscount_a">
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-4 offset-4 mt-2 pe-2 text-end">
                                <label for="" class="form-group"><h6>Grand Amount</h6></label> 
                            </div>
                            <div class="col-4 mt-2 pe-5 text-end">
                                <label for="" class="form-group"><h6 id="tgrandtotal">0.00</h6></label>
                                <input type="hidden" name="tgrandtotal" id="tgrandtotal_f">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 offset-4 mt-2 pe-2 text-end">
                                <label for="" class="form-group"><h6>Due</h6></label> 
                            </div>
                            <div class="col-4 mt-2 pe-5 text-end">
                                <label for="" class="form-group"><h6 id="due_d">0.00</h6></label>
                                <input type="hidden" name="due" id="due_f">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 offset-4 mt-2 pe-2 text-end">
                                <label for="" class="form-group"><h6>Total</h6></label> 
                            </div>
                            <div class="col-4 mt-2 pe-5 text-end">
                                <label for="" class="form-group"><h6 id="total">0.00</h6></label>
                                <input type="hidden" name="total" id="total_a">
                            </div>
                        </div>
                        
                         
                    </div>
                </div>   
                <div class="col-lg-10 justify-content-end mt-2 pt-3 mt-sm-0 d-flex">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <?php 
        if($_POST){
            
           if(isset($fees_category_id)){
                $fee['fees_category_id']=$fees_category_id;
                $fee['name']=$_POST['name'][$fees_category_id];
                $fee['amount']=$_POST['amount'][$fees_category_id];
                $fee['discount']=$_POST['discount'][$fees_category_id];
                $fee['due']=$_POST['due'][$fees_category_id];
                $fee['fees_date']=date('Y-m-d');
                $fee['created_at']=date('Y-m-d H:i:s');
                $fee['created_by']=$_SESSION['id'];
                
                $rs=$mysqli->common_create('student_fees',$fee);
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


<script>
    var fees_amount=<?= json_encode($sid) ?>;
    var selected_fees=[];
    function return_row_with_data(item){
        let data=JSON.parse(item.value);
        if(!selected_fees.some(k => k == data.id)){
            let row=`<tr>
                        <td class="p-2">
                            ${data.brand_name}
                            <input type="hidden" name="fees_category_id[]" value="${data.id}">
                        </td>
                       
                        <td class="p-2">
                            ${data.amount}
                            <input type="hidden" class="amount" name="amount[]" value="${data.amount}">
                        </td>
                        <td class="p-2">
                            <span id="amount${data.id}" class="subprice"> </span>
                        </td>
                        <td class="p-2">Action</td>
                    </tr>`
            document.getElementById('details_data').insertRow().innerHTML=row;
            selected_medicine.push(data.id)
        }
        
    }
//CALCUALATED SALES PRICE
    function get_cal(fees_amount,cfsid){
        var price = (isNaN(parseFloat(fees_category_id[cfsid].price))) ? 0 :parseFloat(fees_category_id[cfsid].price); 
        var fees_amount = (isNaN(parseFloat(fees_amount.value))) ? 0 :parseFloat(fees_amount.value); 
    
        var subtotal = price * fees_amount;
            document.getElementById('price'+cfsid).innerHTML=subtotal

        total_calculate();
    }
    //END

</script>
