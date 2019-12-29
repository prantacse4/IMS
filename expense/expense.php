
<?php  
$page ='expense';
  include 'header3.php';
  $query="SELECT * FROM expense";
  $read=$db->select($query);

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text2">E x p e n s e</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Expense</li>
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
              <h3 class="card-title card-title2">Expense Information</h3>
                <a href="expense_create.php" class="btn btn-success btn-add"><i class="fa fa-plus"></i> Add Expense</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped forproducttable tablepranta">
                <thead class="theadcolor">
                <tr>
                  <th>Expense By</th>
                  <th>Expense Date</th>
                  <th>Amount</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody class="tablepranta2">
        <?php 
          if ($read) {
            while ($row=$read->fetch_assoc()) {
       ?>

                <tr>
                  <td><?php echo $row['exp_by']; ?></td>
                  <td><?php echo $row['exp_date']; ?></td>
                  <td><?php echo $row['exp_amount']; ?></td>
                  <td>

                    <button class="btn btn-info" data-toggle="modal" data-target="#myModal-<?php echo $row['exp_id']; ?>">
                        <span class="far fa-eye"></span>
                      </button> 















                      <!-- modal Start -->


<?php $print = ":   " ?>
<div  class="modal fade" id="myModal-<?php echo $row['exp_id']; ?>" >
 <div class="modal-dialog modal-dialog1">
  <div class="modal-content">
   <div class="modal-header">
    
   </div>
   <div class="btn-infooooo">
   <h2 class="modal-title text-center"><i class="nav-icon fas fa-warehouse"></i> <?php  echo $row['exp_by']; ?> </h2>
   <h4 class="modal-title text-center">Expense Details</h4></div>
   <div class="modal-body modal-body1">


<hr class="hr2">



                  <div class="form-group row">
                    <label  class="col-sm-4 col-form-label"><i class="fas fa-angle-double-right"></i> Expense By</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['exp_by']; ?>" readonly >
                      
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-4 col-form-label"><i class="fas fa-angle-double-right"></i> Description</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['exp_desc']; ?>" readonly >
                      
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-4 col-form-label"><i class="fas fa-angle-double-right"></i> Expense Date</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['exp_date']; ?>" readonly >
                      
                    </div>
                  </div>


                 
                <div class="form-group row">
                    <label  class="col-sm-4 col-form-label"><i class="fas fa-angle-double-right"></i> Amount</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['exp_amount']; ?>" readonly >
                      
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














                  <a href="expense_edit.php?id=<?php echo $row['exp_id']; ?>" style="color: white;"> 
                    <?php echo $edit; ?>
                  </a>
                  <a href="expense_delete.php?id=<?php echo $row['exp_id']; ?>" style="color: white;"> 
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