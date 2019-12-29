<?php
$page='';
$page = 'sale';
include 'header3.php';
$id = $_GET['id'];

if(isset($_POST['update']))
{
  $cat_name = mysqli_real_escape_string($db->link, $_POST['cat_name']);
  $cat_desc = mysqli_real_escape_string($db->link, $_POST['cat_desc']);
  $query = "UPDATE sale
  SET
    cat_name='$cat_name',
    cat_desc = '$cat_desc'
    WHERE sale_id =$id";
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
            <h1 class="m-0 text-dark">Update Sale</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item "><a href="sale.php">Sale</a></li>
              <li class="breadcrumb-item active">Update Sale</li>
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
              <form class="form-horizontal" action="sale_edit.php?id=<?php echo $id; ?>" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Sale Code</label>
                    <div class="col-sm-6">
                      <input type="text" name="sale_id" value="<?php echo $row['sale_id'] ?>" class="form-control" Readonly >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Sale Customer</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row2['cus_name'] ?>" name="cus_name" class="form-control"  >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Sale Type</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row['sale_type'] ?>" name="sale_type" class="form-control"  >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label"> Total Amount</label>
                    <div class="col-sm-6">
                      <input type="text" value="" Readonly placeholder="Automatically Filled" name="" class="form-control"  >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Discount Type</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row['sale_amount'] ?>" name="sale_cus" class="form-control"  >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Total Discount</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row['sale_discount'] ?>" name="sale_discount" class="form-control"  >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Discount Amount</label>
                    <div class="col-sm-6">
                      <input type="text" value="" name="" class="form-control" Readonly placeholder="Automatically Filled"  >
                    </div>
                  </div>


                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Payable Amount</label>
                    <div class="col-sm-6">
                      <input type="text" Readonly placeholder="Automatically Filled" class="form-control"  >
                    </div>
                  </div>



                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Payment</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row['sale_payment'] ?>" name="sale_payment" class="form-control"  >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Due</label>
                    <div class="col-sm-6">
                      <input type="number"  name="sale_due" class="form-control" Readonly placeholder="Automatically Filled"  >
                    </div>
                  </div>

                  

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                      <button type="submit" name="update" class="btn btn-success btn-2">Update</button>
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