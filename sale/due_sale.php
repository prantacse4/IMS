
<?php  
$page='due_sale';
  include 'header3.php';
  $query="SELECT * FROM sale where sale_due>'0' order by sale_id DESC";
  $read=$db->select($query);

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text2">S a l e</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sale</li>
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
              <h3 class="card-title card-title2">Sale Records</h3>
                <a href="sale_product.php" class="btn btn-success btn-add"><i class="fa fa-plus"></i>Add Sale</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped forproducttable tablepranta">
                <thead class="theadcolor">
                <tr>
                  <th>Sale Code</th>
                  <th>Customer</th>
                  <th>Total Price</th>
                  <th>Paid</th>
                  <th>Due</th>
                  <th>Date</th>
                  <th>View</th>
                </tr>
                </thead>
                <tbody class="tablepranta2">
        <?php 
          if ($read) {
            while ($row=$read->fetch_assoc()) {
       ?>

                <tr>
                 

                     
                 <td>
                   <a href="sale_pay.php?id=<?php echo $row['sale_id']; ?> " class="btn btn-success"><i class="fa fa-plus"></i> Pay</a>
                     <?php echo $row['sale_id']; ?>
                </td>
                     
                    
                    
                  <td><?php 
                  $id=$row['sale_cus'];
                   $query2="SELECT * FROM customer where cus_id='$id'";
                   
                    $row2=$db->select($query2)->fetch_assoc();

                    $name=$row2['cus_name'];
                    $name.="(";
                    $name.=$row2['cus_identifier'];
                    $name.=')';

                  echo $name; ?>
                    
                  </td>
                  <td><?php echo $row['sale_amount']; ?></td>
                  <td><?php echo $row['sale_payment']; ?></td>
                  <td><?php echo $row['sale_due']; ?></td>
                  <td><?php echo $row['sale_date']; ?></td>
                  <td>

                    <button class="btn btn-info" data-toggle="modal" data-target="#myModal-<?php echo $row['sale_id']; ?>">
                        <span class="far fa-eye"> </span>
                      </button> 





                      <!-- modal Start -->


<?php $print = ":   " ?>
<div  class="modal fade" id="myModal-<?php echo $row['sale_id']; ?>" >
 <div class="modal-dialog modal-dialog1">
  <div class="modal-content">
   <div class="modal-header">
    
   </div>
   <div class="btn-infooooo">

   <h4 class="modal-title text-center">Sale Details</h4></div>
   <div class="modal-body modal-body1">


<hr class="hr2">








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














                 
                   
                  </td>
                </tr>
        <?php } } ?>
              </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </section>

<?php  
  include '../inc/footer.php';
?>