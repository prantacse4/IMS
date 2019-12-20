
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



<!-- View Modal -->

                       <div class="modal fade" id="myModal-<?php echo $row['emp_id']; ?>" role="dialog">
                       <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
                  <div class="modal-content">
                   <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                 
                   </div>
                    <div class="modal-body">
                       <section class="content">
      <div class="container-fluid">
        <!-- main body start from here -->

        <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">emptomer Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="emptomer.php" method="post">
                <div class="card-body">

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Employee Name</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['emp_name']; ?></p>
                    </div>
                  </div>
                 

                   <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Employee Contact</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['emp_contact']; ?></p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Employee Designation</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['emp_designation']; ?></p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Salary</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['emp_salary']; ?></p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Employee type</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['emp_type']; ?></p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Joining Date</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['joining_date']; ?></p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Resign Date</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php

                        $resign=$row['resign_date'];
                        if($resign=='0000-00-00'){
                          echo "Working now";
                        }
                        else{
                            echo $resign; 
                          }
                       ?></p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label"></label>
                
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
    </div>
  </section>
         </div>

                     <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>

               </div>
                </div> 

              </div>


         <!--      End Modal -->



















                  <a href="employee_edit.php?id=<?php echo $row['emp_id']; ?>" style="color: white;"> 
                    <button class="btn btn-success">
                      <span class="fa fa-edit"></span>
                    </button>
                  </a>
                  <a href="employee_delete.php?id=<?php echo $row['emp_id']; ?>" style="color: white;"> 
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