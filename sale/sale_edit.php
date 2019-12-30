<?php
$connect = new PDO("mysql:host=localhost;dbname=stock", "root", "");
$page='';
$page = 'sale';
include 'header3.php';
$id = $_GET['id'];

if(isset($_POST['update']))
{
   $sale_paid = mysqli_real_escape_string($db->link, $_POST['paid']);
  $sale_due = mysqli_real_escape_string($db->link, $_POST['due']);
  $sale_discount = mysqli_real_escape_string($db->link, $_POST['discount']);
  $sale_customer = mysqli_real_escape_string($db->link, $_POST['cus_id']);
  $sale_type = mysqli_real_escape_string($db->link, $_POST['sale_type']);
  $query = "UPDATE sale
  SET
    sale_payment='$sale_paid',
  sale_due='$sale_due',
  sale_discount='$sale_discount',
  sale_cus='$sale_customer',
  sale_type='$sale_type'
    WHERE sale_id =$id";
  $update = $db->update($query);
  if($update){
       echo "<script>window.location.href='sale.php'</script>"; 
     }
     else{
      echo '$error';
     }
}

$query2 = "SELECT * FROM sale WHERE sale_id = $id";
$read2 = $db->select($query2);
$row2 = $read2->fetch_assoc();

$id2 = $row2['sale_cus'];

$query3 = "SELECT * FROM Customer WHERE cus_id = $id2";
$read3 = $db->select($query3);
$row3 = $read3->fetch_assoc();

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
              <form class="form-horizontal" action="" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Sale Code</label>
                    <div class="col-sm-6">
                      <input type="text" name="sale_id" value="<?php echo $row2['sale_id'] ?>" class="form-control" Readonly >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Sale Customer</label>
                    <div class="col-sm-6">
                      <select name="cus_id" class="form-control cus_id" id="cus" required ><option value="">Select Customer</option>
  <?php 
            $query4="SELECT * FROM customer";
            $read4=$db->select($query4);
            if ($read4) {
          while ($row4=$read4->fetch_assoc()) {
              $name="";
              $name=$row4['cus_name'];
              $name.="(";
              $name.=$row4['cus_identifier'];
              $name.=')';
            if($row2['sale_cus']==$row4['cus_id']){
              
              ?>
               <option selected value="<?php echo $row4['cus_id']; ?>"><?php echo $name; ?></option>
               <?php
            }
            else{
               ?>
                <option value="<?php echo $row4['cus_id']; ?>"><?php echo $name; ?></option>
           <?php 
         }
             }
           }
          ?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Sale Type</label>
                    <div class="col-sm-6">
                      <select name="sale_type" class="form-control sup_id" id="sup_id" required><
                      <?php
                        if($row2['sale_type']=='regular'){
                          ?>
                          <option selected value="regular">Regular</option>
                          <option  value="wholesale">Wholesale</option>
                          <?php
                        }
                        else{
                          ?>
                          <option value="regular">Regular</option>
                          <option selected  value="wholesale">Wholesale</option>
                          <?php
                        }


                      ?>

                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Total Amount</label>
                    <div class="col-sm-6">
                      <input type="number" value="<?php echo $row2['sale_amount'] ?>" Readonly placeholder="Automatically Filled" name="total_amount1" id="total_amount1" class="form-control"  >
                    </div>
                  </div>               

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Total Discount</label>
                    <div class="col-sm-6">
                      <input type="number" id="discount_amount"  value="<?php echo $row2['sale_discount'] ?>" onkeyup="dis()" name="discount" class="form-control"  >
                    </div>
                  </div>              

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Payable Amount</label>
                    <div class="col-sm-6">
                      <input type="number" value="<?php $tm=$row2['sale_amount']-$row2['sale_discount'];echo $tm; ?>" Readonly placeholder="Automatically Filled" class="form-control" name="payable_amount" id="payable_amount">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Payment</label>
                    <div class="col-sm-6">
                      <input type="number" value="<?php echo $row2['sale_payment'] ?>"  name="paid" id="payment" onkeyup="payment2()" required class="form-control"  >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Due</label>
                    <div class="col-sm-6">
                      <input type="number" value="<?php echo $row2['sale_due'] ?>" class="form-control"  name="due" id="due"  Readonly placeholder="Automatically Filled">
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
<script type="text/javascript">
  function dis(){
  var dis=document.getElementById("discount_amount").value;
  var pay=document.getElementById("total_amount1").value;
  document.getElementById("payable_amount").value=pay-dis;

  payment2();
}

 function payment2(){
      var payable=document.getElementById("payable_amount").value;
     var pay=document.getElementById("payment").value;
      document.getElementById("due").value=payable-pay;
}
</script>