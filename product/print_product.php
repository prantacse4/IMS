<?php
  $page='';
  $page = 'product_list';
  include 'header3.php';


  $id = $_GET['id'];
$query499 = "SELECT * FROM product WHERE pro_id = '$id'";
$pro=$db->select($query499);
$row=$pro->fetch_assoc();



		  $cat_id=$row['pro_cat'];
          $query4="SELECT * FROM category where cat_id='$cat_id'";
          $cat=$db->select($query4);
          $row34=$cat->fetch_assoc();

          $com_id=$row['pro_com'];
          $query5="SELECT * FROM company where com_id='$com_id'";
          $com=$db->select($query5);
          $row35=$com->fetch_assoc();


?>
<?php $print = ":   " ?>
<div class="content-wrapper">
	<div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Product Name</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['pro_name']; ?>" readonly >
                      
                    </div>
                  </div>




                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Quantity</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['pro_qty']; ?>" readonly >
                      
                    </div>
                  </div>



                    <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Category</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row34['cat_name']; ?>" readonly >
                      
                    </div>
                  </div>




            <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Company</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row35['com_name']; ?>" readonly >
                      
                    </div>
                  </div>



                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Purchase Price</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['pro_pprice']; ?>" readonly >
                      
                    </div>
                  </div>




                    
                    <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Wholesale Price</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['pro_wholesale']; ?>" readonly >
                      
                    </div>
                  </div>




                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> MRP Price</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['pro_mrp']; ?>" readonly >
                      
                    </div>
                  </div>



                <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Location</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['pro_location']; ?>" readonly >
                      
                    </div>
                  </div>




                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Description</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['pro_notes']; ?>" readonly >
                      
                    </div>
                  </div>
	

</div>
</body>
</html>
<script type="text/javascript"> 
  window.addEventListener("load", window.print());
   window.onafterprint = function(){
   	window.location.href='product.php';

 }
</script>
<?php

	//echo "<script>window.location.href='product.php'</script>"; 
?>