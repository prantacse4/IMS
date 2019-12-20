
<?php  
$page ='customer';
  include 'header3.php';

if(isset($_POST['submit']))
{
  $cus_name=mysqli_real_escape_string($db->link, $_POST['cus_name']);
  $cus_identifier=mysqli_real_escape_string($db->link, $_POST['cus_identifier']);
  $cus_contact1=mysqli_real_escape_string($db->link, $_POST['cus_contact1']);
  $cus_contact2=mysqli_real_escape_string($db->link, $_POST['cus_contact2']);
  $cus_nid=mysqli_real_escape_string($db->link, $_POST['cus_nid']);
  $cus_address=mysqli_real_escape_string($db->link, $_POST['cus_address']);
  $cus_contact_person=mysqli_real_escape_string($db->link, $_POST['cus_contact_person']);
  if ($cus_name=='') {
    $error="Field must not be empty";
  }
  else
  {


    $query2="INSERT INTO customer( cus_name,cus_identifier,cus_contact1,cus_contact2,cus_address,cus_nid,cus_contact_person) VALUES('$cus_name', '$cus_identifier', '$cus_contact1', '$cus_contact2', '$cus_address', '$cus_nid', '$cus_contact_person')";
    $insert=$db->insert($query2);
    if($insert){
       echo "<script>alert('Record Created successfully');</script>";
       echo "<script>window.location.href='customer.php'</script>"; 
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
            <h1 class="m-0 text-dark">Add Customer</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item "><a href="customer.php">Customer</a></li>
              <li class="breadcrumb-item active">Add Customer</li>
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
                <h3 class="card-title">Customer Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="customer_create.php" method="post">
                <div class="card-body">


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"><span style="color:red;">*</span>Customer Name</label>
                    <div class="col-sm-6">
                      <input type="text" name="cus_name" class="form-control"  placeholder="Enter Customer Name" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Identifier</label>
                    <div class="col-sm-6">
                      <input type="text" name="cus_identifier" class="form-control" placeholder="Enter Customer Identifier">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Contact 1</label>
                    <div class="col-sm-6">
                      <input type="text" name="cus_contact1" class="form-control"  placeholder="Enter Contact Number 1">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Contact 2</label>
                    <div class="col-sm-6">
                      <input type="text" name="cus_contact2" class="form-control"  placeholder="Enter Contact Number 2">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">NID</label>
                    <div class="col-sm-6">
                      <input type="text" name="cus_nid" class="form-control"  placeholder="Enter NID">
                    </div>
                  </div>



                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-6">
                      <input type="text" name="cus_address" class="form-control"  placeholder="Enter Address">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Contact Person</label>
                    <div class="col-sm-6">
                      <input type="text" name="cus_contact_person" class="form-control"  placeholder="Enter Contact Person">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                      <button type="submit" name="submit" class="btn btn-2 btn-success">Submit</button>
                      <button type="reset" class="btn btn-2 btn-danger">Reset</button>
                      <a class="btn btn-info btn-2" href="customer.php">Go Back</a>
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