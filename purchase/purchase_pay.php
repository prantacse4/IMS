<?php
$page='';
$page = 'purchase';
include 'header3.php';
$id = $_GET['id'];

if(isset($_POST['update']))
{
  $pur_paid = mysqli_real_escape_string($db->link, $_POST['paid']);
  $pur_due = mysqli_real_escape_string($db->link, $_POST['due']);
  $pay = mysqli_real_escape_string($db->link, $_POST['pay']);
  $pur_paid+=$pay;
  $pur_due-=$pay;
  $query = "UPDATE purchase
  SET
    pur_paid='$pur_paid',
    pur_due = '$pur_due'
    WHERE pur_id ='$id' ";
  $update = $db->update($query);
  if($update){
       echo "<script>window.location.href='purchase.php'</script>"; 
     }
     else{
      echo '$error';
     }
}

$query = "SELECT * FROM purchase WHERE pur_id = $id";
$read = $db->select($query);
$row = $read->fetch_assoc();

$id2 = $row['pur_supplier'];

$query2 = "SELECT * FROM supplier WHERE sup_id = $id2";
$read2 = $db->select($query2);
$row2 = $read2->fetch_assoc();
?>






  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pay Due</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item "><a href="purchase.php">Purchase</a></li>
              <li class="breadcrumb-item active">Pay Due</li>
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
                <h3 class="card-title">Purchasing Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Product Code</label>
                    <div class="col-sm-6">
                      <input type="text" name="" value="<?php echo $row['pur_code']; ?>" class="form-control" readonly >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Supplier Name</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row2['sup_name']; ?>" name="" class="form-control" readonly >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Total Amount</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row['pur_price']; ?>" name="" class="form-control" readonly >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Paid Amount</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row['pur_paid']; ?>" name="paid" class="form-control" readonly >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Due Amount</label>
                    <div class="col-sm-6">
                      <input type="number" value="<?php echo $row['pur_due']; ?>" name="due" class="form-control" readonly >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Pay Now</label>
                    <div class="col-sm-6">
                      <input type="number" value="" name="pay" class="form-control"  max="<?php echo $row['pur_due']; ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                      <button type="submit" name="update" class="btn btn-success btn-2">Pay</button>
                      <button type="reset" class="btn btn-danger btn-2">Reset</button>
                      <a class="btn btn-info " href="purchase.php">Go Back</a>
                      
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
?>s