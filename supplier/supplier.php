
<?php  
$page = 'supplier';
  include 'header3.php';
  $query="SELECT * FROM supplier";
  $read=$db->select($query);




?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text2">S u p p l i e r</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Supplier</li>
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
              <h3 class="card-title card-title2">Suplier Information</h3>
                <a href="supplier_create.php" class="btn btn-success btn-add"> <i class="fa fa-plus"></i> Add Supplier</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped forproducttable tablepranta">
                <thead class="theadcolor">
                <tr>
                  <th>Supplier Name</th>
                  <th>Contact No</th>
                  <th>Address</th>
                  <th>Action</th>
                </tr>
                </thead class="tablepranta2">
                <tbody>
        <?php 
          if ($read) {
            while ($row=$read->fetch_assoc()) {
              $com_id=$row['sup_com'];
              $query3 = "SELECT * FROM company WHERE com_id = '$com_id'";
              $res3 = $db->select($query3);
                $row2 = $res3->fetch_assoc();
       ?>

                <tr>
                  <td><?php echo $row['sup_name']; ?></td>
                  <td><?php echo $row['sup_contact']; ?></td>
                  <td><?php echo $row['sup_address']; ?></td>
                  <td>
                    
                      <button class="btn btn-info" data-toggle="modal" data-target="#myModal-<?php echo $row['sup_id']; ?>">
                        <span class="far fa-eye"></span>
                      </button> 






                      <!-- modal Start -->


<?php $print = ":   " ?>
<div  class="modal fade" id="myModal-<?php echo $row['sup_id']; ?>" >
 <div class="modal-dialog modal-dialog1">
  <div class="modal-content">
   <div class="modal-header">
    
   </div>
   <div class="btn-infooooo">
   <h2 class="modal-title text-center"><i class="nav-icon fas fa-shapes"></i> <?php  echo $row['sup_name']; ?> </h2>
   <h4 class="modal-title text-center">Supplier Details</h4></div>
   <div class="modal-body modal-body1">


<hr class="hr2">





                <div class="form-group row">
                    <label  class="col-sm-4 col-form-label"><i class="fas fa-angle-double-right"></i> Supplier Name</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['sup_name']; ?>" readonly >
                      
                    </div>
                  </div>


                  <div class="form-group row">
                    <label  class="col-sm-4 col-form-label"><i class="fas fa-angle-double-right"></i> Contact No.</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['sup_contact']; ?>" readonly >
                      
                    </div>
                  </div>


                  <div class="form-group row">
                    <label  class="col-sm-4 col-form-label"><i class="fas fa-angle-double-right"></i> Address</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['sup_address']; ?>" readonly >
                      
                    </div>
                  </div>


                  <div class="form-group row">
                    <label  class="col-sm-4 col-form-label"><i class="fas fa-angle-double-right"></i> Company Name</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row2['com_name']; ?>" readonly >
                      
                    </div>
                  </div>

              
                











                  <hr class="hr2">
                  <div class="text-center">
                    <button type="button" class="btn btn-default"  data-dismiss="modal">OK</button> 
                    
                  </div>




     <br />
   </div>
   <div class="modal-footer">
    
   </div>
  </div>
 </div>
</div>




<!-- 
  Modal Close -->





                  <a href="supplier_edit.php?id=<?php echo $row['sup_id']; ?>" style="color: white;"> 
                    <?php echo $edit; ?>
                  </a>
                  <a href="supplier_delete.php?id=<?php echo $row['sup_id']; ?>" style="color: white;"> 
                    <?php echo $delete; ?>
                  </a>
                   
                  </td>
                </tr>
        <?php 
      }
        }
         ?>
              </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </section>

<?php  

if (isset($_GET['del'])) {
   $id = $_GET['del'];
   $query = "delete from supplier where sup_id='$id'";
   $result = $db->delete($query);
   if ($result) {
     echo "Deleted Successfully.
     ";
      header('location:suplier.php');
    }
   }
  include '../inc/footer.php';
?>