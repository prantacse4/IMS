<?php
  $page='';
  $page = 'product_list';
  include 'header3.php';
  $query="SELECT * FROM product";
  $read=$db->select($query);

$query2="SELECT * FROM category";
  $row2=$db->select($query2);

  $query3="SELECT * FROM company";
  $row3=$db->select($query3);


?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text2">P r o d u c t s &nbsp; A v a i l a b l e</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
<section class="content">
 <div class="container-fluid">

        <!-- main body start from here -->
 <div class="card">
    <div class="card-header">
      <h3 class="card-title card-title2">Product Information</h3>
         <a href="pro_create.php" class="btn btn-success btn-add"> <i class="fa fa-plus"></i> Add Product</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body" >
              <div style="overflow-x:auto;">




                <input class="form-control" id="myInput" type="text" placeholder="Search Category">






              <table  id="example1"  class="table table-bordered table-striped forproducttable tablepranta" >
                <thead class="theadcolor">
                <tr>
                  <th>Do</th>
                  <th>Product Name</th>
                  <th>Product Code</th>
                  <th>Quantity</th>
                  <th>MRP</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody class="tablepranta2" id="myTable" >

<?php
       if($read) {

        while($row=$read->fetch_assoc()) {
          $cat_id=$row['pro_cat'];
          $query4="SELECT * FROM category where cat_id='$cat_id'";
          $cat=$db->select($query4);
          $row34=$cat->fetch_assoc();

          $com_id=$row['pro_com'];
          $query5="SELECT * FROM company where com_id='$com_id'";
          $com=$db->select($query5);
          $row35=$com->fetch_assoc();

?>

        <tr>
          <td><a href="../sale/sale_product.php?id=<?php echo $row['pro_id']; ?>" style="color: white;"> 
                    <button class="btn btn-success">
                      Sale
                    </button>
                  </a>
                  <a href="../purchase/purchase_product.php?id=<?php echo $row['pro_id']; ?>" style="color: white;"> 
                    <button class="btn btn-info">
                      Purchase
                    </button>
                  </a>

                  <a href="print_product.php?id=<?php echo $row['pro_id']; ?>" style="color: white;"> 
                    <button class="btn btn-success">
                      <i class="fas fa-print"></i>
                    </button>
                  </a>
          </td>
          <td><?php  echo $row['pro_name'];?></td>
         <td><?php  echo $row['pro_code'];?></td>
         <td><?php  echo $row['pro_qty'];?></td>
        <td><?php  echo $row['pro_mrp'];?></td>
         <td>


           <?php $pro_id =$row['pro_id'];  ?>

      <button class="btn btn-info" data-toggle="modal" data-target="#myModal-<?php echo $pro_id;  ?>">
            <span class="far fa-eye"></span>
       </button> 









                      <!-- modal Start -->


<?php $print = ":   " ?>
<div  class="modal fade" id="myModal-<?php echo $row['pro_id']; ?>" >
 <div class="modal-dialog modal-dialog1">
  <div class="modal-content">
   <div class="modal-header">
    
   </div>
   <div class="btn-infooooo">
   <h2 class="modal-title text-center"><i class="nav-icon fas fa-luggage-cart"></i> <?php  echo $row['pro_name']; ?> </h2>
   <h4 class="modal-title text-center">Product Details</h4></div>
   <div class="modal-body modal-body1">


<hr class="hr2">







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











                  <hr class="hr2">
                  <div class="text-center">
                    <button type="button" class="btn btn-default"  data-dismiss="modal">OK</button> 
                    
                  </div>




   </div>
   <div class="modal-footer">
    
   </div>
  </div>
 </div>
</div>




<!-- 
  Modal Close -->











                <a href="pro_edit.php?id=<?php echo $row['pro_id']; ?>" style="color: white;">

                    <?php echo $edit; ?>

                  </a>










                  <a href="pro_delete.php?id=<?php  echo $row['pro_id']; ?>" style="color: white;"> <?php echo $delete; ?>
                    
                  </a>





                   
                  </td>
                </tr>
<?php  } } ?>
              </tbody>
              </table>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </section>


<?php
	include '../inc/footer.php';
?>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>