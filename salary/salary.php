
<?php  
$page ='salary';
  include 'header3.php';
  $query="SELECT * FROM salary";
  $read=$db->select($query);

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text2">S a l a r y</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Salary</li>
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
              <h3 class="card-title card-title2">Salary Information</h3>
                <a href="salary_create.php" class="btn btn-success btn-add"><i class="fa fa-plus"></i> Add Salary</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped forproducttable tablepranta">
                <thead class="theadcolor">
                <tr>
                  <th>No</th>
                  <th>Employee Name</th>
                  <th>Salary Amount</th>
                  <th>Salary Payment</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody class="tablepranta2">
        <?php 
          if ($read) {
            $cnt=0;
            while ($row=$read->fetch_assoc()) {
              $id=$row['emp_id'];
              $cnt++;
                $query2="SELECT * FROM employee where emp_id='$id'";
                    $row2=$db->select($query2)->fetch_assoc();
       ?>

                <tr>
                  <td><?php echo $cnt; ?></td>
                  <td><?php echo $row2['emp_name']; ?></td>
                  <td><?php echo $row['sal_amount']; ?></td>
                  <td><?php echo $row['sal_payment']; ?></td>
                  
                  <td>

                    <button class="btn btn-info" data-toggle="modal" data-target="#myModal-<?php echo $row['sal_id']; ?>">
                        <span class="far fa-eye"></span>
                      </button> 









                      <!-- modal Start -->


<?php $print = ":   " ?>
<div  class="modal fade" id="myModal-<?php echo $row['sal_id']; ?>" >
 <div class="modal-dialog modal-dialog1">
  <div class="modal-content">
   <div class="modal-header">
    
   </div>
   <div class="btn-infooooo">
   <h2 class="modal-title text-center"><i class="nav-icon fas fa-donate"></i> <?php  echo $row2['emp_name']; ?>'s </h2>
   <h4 class="modal-title text-center">Salary Details</h4></div>
   <div class="modal-body modal-body1">


<hr class="hr2">









                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Employee Name</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row2['emp_name']; ?>" readonly >
                      
                    </div>
                  </div>



                  
                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Salary Amount</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['sal_amount']; ?>" readonly >
                      
                    </div>
                  </div>



                 
                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Salary Payment</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['sal_payment']; ?>" readonly >
                      
                    </div>
                  </div>



                  
                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Salary Due</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['sal_due']; ?>" readonly >
                      
                    </div>
                  </div>



                  
                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Advance Salary</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['sal_advance']; ?>" readonly >
                      
                    </div>
                  </div>


                  
                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Advance</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['advance_date']; ?>" readonly >
                      
                    </div>
                  </div>


                  
                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Salary Month</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['sal_month']; ?>" readonly >
                      
                    </div>
                  </div>


                  
                  <div class="form-group row">
                    <label  class="col-sm-5 col-form-label"><i class="fas fa-angle-double-right"></i> Payment Date</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['sal_payment_date']; ?>" readonly >
                      
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











                  <a href="salary_edit.php?id=<?php echo $row['sal_id']; ?>" style="color: white;"> 
                    <?php echo $edit; ?>
                  </a>
                  <a href="salary_delete.php?id=<?php echo $row['sal_id']; ?>" style="color: white;"> 
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