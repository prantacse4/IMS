
<?php  
$page ='investment';
  include 'header3.php';
date_default_timezone_set("Asia/Dhaka");
if(isset($_POST['submit']))
{
 /* $inv_date= $_POST['inv_date'];*/
  $inv_amount= $_POST['inv_amount'];
  $inv_by=mysqli_real_escape_string($db->link, $_POST['inv_by']);
  $added_by=mysqli_real_escape_string($db->link, $_POST['added_by']);
  $inv_desc=mysqli_real_escape_string($db->link, $_POST['inv_desc']);
  if ($inv_by=='' || $added_by=='' || $inv_by==''|| $inv_amount=='') {
    $error="Field must not be empty";
  }
  else
  {
    $query="INSERT INTO investment(inv_amount,inv_by,added_by,inv_desc) VALUES('$inv_amount','$inv_by','$added_by', '$inv_desc')";
    $insert=$db->insert($query);
    if($insert){
       echo "<script>alert('Record Created successfully');</script>";
       echo "<script>window.location.href='investment.php'</script>"; 
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
            <h1 class="m-0 text-dark">Add Investment</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item "><a href="investment.php">Investment</a></li>
              <li class="breadcrumb-item active">Add Investment</li>
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
                <h3 class="card-title">Investment Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="investment_create.php" method="post">
                <div class="card-body">


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Investment By</label>
                                        <div class="col-sm-6">
                      <select class="browser-default custom-select" name="inv_by" required>
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
                    <label  class="col-sm-2 col-form-label">Investment Added By</label>
                    <div class="col-sm-6">
                      <input type="text" name="added_by" class="form-control" Readonly value="<?php echo $namesession; ?>">
                    </div>
                  </div>

                 <!--  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Investment Date</label>
                    <div class="col-sm-6">
                      <input type="date" name="inv_date" class="form-control" id="today2"   required>
                    </div>
                  </div> -->


                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Amount</label>
                    <div class="col-sm-6">
                      <input type="number" name="inv_amount" class="form-control" required  placeholder="Enter Amount">
                    </div>
                  </div>



                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-6">
                      <input type="" name="inv_desc" required class="form-control"  placeholder="Enter Description">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                      <button type="submit" name="submit" class="btn btn-2 btn-success">Submit</button>
                      <button type="reset" class="btn btn-2 btn-danger">Reset</button>
                      <a class="btn btn-info btn-2" href="investment.php">Go Back</a>
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