
<?php  
$page ='salary';
  include 'header3.php';

if(isset($_POST['submit']))
{
  $emp_id=mysqli_real_escape_string($db->link, $_POST['emp_id']);
  $sal_amount=mysqli_real_escape_string($db->link, $_POST['sal_amount']);
  $sal_payment=mysqli_real_escape_string($db->link, $_POST['sal_payment']);
  $sal_due=mysqli_real_escape_string($db->link, $_POST['due']);
  $sal_advance="";
  $advance_date="";
  $sal_month=mysqli_real_escape_string($db->link, $_POST['sal_month']);
  $sal_payment_date=mysqli_real_escape_string($db->link, $_POST['date']);


    $query="INSERT INTO salary(emp_id,sal_amount,sal_payment,sal_due,sal_advance,advance_date,sal_month,sal_payment_date) VALUES('$emp_id','$sal_amount','$sal_payment','$sal_due','$sal_advance','$advance_date','$sal_month','$sal_payment_date')";
    $insert=$db->insert($query);
    if($insert){
       echo "<script>alert('Record Created successfully');</script>";
       echo "<script>window.location.href='salary.php'</script>"; 
     }
     else{
      echo '$error';
     }
}
date_default_timezone_set("Asia/Dhaka");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Salary</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item "><a href="refund.php">Salary</a></li>
              <li class="breadcrumb-item active">Add Salary</li>
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
                <h3 class="card-title">Salary Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="" method="post">
                <div class="card-body">


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"><span style="color:red;">*</span>Employee</label>
             <div class="col-sm-6">
                <select class="browser-default custom-select" name="emp_id" id="emp_id" required>
                         <option selected value=""  >Select Type</option>
           <?php 
            $query2="SELECT * FROM employee";
            $read2=$db->select($query2);
            if ($read2) {
               while ($row2=$read2->fetch_assoc()) {

               ?>
              <option value="<?php echo $row2['emp_id']; ?>" data-rc="<?php echo $row2['emp_salary']; ?>"  ><?php echo $row2['emp_name']; ?></option>
                   <?php }} ?>
                       </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Salary Amount</label>
                    <div class="col-sm-6">
                      <input type="number" name="sal_amount" id="sal_amount" class="form-control" placeholder="Automatically Filled"  readonly>
                    </div>
                  </div>


                 

                  <div class="form-group row">
                   <label  class="col-sm-2 col-form-label"><span style="color:red;">*</span>Payment</label>
                    <div class="col-sm-6">
                      <input type="number" id="sal_payment" name="sal_payment" class="form-control">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Due</label>
                    <div class="col-sm-6">
                      <input type="number" name="due" id="due" class="form-control" readonly>
                    </div>
                  </div>

                 
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label"><span style="color:red;">*</span>Month</label>
                     <div class="col-sm-6">
                       <select class="browser-default custom-select" name="sal_month" required>
                         <option selected value=""  >Select Type</option>
                          <option value="january" >January</option>
                         <option value="february" >February</option>
                         <option value="march" >March</option>
                         <option value="april" >April</option>
                         <option value="may" >May</option>
                         <option value="jun" >Jun</option>
                         <option value="july" >July</option>
                         <option value="august" >August</option>
                         <option value="september" >September</option>
                         <option value="october" >October</option>
                         <option value="november" >November</option>
                         <option value="december" >December</option>

                       </select>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-6">
                      <input type="date" name="date" id="date" class="form-control due" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                      <button type="submit" name="submit" class="btn btn-2 btn-success">Submit</button>
                      <button type="reset" class="btn btn-2 btn-danger">Reset</button>
                      <a class="btn btn-info btn-2" href="salary.php">Go Back</a>
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
  function payment(){
  var aa=document.getElementById("sal_amount").value;
  var bb=document.getElementById("sal_payment").value;
  document.getElementById("sal_payment").value=bb;
  document.getElementById("due").value=aa-bb;
}

  var $cat_id = $( '#cat_id' ),
        $pro_id = $( '#pro_id' ),
    $options = $pro_id.find( 'option' );
    
$cat_id.on( 'change', function() {
    $pro_id.html( $options.filter( '[name="' + this.value + '"]' ) );
} ).trigger( 'change' );

var selection = document.getElementById("emp_id");
selection.onchange = function(event){
  var rc = event.target.options[event.target.selectedIndex].dataset.rc;
  document.getElementById("sal_amount").value=rc;
};

var selection2 = document.getElementById("sal_payment");
selection2.onchange = function(event){
  
  document.getElementById("due").value='222';
};
document.querySelector("#date").valueAsDate = new Date();

</script>