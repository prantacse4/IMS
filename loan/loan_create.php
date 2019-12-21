
<?php  
$page ='loan';
  include 'header3.php';

if(isset($_POST['submit']))
{
  
  $loan_by=mysqli_real_escape_string($db->link, $_POST['loan_by']);
  $loan_amount= $_POST['loan_amount'];
  $borrower_name=mysqli_real_escape_string($db->link, $_POST['borrower_name']);
  $borrower_contact=mysqli_real_escape_string($db->link, $_POST['borrower_contact']);
  $borrower_address=mysqli_real_escape_string($db->link, $_POST['borrower_address']);
  $loan_return_date= $_POST['loan_return_date'];
  $loan_note=mysqli_real_escape_string($db->link, $_POST['loan_note']);
  
  if ($loan_by=='' || $loan_amount=='' || $loan_note=='') {
    $error="Field must not be empty";
  }
  else
  {
   $query="INSERT INTO loan(loan_by,loan_amount,borrower_name,borrower_contact,borrower_address,loan_return_date,loan_note) VALUES('$loan_by','$loan_amount','$borrower_name','$borrower_contact','$borrower_address','$loan_return_date','$loan_note')";
    $insert=$db->insert($query);
    if($insert){
       echo "<script>alert('Record Created successfully');</script>";
       echo "<script>window.location.href='loan.php'</script>"; 
     }
     else{
      echo '$error';
     }
  }
}
date_default_timezone_set("Asia/Dhaka");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Loan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item "><a href="loan.php">Loan</a></li>
              <li class="breadcrumb-item active">Add Loan</li>
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
                <h3 class="card-title">Loan Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="loan_create.php" method="post">
                <div class="card-body">




<div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Loan By</label>
                                        <div class="col-sm-6">
                      <select class="browser-default custom-select" name="loan_by" required>
                        <option selected value="" >Select Author</option>
        <?php 
            $query4="SELECT * FROM users";
            $read4=$db->select($query4);
            if ($read4) {
          while ($row4=$read4->fetch_assoc()) {

               ?>

                <option value="<?php echo $row4['user_fullname']; ?>"><?php echo $row4['user_fullname']; ?></option>
           <?php 
             }
           }
          ?>
                      </select>
                      
                    </div>
                  </div>




                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Amount</label>
                    <div class="col-sm-6">
                      <input type="number" name="loan_amount" class="form-control" required  placeholder="Enter Amount">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Borrower Name</label>
                    <div class="col-sm-6">
                      <input type="text" name="borrower_name" class="form-control" required  placeholder="Enter Name">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Contact</label>
                    <div class="col-sm-6">
                      <input type="text" name="borrower_contact" class="form-control" required  placeholder="Enter Contact">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-6">
                      <input type="text" name="borrower_address" class="form-control" required  placeholder="Enter Address">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Return Date</label>
                    <div class="col-sm-6">
                      <input type="Date" name="loan_return_date" class="form-control" required  placeholder="Enter Date">
                    </div>
                  </div>



                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Note</label>
                    <div class="col-sm-6">
                      <input type="text" name="loan_note" required class="form-control"  placeholder="Enter Note">
                    </div>
                  </div>







                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                      <button type="submit" name="submit" class="btn btn-2 btn-success">Submit</button>
                      <button type="reset" class="btn btn-2 btn-danger">Reset</button>
                      <a class="btn btn-info btn-2" href="loan.php">Go Back</a>
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
<script type="text/javascript">
  document.querySelector("#today2").valueAsDate = new Date();
</script>