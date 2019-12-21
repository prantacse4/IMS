
<?php  
$page ='borrow';
  include 'header3.php';

if(isset($_POST['submit']))
{
  
  $bor_by=mysqli_real_escape_string($db->link, $_POST['bor_by']);
  $bor_date= $_POST['bor_date'];
  $bor_amount= $_POST['bor_amount'];
  $bor_from=mysqli_real_escape_string($db->link, $_POST['bor_from']);
  $bor_from_contact=mysqli_real_escape_string($db->link, $_POST['bor_from_contact']);
  $return_date= $_POST['return_date'];
  $bor_note=mysqli_real_escape_string($db->link, $_POST['bor_note']);
  if ($bor_by=='' || $bor_amount=='' || $bor_note=='') {
    $error="Field must not be empty";
  }
  else
  {
   $query="INSERT INTO borrow(bor_by,bor_date,bor_amount,bor_from,bor_from_contact,return_date,bor_note) VALUES('$bor_by','$bor_date','$bor_amount','$bor_from','$bor_from_contact','$return_date','$bor_note')";
    $insert=$db->insert($query);
    if($insert){
       echo "<script>alert('Record Created successfully');</script>";
       echo "<script>window.location.href='borrow.php'</script>"; 
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
            <h1 class="m-0 text-dark">Add Borrow</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item "><a href="borrow.php">Borrow</a></li>
              <li class="breadcrumb-item active">Add Borrow</li>
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
                <h3 class="card-title">Borrow Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="borrow_create.php" method="post">
                <div class="card-body">




<div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Borrow By</label>
                                        <div class="col-sm-6">
                      <select class="browser-default custom-select" name="bor_by" required>
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
                    <label  class="col-sm-2 col-form-label">Borrow Date</label>
                    <div class="col-sm-6">
                      <input type="Date" name="bor_date"  id="today2" class="form-control" required  placeholder="Enter Date">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Amount</label>
                    <div class="col-sm-6">
                      <input type="number" name="bor_amount" class="form-control" required  placeholder="Enter Amount">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Borrow From</label>
                    <div class="col-sm-6">
                      <input type="text" name="bor_from" class="form-control" required  placeholder="Enter Name">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Contact</label>
                    <div class="col-sm-6">
                      <input type="text" name="bor_from_contact" class="form-control" required  placeholder="Enter Contact">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Return Date</label>
                    <div class="col-sm-6">
                      <input type="Date" name="return_date" class="form-control" required  placeholder="Enter Date">
                    </div>
                  </div>



                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Note</label>
                    <div class="col-sm-6">
                      <input type="text" name="bor_note" required class="form-control"  placeholder="Enter Note">
                    </div>
                  </div>







                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                      <button type="submit" name="submit" class="btn btn-2 btn-success">Submit</button>
                      <button type="reset" class="btn btn-2 btn-danger">Reset</button>
                      <a class="btn btn-info btn-2" href="borrow.php">Go Back</a>
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