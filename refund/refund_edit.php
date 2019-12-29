<?php 
$page ='company';
  include 'header3.php';
if ($user_level == '0') {
    echo "<script>window.location.href='refund.php'</script>";
  }
$id="";
$id = $_GET['id'];
if (isset($_POST['update'])) {
  $ref_type=mysqli_real_escape_string($db->link, $_POST['ref_type']);
  $ref_number=mysqli_real_escape_string($db->link, $_POST['ref_number']);
  $pro_id=mysqli_real_escape_string($db->link, $_POST['pro_id']);
  $pro_qty=mysqli_real_escape_string($db->link, $_POST['pro_qty']);
  $pro_price=mysqli_real_escape_string($db->link, $_POST['pro_price']);
  $pro_total_amount=mysqli_real_escape_string($db->link, $_POST['total_amount']);
  $ref_by=mysqli_real_escape_string($db->link, $_POST['ref_by']);
  $ref_note=mysqli_real_escape_string($db->link, $_POST['ref_note']);
  $query = "UPDATE refund
  SET
        ref_type='$ref_type',
        ref_number='$ref_number',
        pro_id='$pro_id',
        pro_qty='$pro_qty',
        pro_price='$pro_price',
        pro_total_amount='$pro_total_amount',
        ref_by='$ref_by',
        ref_note='$ref_note'
    WHERE ref_id ='$id' ";
  $update = $db->update($query);

    echo "<script>alert('Record Updated successfully');</script>";
    echo "<script>window.location.href='refund.php'</script>"; 
    
}
if(isset($_POST['cancel'])){
  echo "<script>window.location.href='refund.php'</script>"; 
}
$query2 = "SELECT * FROM refund WHERE ref_id = $id ";
$row = $db->select($query2)->fetch_assoc();
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Refund</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item "><a href="refund.php">Refund</a></li>
              <li class="breadcrumb-item active">Edit Refund</li>
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
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Refund By</label>
                                        <div class="col-sm-6">
                      <select class="browser-default custom-select" name="ref_by">
        <?php 
            $query4="SELECT * FROM users";
            $read4=$db->select($query4);
            if ($read4) {
          while ($row4=$read4->fetch_assoc()) {
            if($row['ref_by']==$row4['user_fullname']){
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
                    <label for="inputEmail3" class="col-sm-2 col-form-label"><span style="color:red;">*</span>Refund Type</label>
                     <div class="col-sm-6">
                       <select class="browser-default custom-select" name="ref_type"  onchange="price(this)"  required>
                         <?php 
                            if($row['ref_type']=='purchase'){
                              ?>
                               <option value="purchase" selected >Purchase</option>
                              <?php
                            }
                            else{
                              ?>
                                <option value="sale" selected >Sale</option>
                              <?php
                            }

                          ?>
                        
                         
                       </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label"><span style="color:red;">*</span>Refund Number</label>
                    <div class="col-sm-6">
                      <input type="text" name="ref_number" class="form-control" placeholder="Enter number" required value="<?php echo $row['ref_number']; ?>" >
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Category</label>
                                        <div class="col-sm-6">
                      <select class="browser-default custom-select" name="cat_id" id="cat_id">
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
                        <option value="" name=""  >Select Product</option>
        <?php 
            $query5="SELECT * FROM product";
            $read5=$db->select($query5);
            if ($read5) {
          while ($row5=$read5->fetch_assoc()) {
            if($row['pro_id']==$row5['pro_id']){
              ?>
                <option  selected value="<?php echo $row5['pro_id']; ?>" name="" ><?php echo $row5['pro_name']; ?></option>
              <?php
            }
            else{
              ?>
              <option  value="<?php echo $row5['pro_id']; ?>" name="" ><?php echo $row5['pro_name']; ?></option>
              <?php
            }

               ?>
        
        <option value="<?php echo $row5['pro_id']; ?>" name="<?php echo $row5['pro_cat']; ?>" ><?php echo $row5['pro_name']; ?></option>
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
                      <input type="number" onkeyup="amount()" id="pro_qty" name="pro_qty" class="form-control pro_qty" value="<?php echo $row['pro_qty']; ?>">
                    </div>
                  </div>



                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-6">
                      <input type="number" name="pro_price" id="pro_price" class="form-control pro_price"   onkeyup="amount()" value="<?php echo $row['pro_price']; ?>">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Total Amount</label>
                    <div class="col-sm-6">
                      <input type="number" name="total_amount" id="total_amount" class="form-control"  placeholder="Automatically Filled" value="<?php echo $row['pro_total_amount']; ?>" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Note</label>
                    <div class="col-sm-6">
                      <input type="text" name="ref_note"  class="form-control"  placeholder="Notes" value="<?php echo $row['ref_note']; ?>" >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                      <button type="submit" name="update" class="btn btn-2 btn-success">Update</button>
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