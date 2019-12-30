
<?php  

$connect = new PDO("mysql:host=localhost;dbname=stock", "root", "");

$page='';
$page = 'purchase';
include 'header3.php';
$id = $_GET['id'];

if(isset($_POST['update']))
{
  $pur_paid = mysqli_real_escape_string($db->link, $_POST['paid']);
  $pur_due = mysqli_real_escape_string($db->link, $_POST['due']);
  $pur_discount = mysqli_real_escape_string($db->link, $_POST['discount']);
  $pur_supplier = mysqli_real_escape_string($db->link, $_POST['sup_id']);
  $query = "UPDATE purchase
  SET
  pur_paid='$pur_paid',
  pur_due='$pur_due',
  pur_discount='$pur_discount',
  pur_supplier='$pur_supplier'
    WHERE pur_id =$id";
  $update = $db->update($query);
  if($update){
       echo "<script>window.location.href='purchase.php'</script>"; 
     }
     else{
      echo '$error';
     }
}

$query2 = "SELECT * FROM purchase WHERE pur_id = '$id'";
$read2 = $db->select($query2);
$row2 = $read2->fetch_assoc();

$id2 = $row2['pur_supplier'];

$query3 = "SELECT * FROM supplier WHERE sup_id = '$id2' ";
$read3 = $db->select($query3);
$row3 = $read3->fetch_assoc();
function fill_unit_select_box($connect)
{ 
 $output = '';
 $query = "SELECT * FROM company ORDER BY com_id DESC";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output .= '<option value="'.$row["com_id"].'">'.$row["com_name"].'</option>';
 }
 return $output;
}
function fill_unit_select_box1($connect)
{ 
 $output = '';
 $query = "SELECT * FROM company ORDER BY com_id DESC";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output .= '<option value="'.$row["com_id"].'">'.$row["com_name"].'</option>';
 }
 return $output;
}
function fill_unit_select_box2($connect)
{ 
 $output = '';
 $query = "SELECT * FROM supplier ORDER BY sup_id DESC";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  if($row['sup_id']==$id2){
    $output .= '<option value="'.$row["sup_id"].'" name="'.$row["sup_com"].'">'.$row["sup_name"].'</option>';
  $output .= '<option selected value="'.$row["sup_id"].'" name="" >'.$row["sup_name"].'</option>';
  }
  else{
  $output .= '<option value="'.$row["sup_id"].'" name="'.$row["sup_com"].'">'.$row["sup_name"].'</option>';
  $output .= '<option value="'.$row["sup_id"].'" name="" >'.$row["sup_name"].'</option>';
 }
}
 return $output;
}
function fill_unit_select_box3($connect)
{ 
 $output = '';
 $query = "SELECT * FROM product ORDER BY pro_id DESC";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output .= '<option value="'.$row["pro_id"].'">'.$row["pro_name"].'</option>';
 }
 return $output;
}
?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Purchase</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item "><a href="purchase.php">Purchase</a></li>
              <li class="breadcrumb-item active">Update Purchase</li>
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
                <h3 class="card-title">Purchase Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="purchase_edit.php?id=<?php echo $id; ?>" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Purchase Code</label>
                    <div class="col-sm-6">
                      <input type="text" name="pur_id" value="<?php echo $row2['pur_id'] ?>" class="form-control" Readonly >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Company</label>
                    <div class="col-sm-6">

                      <select name="com_id" class="form-control com_id" id="com_id" ><option value="" >Select Company</option><?php echo fill_unit_select_box1($connect); ?></select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Purchase Supplier</label>
                    <div class="col-sm-6">

                      <select name="sup_id" class="form-control sup_id" id="sup_id" required><option value="">Select Supplier</option>    <?php echo fill_unit_select_box2($connect); ?></select>
                    </div>
                  </div>

                
                

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Total Amount</label>
                    <div class="col-sm-6">
                      <input type="number" value="<?php echo $row2['pur_price'] ?>" Readonly placeholder="Automatically Filled" name="total_amount1" id="total_amount1" class="form-control"  >
                    </div>
                  </div>               

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Total Discount</label>
                    <div class="col-sm-6">
                      <input type="number" id="discount_amount"  value="<?php echo $row2['pur_discount'] ?>" onkeyup="dis()" name="discount" class="form-control"  >
                    </div>
                  </div>              

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Payable Amount</label>
                    <div class="col-sm-6">
                      <input type="number" value="<?php $tm=$row2['pur_price']-$row2['pur_discount'];echo $tm; ?>" Readonly placeholder="Automatically Filled" class="form-control" name="payable_amount" id="payable_amount">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Payment</label>
                    <div class="col-sm-6">
                      <input type="number" value="<?php echo $row2['pur_paid'] ?>"  name="paid" id="payment" onkeyup="payment2()" required class="form-control"  >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Due</label>
                    <div class="col-sm-6">
                      <input type="number" value="<?php echo $row2['pur_due'] ?>" class="form-control"  name="due" id="due"  Readonly placeholder="Automatically Filled">
                    </div>
                  </div>

                  

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                      <button type="submit" name="update" class="btn btn-success btn-2">Update</button>
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
?>
<script type="text/javascript">
   var $com_id = $( '#com_id' ),
        $sup_id = $( '#sup_id' ),
    $options = $sup_id.find( 'option' );
    
$com_id.on( 'change', function() {
    $sup_id.html( $options.filter( '[name="' + this.value + '"]' ) );
} ).trigger( 'change' );

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