<?php 
$page ='loan';
  include 'header3.php';
  if ($user_level == '0') {
    echo "<script>window.location.href='loan.php'</script>";
  }
$id="";
$id = $_GET['id'];
if (isset($_POST['update'])) {

  $loan_by=mysqli_real_escape_string($db->link, $_POST['loan_by']);
  $loan_amount= $_POST['loan_amount'];
  $borrower_name=mysqli_real_escape_string($db->link, $_POST['borrower_name']);
  $borrower_contact=mysqli_real_escape_string($db->link, $_POST['borrower_contact']);
  $borrower_address=mysqli_real_escape_string($db->link, $_POST['borrower_address']);
  $loan_return_date= $_POST['loan_return_date'];
  $loan_note=mysqli_real_escape_string($db->link, $_POST['loan_note']);


  $query = "UPDATE loan
  SET
    loan_by='$loan_by',
    loan_amount='$loan_amount',
    borrower_name='$borrower_name',
    borrower_contact='$borrower_contact',
    borrower_address='$borrower_address',
    loan_return_date='$loan_return_date',
    loan_note='$loan_note'
    WHERE loan_id ='$id' ";
  $update = $db->update($query);

    echo "<script>alert('Record Updated successfully');</script>";
    echo "<script>window.location.href='loan.php'</script>"; 
    
}
if(isset($_POST['cancel'])){
  echo "<script>window.location.href='loan.php'</script>"; 
}
$query2 = "SELECT * FROM loan WHERE loan_id = $id";
$row = $db->select($query2)->fetch_assoc();
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Loan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item "><a href="loan.php">Loan</a></li>
              <li class="breadcrumb-item active">Update Loan</li>
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
              <form class="form-horizontal" action="" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Loan By</label>
                                        <div class="col-sm-6">
                      <select class="browser-default custom-select" name="loan_by">
        <?php 
            $query4="SELECT * FROM users";
            $read4=$db->select($query4);
            if ($read4) {
          while ($row4=$read4->fetch_assoc()) {
            if($row['loan_by']==$row4['user_fullname']){
              ?>
               <option selected value="<?php echo $row4['user_fullname']; ?>"><?php echo $row4['user_fullname']; ?></option>
               <?php
            }
            else{
               ?>
                <option value="<?php echo $row4['user_fullname']; ?>"><?php echo $row4['user_fullname']; ?></option>
           <?php 
         }
             }
           }
          ?>
                      </select>
                      
                    </div>
                  </div>



                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Amount</label>
                    <div class="col-sm-6">
                      <input type="number" value="<?php echo $row['loan_amount']; ?>" name="loan_amount" class="form-control" required  placeholder="Enter Amount">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Borrower Name</label>
                    <div class="col-sm-6">
                      <input type="text" name="borrower_name" value="<?php echo $row['borrower_name']; ?>" class="form-control" required  placeholder="Enter Name">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Contact</label>
                    <div class="col-sm-6">
                      <input type="text" name="borrower_contact" value="<?php echo $row['borrower_contact']; ?>" class="form-control" required  placeholder="Enter Contact">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-6">
                      <input type="text" name="borrower_address" value="<?php echo $row['borrower_address']; ?>" class="form-control" required  placeholder="Enter Address">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Return Date</label>
                    <div class="col-sm-6">
                      <input type="Date" name="loan_return_date" value="<?php echo $row['loan_return_date']; ?>" class="form-control" required  placeholder="Enter Date">
                    </div>
                  </div>



                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Note</label>
                    <div class="col-sm-6">
                      <input type="text" name="loan_note" value="<?php echo $row['loan_note']; ?>" required class="form-control"  placeholder="Enter Note">
                    </div>
                  </div>





                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                      <button type="submit" name="update" class="btn btn-2 btn-success">Update</button>
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