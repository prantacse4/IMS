<?php
$page='';
$page = 'sale';
include 'header3.php';
$id = $_GET['id'];

if(isset($_POST['update']))
{
  $sale_payment = mysqli_real_escape_string($db->link, $_POST['paid']);
  $sale_due = mysqli_real_escape_string($db->link, $_POST['due']);
  $pay= mysqli_real_escape_string($db->link, $_POST['pay']);
  $sale_payment+=$pay;
  $sale_due-=$pay;
  $query = "UPDATE sale
  SET
    sale_payment='$sale_payment',
    sale_due = '$sale_due'
    WHERE sale_id ='$id' ";
  $update = $db->update($query);
  if($update){
       echo "<script>window.location.href='sale.php'</script>"; 
     }
     else{
      echo '$error';
     }
}

$query = "SELECT * FROM sale WHERE sale_id = $id";
$read = $db->select($query);
$row = $read->fetch_assoc();

$id2 = $row['sale_cus'];

$query2 = "SELECT * FROM Customer WHERE cus_id = $id2";
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
              <li class="breadcrumb-item "><a href="sale.php">Sale</a></li>
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
                <h3 class="card-title">Sale Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Customer Name</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row2['cus_name']; ?>" name="" class="form-control" readonly >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Total Price</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row['sale_amount']; ?>" name="" class="form-control" readonly >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Paid Amount</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row['sale_payment']; ?>" name="paid" class="form-control" readonly >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Due Amount</label>
                    <div class="col-sm-6">
                      <input type="number" id="due" value="<?php echo $row['sale_due']; ?>" name="due" class="form-control" readonly >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Pay Now</label>
                    <div class="col-sm-6">
                      <input type="number" value="" id="pay" name="pay" class="form-control" max="<?php echo $row['sale_due']; ?>" >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                      <button type="submit" name="update" class="btn btn-success btn-2">Pay</button>
                      <button type="reset" class="btn btn-danger btn-2">Reset</button>
                      <a class="btn btn-info " href="sale.php">Go Back</a>
                      
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