<?php 
$page ='borrow';
  include 'header3.php';

$id="";
$id = $_GET['id'];
if (isset($_POST['update'])) {

  $bor_by=mysqli_real_escape_string($db->link, $_POST['bor_by']);
  $bor_date= $_POST['bor_date'];
  $bor_amount= $_POST['bor_amount'];
  $bor_from=mysqli_real_escape_string($db->link, $_POST['bor_from']);
  $bor_from_contact=mysqli_real_escape_string($db->link, $_POST['bor_from_contact']);
  $return_date= $_POST['return_date'];
  $bor_note=mysqli_real_escape_string($db->link, $_POST['bor_note']);


  $query = "UPDATE borrow
  SET
    bor_by='$bor_by',
    bor_date='$bor_date',
    bor_amount='$bor_amount',
    bor_from='$bor_from',
    bor_from_contact='$bor_from_contact',
    return_date='$return_date',
    bor_note='$bor_note'
    WHERE bor_id ='$id' ";
  $update = $db->update($query);

    echo "<script>alert('Record Updated successfully');</script>";
    echo "<script>window.location.href='borrow.php'</script>"; 
    
}
if(isset($_POST['cancel'])){
  echo "<script>window.location.href='borrow.php'</script>"; 
}
$query2 = "SELECT * FROM borrow WHERE bor_id = $id";
$row = $db->select($query2)->fetch_assoc();
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Borrow</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item "><a href="borrow.php">Borrow</a></li>
              <li class="breadcrumb-item active">Update Borrow</li>
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
              <form class="form-horizontal" action="" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Borrow By</label>
                                        <div class="col-sm-6">
                      <select class="browser-default custom-select" name="bor_by">
        <?php 
            $query4="SELECT * FROM users";
            $read4=$db->select($query4);
            if ($read4) {
          while ($row4=$read4->fetch_assoc()) {
            if($row['bor_by']==$row4['user_fullname']){
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
                    <label  class="col-sm-2 col-form-label">Borrow Date</label>
                    <div class="col-sm-6">
                      <input type="Date" name="bor_date" value="<?php echo $row['bor_date']; ?>"   class="form-control" required  placeholder="Enter Date">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Amount</label>
                    <div class="col-sm-6">
                      <input type="number" name="bor_amount" value="<?php echo $row['bor_amount']; ?>" class="form-control" required  placeholder="Enter Amount">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Borrow From</label>
                    <div class="col-sm-6">
                      <input type="text" name="bor_from" class="form-control" value="<?php echo $row['bor_from']; ?>" required  placeholder="Enter Name">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Contact</label>
                    <div class="col-sm-6">
                      <input type="text" name="bor_from_contact" value="<?php echo $row['bor_from_contact']; ?>" class="form-control" required  placeholder="Enter Contact">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Return Date</label>
                    <div class="col-sm-6">
                      <input type="Date" name="return_date" class="form-control" value="<?php echo $row['return_date']; ?>" required  placeholder="Enter Date">
                    </div>
                  </div>



                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Note</label>
                    <div class="col-sm-6">
                      <input type="text" name="bor_note" required class="form-control" value="<?php echo $row['bor_note']; ?>"  placeholder="Enter Note">
                    </div>
                  </div>



















                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                      <button type="submit" name="update" class="btn btn-2 btn-success">Update</button>
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