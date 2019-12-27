
<?php  
$page ='refund';
  include 'header3.php';

if(isset($_POST['submit']))
{
  $ref_type=mysqli_real_escape_string($db->link, $_POST['ref_type']);
  $ref_number=mysqli_real_escape_string($db->link, $_POST['ref_number']);
  $pro_id=mysqli_real_escape_string($db->link, $_POST['pro_id']);
  $pro_qty=mysqli_real_escape_string($db->link, $_POST['pro_qty']);
  $pro_price=mysqli_real_escape_string($db->link, $_POST['pro_price']);
  $pro_total_amount=mysqli_real_escape_string($db->link, $_POST['total_amount']);
  $ref_by=mysqli_real_escape_string($db->link, $_POST['ref_by']);
  $ref_note=mysqli_real_escape_string($db->link, $_POST['ref_note']);


    $query="INSERT INTO refund(ref_type,ref_number,pro_id,pro_qty,pro_price,pro_total_amount,ref_by,ref_note) VALUES('$ref_type','$ref_number','$pro_id','$pro_qty','$pro_price','$pro_total_amount','$ref_by','$ref_note')";
    $insert=$db->insert($query);
    if($insert){
       echo "<script>alert('Record Created successfully');</script>";
       echo "<script>window.location.href='refund.php'</script>"; 
     }
     else{
      echo '$error';
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
            <h1 class="m-0 text-dark">New Refund</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item "><a href="refund.php">Refund</a></li>
              <li class="breadcrumb-item active">New Refund</li>
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
                <h3 class="card-title">Refund Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="" method="post">
                <div class="card-body">

                 <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"><span style="color:red;">*</span>Refund By</label>
                                        <div class="col-sm-6">
                      <select class="browser-default custom-select" name="ref_by" required>
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
                    <label for="inputEmail3" class="col-sm-2 col-form-label"><span style="color:red;">*</span>Refund Type</label>
                     <div class="col-sm-6">
                       <select class="browser-default custom-select" name="ref_type" required>
                         <option selected value=""  >Select Type</option>
                         <option value="purchase"  >Purchase</option>
                         <option value="sale" >Sale</option>
                       </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label"><span style="color:red;">*</span>Refund Number</label>
                    <div class="col-sm-6">
                      <input type="text" name="ref_number" class="form-control" placeholder="Enter number" required >
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Category</label>
                                        <div class="col-sm-6">
                      <select class="browser-default custom-select" name="cat_id" id="cat_id" >
                        <option selected value="" >Select Category</option>
        <?php 
            $query4="SELECT * FROM category";
            $read4=$db->select($query4);
            if ($read4) {
          while ($row4=$read4->fetch_assoc()) {

               ?>

                <option value="<?php echo $row4['cat_id']; ?>"><?php echo $row4['cat_name']; ?></option>
           <?php 
             }
           }
          ?>
                      </select>
                      
                    </div>
                  </div>

        <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"><span style="color:red;">*</span>Product</label>
                                        <div class="col-sm-6">
                      <select  class="browser-default custom-select" name="pro_id" id="pro_id" required>
                        <option selected value="" name=""  >Select Product</option>
        <?php 
            $query5="SELECT * FROM product";
            $read5=$db->select($query5);
            if ($read5) {
          while ($row5=$read5->fetch_assoc()) {

               ?>
        <option onclick="price()" value="<?php echo $row5['pro_id']; ?>" name="" ><?php echo $row5['pro_name']; ?></option>
        <option onclick="price( )" value="<?php echo $row5['pro_id']; ?>" name="<?php echo $row5['pro_cat']; ?>" ><?php echo $row5['pro_name']; ?></option>
           <?php 
             }
           }
          ?>
                      </select>
                      
                    </div>
                  </div>


                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Quantity</label>
                    <div class="col-sm-6">
                      <input type="number" onkeyup="amount()" id="pro_qty" name="pro_qty" class="form-control pro_qty" >
                    </div>
                  </div>



                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-6">
                      <input type="number" name="pro_price" id="pro_price" class="form-control pro_price"   onkeyup="amount()" >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Total Amount</label>
                    <div class="col-sm-6">
                      <input type="number" name="total_amount" id="total_amount" class="form-control"  placeholder="Automatically Filled" value="" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Note</label>
                    <div class="col-sm-6">
                      <input type="text" name="ref_note"  class="form-control"  placeholder="Notes" value="" >
                    </div>
                  </div>
                  

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                      <button type="submit" name="submit" class="btn btn-2 btn-success">Submit</button>
                      <button type="reset" class="btn btn-2 btn-danger">Reset</button>
                      <a class="btn btn-info btn-2" href="refund.php">Go Back</a>
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
  var $cat_id = $( '#cat_id' ),
        $pro_id = $( '#pro_id' ),
    $options = $pro_id.find( 'option' );
    
$cat_id.on( 'change', function() {
    $pro_id.html( $options.filter( '[name="' + this.value + '"]' ) );
} ).trigger( 'change' );

function amount(){
  var a=document.getElementById("pro_price").value;
  var b=document.getElementById("pro_qty").value;

  document.getElementById("total_amount").value=(a*b);

}
</script>