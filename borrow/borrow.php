
<?php  
$page ='borrow';
  include 'header3.php';
  $query="SELECT * FROM borrow";
  $read=$db->select($query);

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text2">B o r r o w</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Borrow</li>
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
              <h3 class="card-title card-title2">Borrow Information</h3>
                <a href="borrow_create.php" class="btn btn-success btn-add"><i class="fa fa-plus"></i> Add Borrow</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped forproducttable tablepranta">
                <thead class="theadcolor">
                <tr>
                  <th>Borrow By</th>
                  <th>Borrow Date</th>
                  <th>Amount</th>
                  <th>Borrow From</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody class="tablepranta2">
        <?php 
          if ($read) {
            while ($row=$read->fetch_assoc()) {
       ?>

                <tr>
                  <td><?php echo $row['bor_by']; ?></td>
                  <td><?php echo $row['bor_date']; ?></td>
                  <td><?php echo $row['bor_amount']; ?></td>
                  <td><?php echo $row['bor_from']; ?></td>
                  <td>

                    <button class="btn btn-info" data-toggle="modal" data-target="#myModal-<?php echo $row['bor_id']; ?>">
                        <span class="far fa-eye"></span>
                      </button> 














                      <!-- modal Start -->


<?php $print = ":   " ?>
<div  class="modal fade" id="myModal-<?php echo $row['bor_id']; ?>" >
 <div class="modal-dialog modal-dialog1">
  <div class="modal-content">
   <div class="modal-header">
    
   </div>
   <div class="btn-infooooo">
   <h2 class="modal-title text-center"><i class="nav-icon fas fa-briefcase"></i> <?php  echo $row['bor_by']; ?>'s </h2>
   <h4 class="modal-title text-center">Borrow Details</h4></div>
   <div class="modal-body modal-body1">


<hr class="hr2">



                  

                   <div class="form-group row">
                    <label  class="col-sm-4 col-form-label"><i class="fas fa-angle-double-right"></i> Borrow By</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['bor_by']; ?>" readonly >
                      
                    </div>
                  </div>



                  <div class="form-group row">
                    <label  class="col-sm-4 col-form-label"><i class="fas fa-angle-double-right"></i> Borrow Date</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['bor_date']; ?>" readonly >
                      
                    </div>
                  </div>


                  <div class="form-group row">
                    <label  class="col-sm-4 col-form-label"><i class="fas fa-angle-double-right"></i> Amount</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['bor_amount']; ?>" readonly >
                      
                    </div>
                  </div>





                  <div class="form-group row">
                    <label  class="col-sm-4 col-form-label"><i class="fas fa-angle-double-right"></i> Return Date</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['return_date']; ?>" readonly >
                      
                    </div>
                  </div>




                  <div class="form-group row">
                    <label  class="col-sm-4 col-form-label"><i class="fas fa-angle-double-right"></i> Borrow From</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['bor_from']; ?>" readonly >
                      
                    </div>
                  </div>


                  <div class="form-group row">
                    <label  class="col-sm-4 col-form-label"><i class="fas fa-angle-double-right"></i> Contact</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['bor_from_contact']; ?>" readonly >
                      
                    </div>
                  </div>

                 
                <div class="form-group row">
                    <label  class="col-sm-4 col-form-label"><i class="fas fa-angle-double-right"></i> Note</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['bor_note']; ?>" readonly >
                      
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















                  <a href="borrow_edit.php?id=<?php echo $row['bor_id']; ?>" style="color: white;"> 
                    <button class="btn btn-success">
                      <span class="fa fa-edit"></span>
                    </button>
                  </a>
                  <a href="borrow_delete.php?id=<?php echo $row['bor_id']; ?>" style="color: white;"> 
                    <button class="btn btn-danger">
                      <span class="fa fa-trash-alt"></span>
                    </button>
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