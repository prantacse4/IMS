
<?php  
$page ='company';
  include 'header3.php';
  $query="SELECT * FROM employee";
  $read=$db->select($query);

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text2">E m p l o y e e</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Employee</li>
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
              <h3 class="card-title card-title2">Employee Information</h3>
                <a href="employee_create.php" class="btn btn-success btn-add"><i class="fa fa-plus"></i> New Employee</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped forproducttable tablepranta">
                <thead class="theadcolor">
                <tr>
                  <th>Employee Name</th>
                  <th>Contact No</th>
                  <th>Designation</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody class="tablepranta2">
        <?php 
          if ($read) {
            while ($row=$read->fetch_assoc()) {
              $name=$row['emp_name'];
                   
       ?>

                <tr>
                  <td><?php echo $name; ?></td>
                  <td><?php echo $row['emp_contact']; ?></td>
                  <td><?php echo $row['emp_designation']; ?></td>
                  <td>

                    <button class="btn btn-info" data-toggle="modal" data-target="#myModal-<?php echo $row['emp_id']; ?>">
                        <span class="far fa-eye"></span>
                      </button> 



                        <?php

                        $resign=$row['resign_date'];
                        if($resign==''){
                           $resign = "Working now";
                        }
                        else{
                             $resign; 
                          }
                       ?>







                      <!-- modal Start -->


<?php $print = ":   " ?>
<div  class="modal fade" id="myModal-<?php echo $row['emp_id']; ?>" >
 <div class="modal-dialog modal-dialog1">
  <div class="modal-content">
   <div class="modal-header">
    
   </div>
   <div class="btn-infooooo">
   <h2 class="modal-title text-center"><i class="nav-icon fas fa-hard-hat"></i> <?php  echo $row['emp_name']; ?> </h2>
   <h4 class="modal-title text-center">Employee Information</h4></div>
   <div class="modal-body modal-body1">


<hr class="hr2">


                <div class="form-group row">
                    <label  class="col-sm-6 col-form-label"><i class="fas fa-angle-double-right"></i> Employee Name</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['emp_name']; ?>" readonly >
                      
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-6 col-form-label"><i class="fas fa-angle-double-right"></i> Employee Contact</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['emp_contact']; ?>" readonly >
                      
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-6 col-form-label"><i class="fas fa-angle-double-right"></i> Employee Designation</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['emp_designation']; ?>" readonly >
                      
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-6 col-form-label"><i class="fas fa-angle-double-right"></i> Salary</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['emp_salary']; ?>" readonly >
                      
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-6 col-form-label"><i class="fas fa-angle-double-right"></i> Employee type</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['emp_type']; ?>" readonly >
                      
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-6 col-form-label"><i class="fas fa-angle-double-right"></i> Joining Date</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $row['joining_date']; ?>" readonly >
                      
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-6 col-form-label"><i class="fas fa-angle-double-right"></i> Resign Date</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control form-control2  "  value="<?php echo $print; echo $resign; ?>" readonly >
                      
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

















                  <a href="employee_edit.php?id=<?php echo $row['emp_id']; ?>" style="color: white;"> 
                    <?php echo $edit; ?>
                  </a>
                  <a href="employee_delete.php?id=<?php echo $row['emp_id']; ?>" style="color: white;"> 
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