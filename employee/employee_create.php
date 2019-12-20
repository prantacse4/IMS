
<?php  
$page ='emppany';
  include 'header3.php';

if(isset($_POST['submit']))
{
  $emp_name=mysqli_real_escape_string($db->link, $_POST['emp_name']);
  $emp_contact=mysqli_real_escape_string($db->link, $_POST['emp_contact']);
  $emp_designation=mysqli_real_escape_string($db->link, $_POST['emp_designation']);
  $joining_date=mysqli_real_escape_string($db->link, $_POST['joining_date']);
  $emp_salary=mysqli_real_escape_string($db->link, $_POST['emp_salary']);
  $emp_type=mysqli_real_escape_string($db->link, $_POST['emp_type']);

  $resign='';
  if ($emp_name=='') {
    $error="Field must not be empty";
  }
  else
  {
    $query="INSERT INTO employee(emp_name,emp_contact,emp_designation,joining_date,emp_salary,emp_type,resign_date) VALUES('$emp_name','$emp_contact','$emp_designation','$joining_date','$emp_salary','$emp_type','$resign')";
    $insert=$db->insert($query);
    if($insert){
       echo "<script>alert('Record Created successfully');</script>";
       echo "<script>window.location.href='employee.php'</script>"; 
     }
     else{
      echo '$error';
     }
  }
}
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Employee</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item "><a href="employee.php">Employee</a></li>
              <li class="breadcrumb-item active">New Employee</li>
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

        <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Employee Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="" method="post">
                <div class="card-body">


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"><span style="color:red;">*</span>Employee Name</label>
                    <div class="col-sm-6">
                      <input type="text" name="emp_name" class="form-control"  placeholder="Enter Employee Name" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label"><span style="color:red;">*</span>Employee Contact</label>
                    <div class="col-sm-6">
                      <input type="text" name="emp_contact" class="form-control" placeholder="Enter Employee Contact " required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Designation</label>
                    <div class="col-sm-6">
                      <input type="text" name="emp_designation" class="form-control"  placeholder="Enter Designation">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label"><span style="color:red;">*</span>Joining Date</label>
                    <div class="col-sm-6">
                      <input type="date" name="joining_date" class="form-control" required >
                    </div>
                  </div>



                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Salary</label>
                    <div class="col-sm-6">
                      <input type="number" name="emp_salary" class="form-control"  placeholder="Enter Salary">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Employee Type</label>
                    <div class="col-sm-6">
                      <input type="text" name="emp_type" class="form-control"  placeholder="Enter Employee Type">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                      <button type="submit" name="submit" class="btn btn-2 btn-success">Submit</button>
                      <button type="reset" class="btn btn-2 btn-danger">Reset</button>
                      <a class="btn btn-info btn-2" href="employee.php">Go Back</a>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->

	   
    </div>
  </section>
<!-- End Main content -->

<?php  
	include '../inc/footer.php';
?>