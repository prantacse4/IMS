<?php  
$page ='sale';
  include 'header3.php';
  $id = $_GET['id'];
  $query="SELECT * FROM sale WHERE sale_id = '$id'";
  $sal=$db->select($query);
  $row=$sal->fetch_assoc();
  $print = ":   " ;
  $id2=$row['sale_cus'];
  $query2="SELECT * FROM customer where cus_id='$id2'";
  $cus=$db->select($query2);
  $row2=$cus->fetch_assoc();
  $name=$row2['cus_name'];
  $name.="(";
  $name.=$row2['cus_identifier'];
  $name.=')';
 ?>

<div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Sale Code</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['sale_id']; ?>" readonly >
                      
                    </div>
                  </div>





                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Date</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['sale_date']; ?>" readonly >
                      
                    </div>
                  </div>






                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Customer Name</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $name; ?>" readonly >
                      
                    </div>
                  </div>





                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Sale Amount</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['sale_amount']; ?>" readonly >
                      
                    </div>
                  </div>




                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Payment</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['sale_payment']; ?>" readonly >
                      
                    </div>
                  </div>





                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Discount</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['sale_discount']; ?>" readonly >
                      
                    </div>
                  </div>





                   

                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Due</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['sale_due']; ?>" readonly >
                      
                    </div>
                  </div>






                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Type</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['sale_type']; ?>" readonly >
                      
                    </div>
                  </div>

</body>
</html>
 <script type="text/javascript"> 
  window.addEventListener("load", window.print());
   window.onafterprint = function(){
   	window.location.href='sale.php';

 }
</script>