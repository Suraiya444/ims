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
           
                <form class="form" method="get" action="">
                <div class="row">
                    <div class="col-lg-2">
                        <label class="col-lg-4 col-form-label" for="fees_date">Month</label>
                        <select name="fees_month" id="fees_month" class="form-control">
                            <?php
                                for($i=1;$i<13;$i++)
                                    print("<option value='".date('m',strtotime('01.'.$i.'.2001'))."'>".date('F',strtotime('01.'.$i.'.2001'))."</option>");
                            ?>
                        </select>
                        
                    </div>
                    <div class="col-lg-2">
                        <label class="col-lg-4 col-form-label" for="fees_date">Month</label>
                        <select name="fees_year" id="fees_year" class="form-control">
                            <?php
                                for($i=2024;$i<= date('Y'); $i++)
                                    print("<option value='".$i."'>".$i."</option>");
                            ?>
                        </select>
                        
                    </div>
                    <div class="col-lg-2">
                        <label for="class_id">Class</label>
                        <select class="form-control" id="class_id" name="class_id">
                            <option value="">Select Class</option>
                            <?php 
                                $result=$mysqli->common_select('class');
                                $class=array();
                                if($result){
                                    if($result['data']){
                                        foreach($result['data'] as $d){
                                            $class[$d->id]=$d;
                            ?>
                                <option value='<?= $d->id ?>' > <?= $d->class ?></option>
                            <?php } } } ?>
                        </select>
                    </div>
                    <div class="col-lg-2">
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
                    <div class="col-lg-2">
                        <label for="group_id">Group</label>
                        <select class="form-control" id="group_id" name="group_id">
                            <option value="">Select Group</option>
                            <?php 
                                $result=$mysqli->common_select('`group`');
                                if($result){
                                    if($result['data']){
                                        foreach($result['data'] as $d){
                            ?>
                            <option value="<?= $d->id ?>" > <?= $d->group ?></option>
                            <?php } } } ?>
                        </select>
                    </div>
                    
                    <div class="col-lg-2">
                        <label for="group_id">Session</label>
                        <select class="form-control" id="session_id" name="session_id" onchange="getStudent()">
                            <option value="">Select Session </option>
                            <?php 
                                $result=$mysqli->common_select('session');
                                if($result){
                                    if($result['data']){
                                        foreach($result['data'] as $d){
                            ?>
                             <option value="<?= $d->id ?>" > <?= $d->session ?></option>
                            <?php } } } ?>
                        </select>
                    </div>
                    <div class="col-lg-2">
                        <label for="term">Student</label>
                        <select class="form-control form-select" required name="student_id" id="student_id">
                    
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary mt-4">Get Fees</button>
                    </div>
                </div>
            </form>
            <?php if(isset($_GET['student_id'])){ ?>
                
                <table class="table mb-5">
                    <thead>
                        <tr class="">
                            <th class="p-2">SL</th>
                            <th class="p-2"></th>
                            <th class="p-2">Fees</th>
                            <th class="p-2">Amount</th>
                             
                        </tr>
                    </thead>
                    <?php
                        $result=$mysqli->common_select_query("SELECT cfs.*,fees_category.name FROM `class_fees_setting` as cfs join fees_category on fees_category.id=cfs.fees_category_id
                            where cfs.class_id={$_GET['class_id']} and
                            cfs.session_id={$_GET['session_id']} and
                            cfs.deleted_at is null ");
                        if($result){
                            if($result['data']){
                                foreach($result['data'] as  $i=>$data){
                    
                    ?>
                    <tbody id="details_data">
                        <tr class="">
                            <th class="p-2"><?= ++$i ?></th>
                            <th class="p-2">
                                <input type="checkbox" onchange="checkFees(this,<?= $data->fees_category_id ?>,<?= $data->amount ?>)" name="fees_id[]" value="<?= $data->fees_category_id ?>" >
                            </th>
                            <td> 
                                <?= $data->name ?>
                                
                            </td>
                            <td id="<?= $data->fees_category_id ?>">
                                <input type="text" class="form-control" value=""  name="amount[<?= $data->fees_category_id ?>]">
                            </td>
                            <th class="p-2">Action</th>
                             
                        </tr>
                    </tbody>
                    <?php } } } ?>
                </table>
               
                <div class="row mb-5">
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-4 offset-2 mt-2 text-end pe-3">
                                <label for="" class="form-group"><h6>Total Fees</h6></label> 
                            </div>
                            <div class="col-4 mt-2">
                                <label for="" class="form-group"><h6 id="total_qty">0</h6></label>
                                <input type="hidden" name="total_qty" id="total_qty_p">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 offset-2 mt-2 text-end pe-3">
                                <label for="" class="form-group"><h6>Fees Waiver</h6></label> 
                            </div>
                            <div class="col-6 mt-2">
                                <input type="text" class="form-control form-group" id="discount" name="discount" onkeyup="check_change()">
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
                                <label for="" class="form-group"><h6>Sub Amount</h6></label> 
                            </div>
                            <div class="col-4 mt-2 pe-5 text-end">
                                <label for="" class="form-group"><h6 id="amount">0.00</h6></label>
                                <input type="hidden" name="amount" id="amount_p">
                            </div>
                        </div>   
                        
                        <div class="row">
                            <div class="col-4 offset-4 mt-2 pe-2 text-end">
                                <label for="" class="form-group"><h6>Fees Waiver</h6></label> 
                            </div>
                            <div class="col-4 mt-2 pe-5 text-end">
                                <label for="" class="form-group"><h6 id="tdiscount">0.00</h6></label>
                                <input type="hidden" name="tdiscount" id="tdiscount_p">
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-4 offset-4 mt-2 pe-2 text-end">
                                <label for="" class="form-group"><h6>Due</h6></label> 
                            </div>
                            <div class="col-4 mt-2 pe-5 text-end">
                                <label for="" class="form-group"><h6 id="due_d">0.00</h6></label>
                                <input type="hidden" name="vat" id="due_d">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-4 offset-4 mt-2 pe-2 text-end">
                                <label for="" class="form-group"><h6>Grand Amount</h6></label> 
                            </div>
                            <div class="col-4 mt-2 pe-5 text-end">
                                <label for="" class="form-group"><h6 id="total_amount">0.00</h6></label>
                                <input type="hidden" name="total_amount" id="total_amount_p">
                            </div>
                        </div> 
                    </div>
                </div>
                                
                <div class="row">
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                        
                    </div>
                </div>
            </form>
            <?php 
                if($_POST){
                    $pur['class_id']=$_POST['class_id'];
                    $pur['fees_date']=$_POST['fees_date'];
                    $pur['discount']=$_POST['discount'];
                    $pur['due']=$_POST['due'];
                    $pur['discount']=$_POST['tdiscount'];
                    $pur['amount']=$_POST['amount'];
                    $pur['total_amount']=$_POST['total_amount'];
                    $pur['created_at']=date("Y-m-d H:i:s");
                    $pur['created_by']=$_SESSION['id'];
                    $rs=$mysqli->common_create('student_date',$pur);
                    
                    if(isset($rs)){
                        if($rs['data']){
                            echo "<script>window.location='{$baseurl}student_fees_list.php'</script>";
                        }else{
                            echo $rs['error'];
                        }
                    }
                }
                
            ?>
            <?php } ?>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function checkFees(e,id,amt){
        if($(e).is(':checked'))
            $('#'+id).find('input').val(amt);
         else
             $('#'+id).find('input').val('');
    }
    getStudent()
    function getStudent(){
        let class_id=$('#class_id').val();
        let section_id=$('#section_id').val();
        let session_id=$('#session_id').val();
        let student_id= <?= $_GET['student_id'] ?? "" ?>

        $.getJSON( "<?= $baseurl ?>json_student.php", { class_id:class_id,section_id:section_id,session_id:session_id } )
        .done(function( data ) {
            let opt="<option value=''>No Data Found</option>";
            if(data){
                opt="<option value=''>Select student</option>";
                for(i=0; i < data.length; i++){
                    if(student_id==data[i].student_id)
                        opt += "<option selected value='" + data[i].student_id +"'>" + data[i].name + "</option>";
                    else
                        opt += "<option value='" + data[i].student_id +"'>" + data[i].name + "</option>";
                }
            }
            $('#student_id').html(opt);
        })
        .fail(function( jqxhr, textStatus, error ) {
            console.log( error );
        });
    }

    var fees_data=<?= json_encode($class) ?>;
    var selected_fees=[];

    //CALCUALATED SALES PRICE
    function get_cal(fees,mid){
        var total = (isNaN(parseFloat(fees_data[mid].amount))) ? 0 :parseFloat(fees_data[mid].amount); 
        var subtotal = price * qty;
            document.getElementById('price'+mid).innerHTML=subtotal

        total_calculate();
    }
    //END
    //CALCULATE PROFIT MARGIN PERCENTAGE
    function total_calculate(){
        var totalqty = 0;
        document.querySelectorAll('.qty').forEach(function(e){
            totalqty += (isNaN(parseFloat(e.value))) ? 0 :parseFloat(e.value);
        });
        
        var subtotal = 0;
        document.querySelectorAll('.subprice').forEach(function(e){
            subtotal += (isNaN(parseFloat(e.innerHTML))) ? 0 :parseFloat(e.innerHTML);
        });

        document.getElementById('total_qty').innerHTML=totalqty;
        document.getElementById('total_qty_p').value=totalqty;
        
        document.getElementById('tsubtotal').innerHTML=subtotal;
        document.getElementById('tsubtotal_p').value=subtotal;

        
        check_change();
    }
    //END

    function check_change(){
        var vat=(isNaN(parseFloat(document.getElementById('due').value))) ? 0 :parseFloat(document.getElementById('due').value);
        var discount=(isNaN(parseFloat(document.getElementById('discount').value))) ? 0 :parseFloat(document.getElementById('discount').value);
        var tsubtotal=document.getElementById('tsubtotal_p').value;
        vat= tsubtotal * (vat/100)
        document.getElementById('tdiscount').innerHTML=discount.toFixed(2)
        document.getElementById('tdiscount_p').value=discount.toFixed(2)
        document.getElementById('vat_v').innerHTML=vat.toFixed(2)
        document.getElementById('vat_p').value=vat.toFixed(2)

        cal_grandtotl()
    }

    function cal_grandtotl(){
        var tsubtotal_p=(isNaN(parseFloat(document.getElementById('tsubtotal_p').value))) ? 0 :parseFloat(document.getElementById('tsubtotal_p').value);
        var vat=(isNaN(parseFloat(document.getElementById('vat_p').value))) ? 0 :parseFloat(document.getElementById('vat_p').value);
        var discount=(isNaN(parseFloat(document.getElementById('tdiscount_p').value))) ? 0 :parseFloat(document.getElementById('tdiscount_p').value);
        var grandtotal=((tsubtotal_p-discount)+vat);
        var roundof=Math.floor(grandtotal);
            subtotal_diff=grandtotal-roundof;

        document.getElementById('tgrandtotal').innerHTML=parseFloat(roundof).toFixed(2)
        document.getElementById('tgrandtotal_p').value=parseFloat(roundof).toFixed(2)
    }

</script>
        
<?php include('include/footer.php') ?> 




 
