<?php 
$page ='expense';
  include 'header3.php';
  if ($user_level == '0') {
    echo "<script>window.location.href='expense.php'</script>";
  }

$id="";
$id = $_GET['id'];
if (isset($_POST['update'])) {

  $exp_by=mysqli_real_escape_string($db->link, $_POST['exp_by']);
  $exp_amount= $_POST['exp_amount'];
  $exp_desc=mysqli_real_escape_string($db->link, $_POST['exp_desc']);
  $query = "UPDATE expense
  SET
    exp_by='$exp_by',
    exp_amount='$exp_amount',
    exp_desc='$exp_desc'
    WHERE exp_id ='$id' ";
  $update = $db->update($query);

    echo "<script>alert('Record Updated successfully');</script>";
    echo "<script>window.location.href='expense.php'</script>"; 
    
}
if(isset($_POST['cancel'])){
  echo "<script>window.location.href='expense.php'</script>"; 
}
$query2 = "SELECT * FROM expense WHERE exp_id = $id";
$row = $db->select($query2)->fetch_assoc();
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Expense</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item "><a href="expense.php">Expense</a></li>
              <li class="breadcrumb-item active">Edit Expense</li>
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
                <h3 class="card-title">Expense Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Expense By</label>
                                        <div class="col-sm-6">
                      <select class="browser-default custom-select" name="exp_by">
        <?php 
            $query4="SELECT * FROM users";
            $read4=$db->select($query4);
            if ($read4) {
          while ($row4=$read4->fetch_assoc()) {
            if($row['exp_by']==$row4['user_fullname']){
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
                      <input type="number" name="exp_amount" class="form-control" required  placeholder="Enter Amount" value="<?php echo $row['exp_amount']; ?>">
                    </div>
                  </div>



                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-6">
                      <input type="" name="exp_desc" required class="form-control" value="<?php echo $row['exp_desc']; ?>"  placeholder="Enter Description">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                      <button type="submit" name="update" class="btn btn-2 btn-success">Update</button>
                      <button type="reset" class="btn btn-2 btn-danger">Reset</button>
                      <a class="btn btn-info btn-2" href="expense.php">Go Back</a>
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