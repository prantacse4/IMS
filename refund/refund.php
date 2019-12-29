
<?php  
$page ='refund';
  include 'header3.php';
  $query="SELECT * FROM refund";
  $read=$db->select($query);

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text2">R e f u n d</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Refund</li>
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
              <h3 class="card-title card-title2">Refund Information</h3>
                <a href="refund_create.php" class="btn btn-success btn-add"><i class="fa fa-plus"></i> New Refund</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped forproducttable tablepranta">
                <thead class="theadcolor">
                <tr>
                  <th>No</th>
                  <th>Refund Type</th>
                  <th>Refund No</th>
                  <th>Product</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody class="tablepranta2">
        <?php 
          if ($read) {
            $cnt=0;
            while ($row=$read->fetch_assoc()) {
              $id=$row['pro_id'];
              $cnt++;
                $query2="SELECT * FROM product where pro_id='$id'";
                    $row2=$db->select($query2)->fetch_assoc();
       ?>

                <tr>
                  <td><?php echo $cnt; ?></td>
                  <td><?php echo $row['ref_type']; ?></td>
                  <td><?php echo $row['ref_number']; ?></td>
                  <td><?php echo $row2['pro_name']; ?></td>
                  <td>

                    <button class="btn btn-info" data-toggle="modal" data-target="#myModal-<?php echo $row['ref_id']; ?>">
                        <span class="far fa-eye"></span>
                      </button> 








                      <!-- modal Start -->


<?php $print = ":   " ?>
<div  class="modal fade" id="myModal-<?php echo $row['ref_id']; ?>" >
 <div class="modal-dialog modal-dialog1">
  <div class="modal-content">
   <div class="modal-header">
    
   </div>
   <div class="btn-infooooo">
    <h1 class="text-center"><i class="nav-icon fas fa-funnel-dollar"></i></h1>
   <h4 class="modal-title text-center">Refund Details</h4></div>
   <div class="modal-body modal-body1">



<hr class="hr2">

                  


                     <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Refund By</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['ref_by']; ?>" readonly >
                      
                    </div>
                  </div>





                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Refund Type</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['ref_type']; ?>" readonly >
                      
                    </div>
                  </div>




                  
                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Refund No</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['ref_number']; ?>" readonly >
                      
                    </div>
                  </div>



                  
                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Product</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row2['pro_name']; ?>" readonly >
                      
                    </div>
                  </div>



                  
                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Quantity</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['pro_qty']; ?>" readonly >
                      
                    </div>
                  </div>



                  
                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Price</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['pro_price']; ?>" readonly >
                      
                    </div>
                  </div>


                  
                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Total Amount</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['pro_total_amount']; ?>" readonly >
                      
                    </div>
                  </div>



        
                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Refund Date</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['ref_date']; ?>" readonly >
                      
                    </div>
                  </div>








                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Note</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['ref_note']; ?>" readonly >
                      
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


















                  <a href="refund_edit.php?id=<?php echo $row['ref_id']; ?>" style="color: white;"> 
                    <?php echo $edit; ?>
                  </a>
                  <a href="refund_delete.php?id=<?php echo $row['com_id']; ?>" style="color: white;"> 
                    <?php echo $delete; ?>
                  </a>
                   
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