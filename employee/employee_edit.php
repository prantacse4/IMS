<?php 
$page ='company';
  include 'header3.php';
if ($user_level == '0') {
    echo "<script>window.location.href='employee.php'</script>";
  }
$id="";
$id = $_GET['id'];
if (isset($_POST['update'])) {
   $emp_name=mysqli_real_escape_string($db->link, $_POST['emp_name']);
  $emp_contact=mysqli_real_escape_string($db->link, $_POST['emp_contact']);
  $emp_designation=mysqli_real_escape_string($db->link, $_POST['emp_designation']);
  $joining_date=mysqli_real_escape_string($db->link, $_POST['joining_date']);
  $emp_salary=mysqli_real_escape_string($db->link, $_POST['emp_salary']);
  $emp_type=mysqli_real_escape_string($db->link, $_POST['emp_type']);
  $resign=mysqli_real_escape_string($db->link, $_POST['resign_date']);

  $query = "UPDATE employee
  SET
    emp_name='$emp_name',
    emp_contact='$emp_contact',
    emp_designation='$emp_designation',
    joining_date='$joining_date',
    emp_salary='$emp_salary',
    emp_type ='$emp_type',
    resign_date='$resign' 

    WHERE emp_id ='$id' ";
  $update = $db->update($query);

    echo "<script>alert('Record Updated successfully');</script>";
    echo "<script>window.location.href='employee.php'</script>"; 
     
    
}
if(isset($_POST['cancel'])){
  echo "<script>window.location.href='employee_edit.php'</script>"; 
}
$query2 = "SELECT * FROM employee WHERE emp_id = $id";
$row = $db->select($query2)->fetch_assoc();
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Company</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item "><a href="company.php">Company</a></li>
              <li class="breadcrumb-item active">Edit Company</li>
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
                <h3 class="card-title">Company Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="" method="post">
                <div class="card-body">


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"><span style="color:red;">*</span>Employee Name</label>
                    <div class="col-sm-6">
                      <input type="text" name="emp_name" class="form-control"  placeholder="Enter Employee Name" required value="<?php echo $row['emp_name']; ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label"><span style="color:red;">*</span>Employee Contact</label>
                    <div class="col-sm-6">
                      <input type="text" name="emp_contact" class="form-control" placeholder="Enter Employee Contact " required value="<?php echo $row['emp_contact']; ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Designation</label>
                    <div class="col-sm-6">
                      <input type="text" name="emp_designation" class="form-control"  placeholder="Enter Designation" value="<?php echo $row['emp_designation']; ?>">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label"><span style="color:red;">*</span>Joining Date</label>
                    <div class="col-sm-6">
                      <input type="date" name="joining_date" class="form-control" required  value="<?php echo $row['joining_date']; ?>">
                    </div>
                  </div>



                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Salary</label>
                    <div class="col-sm-6">
                      <input type="number" name="emp_salary" class="form-control"  placeholder="Enter Salary" value="<?php echo $row['emp_salary']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Employee Type</label>
                    <div class="col-sm-6">
                      <input type="text" name="emp_type" class="form-control"  placeholder="Enter Employee Type" value="<?php echo $row['emp_type']; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Resign Date</label>
                    <div class="col-sm-6">
                      <input type="date" name="resign_date" class="form-control"  value="<?php echo $row['resign_date']; ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                      <button type="submit" name="update" class="btn btn-2 btn-success">Update</button>
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