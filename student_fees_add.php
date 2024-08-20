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
           
                <form class="form" method="post" action="">
            <div class="row">
            <div class="col-lg-2">
                    <label class="col-lg-4 col-form-label" for="fees_date">Date</label>
                    <input type="date" id="fees_date" class="form-control" value="<?= date("Y-m-d") ?>" name="fees_date">
                </div>
                <div class="col-lg-2">
                        <label for="student_id">Student </label>
                        <select class="form-control" id="student_id" name="student_id">
                            <option value="">Select Student Id </option>
                            <?php 
                                $result=$mysqli->common_select('student_details');
                                if($result){
                                    if($result['data']){
                                        foreach($result['data'] as $d){
                            ?>
                             <option value="<?= $d->id ?>" > <?= $d->student_id ?> </option>
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
                        <select class="form-control" id="session_id" name="session_id">
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
                        <label for="class_id">Class</label>
                        <select class="form-control" id="class_id"onchange="return_row_with_data(this)">
                            <option value="">Select Class</option>
                            <?php 
                                $result=$mysqli->common_select('class');
                                $class=array();
                                if($result){
                                    if($result['data']){
                                        $i=1;
                                        foreach($result['data'] as $d){
                                            $class[$d->id]=$d;
                            ?>
                                <option value='<?= json_encode($d) ?>' > <?= $d->class ?></option>
                            <?php } } } ?>
                        </select>
                    </div>
                   
                </div>
            <table class="table mb-5">
                    <thead>
                        <tr class="">
                            <th class="p-2">SL</th>
                            <th class="p-2">Fees</th>
                            <th class="p-2">Amount</th>
                            <th class="p-2">Action</th>
                             
                        </tr>
                    </thead>
                    <tbody id="details_data">

                    </tbody>
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
            }
            if(isset($rs)){
                if($rs['data']){
                    echo "<script>window.location='{$baseurl}student_fees_list.php'</script>";
                }else{
                    echo $rs['error'];
                }
            }
        
    ?>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <script>
    var fees_data=<?= json_encode($class) ?>;
    var selected_fees=[];
    function return_row_with_data(fees_catagory){
        let data=JSON.parse(fees_catagory.value);
        if(!selected_fees.some(k => k == data.id)){
            let row=`<tr>
                        <td class="p-2">
                            ${data.name}
                            <input type="hidden" name="fees_id[]" value="${data.id}">
                        </td>
                        <td class="p-2">
                            ${data.amount}
                            <input type="hidden" class="amount" name="amount[]" value="${data.amount}">
                        </td>
                        <td class="p-2">
                            <span id="amount${data.id}" class="subamount"> </span>
                        </td>
                        <td class="p-2">
                            <button class="btn btn-link text-danger" type="button" onclick="removerow(this)">&times;</button>
                        </td>
                    </tr>`
            document.getElementById('details_data').insertRow().innerHTML=row;
            selected_fees.push(data.id)
        }
        
    }
    //INCREMENT ITEM
    function removerow(e){
        $(e).parents('tr').remove();
    }

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




 
