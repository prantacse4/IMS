<?php 
$page ='company';
  include 'header3.php';
  $id = $_GET['id'];
    $query="SELECT * FROM purchase WHERE pur_id = '$id'";
  $pur=$db->select($query);
  $row=$pur->fetch_assoc();

 ?>
 <?php $print = ":   " ?>
 <?php 
                  $id=$row['pur_supplier'];
                   $query2="SELECT * FROM supplier where sup_id='$id'";
                   
                    $sup=$db->select($query2);
                     $row2=$sup->fetch_assoc();

                    $id2=$row['pur_company'];
                   $query3="SELECT * FROM company where com_id='$id2'";
                   
                    $com=$db->select($query3);
                     $row3=$com->fetch_assoc(); ?>

<div class="content-wrapper">
	

	                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Purchase Code</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['pur_code']; ?>" readonly >
                      
                    </div>
                  </div>




                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Date</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['pur_date']; ?>" readonly >
                      
                    </div>
                  </div>



                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Company</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row3['com_name']; ?>" readonly >
                      
                    </div>
                  </div>



                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Supplier</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row2['sup_name']; ?>" readonly >
                      
                    </div>
                  </div>



                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Total Price</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['pur_price']; ?>" readonly >
                      
                    </div>
                  </div>



                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Paid</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['pur_paid']; ?>" readonly >
                      
                    </div>
                  </div>



                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Due</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['pur_due']; ?>" readonly >
                      
                    </div>
                  </div>




                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Discount</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['pur_discount']; ?>" readonly >
                      
                    </div>
                  </div>
</div>


 <script type="text/javascript"> 
  window.addEventListener("load", window.print());
   window.onafterprint = function(){
   	window.location.href='purchase.php';

 }
</script>
</body>
</html>