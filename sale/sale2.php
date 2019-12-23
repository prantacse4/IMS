
<?php  
$page ='sale';
  include 'header3.php';



date_default_timezone_set("Asia/Dhaka");

?>
  




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text2">S a l e</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sale</li>
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


       <div class="card">
        <div class="card-header">
              <h3 class="card-title card-title2">Sale Product</h3>
                <a href="sale.php" class="btn btn-success btn-add">Sale Records</a>
            </div>

            <div class="card-body">





  <form method="post" id="insert_form">

 <div class="contents">
  <h3 class="headingc">Sale</h3>
    <div class="d-flex">
      <div class="mr-auto p-2">

  <table class="table">
  <tbody>

     <tr>
      <th scope="row">Sale Date</th>
      <td><input name="sale_date" class="form-control" type="date" id="today2" value="" readonly></td>
    </tr>

    <tr>
      <th scope="row">Sale Type</th>
      <td>
        <select name="sale_type" class="form-control  sale_type" >
           <option selected value="Regular" >Regular</option>
          <option value="Wholesale" >Wholesale</option>
        </select>
       </td>
    </tr>
    
    <tr>
      <th scope="row">Customer</th>
    <td><select name="cus_id" class="form-control cus_id" required ><option value="">Select Customer</option><?php  ?></select></td>
    </tr>

    <tr>
      <th scope="row">Total Balance</th>
      <td><input  class="form-control" type="number" name="total_balance" value="" Readonly ></td>
    </tr>
    <tr>
       <th scope="row">Total Amount</th>
       <td><input class="form-control" type="number" name="sale_amount3" value="" readonly placeholder="Automatically Filled" id="total_amount1"></td>
    </tr>
  </tbody>
    </table>

  </div>

  <div class="p-2">
      <table class="table">
        <tbody>
         <tr>
          <th scope="row">Discount Type</th>
           <td><select onclick="discount2();" class="browser-default custom-select custom-select-lg mb-3" name="discount" id="dis" >
                 <option onclick="discount2();" value="2" selected>Amount</option>
                 <option onclick="discount2();" value="1">Perchantage</option>
                 
              </select>
            </td>
        </tr>

    <tr>
      <th scope="row">Total Discount</th>
      <td><input id="total_discount" onkeyup="discount2()" class="form-control" type="number" name="total_discount" value="" max='' ></td>
    </tr>

    <tr>
      <th scope="row">Discount Amount</th>
      <td><input  class="form-control" type="number" name="discount_amount" id="discount_amount" value="" Readonly placeholder="Automatically Filled" ></td>
    </tr> 

     <tr>
      <th scope="row">Payable Amount</th>
      <td><input  class="form-control" type="number" name="payable_amount" id="payable_amount" value="" Readonly placeholder="Automatically Filled" ></td>
    </tr> 
    <tr>
      <th scope="row">Payment</th>
      <td><input  class="form-control" type="number" name="total_payment" id="payment" onkeyup="payment2()" value="" required></td>
    </tr>
      <tr>
        <th scope="row">Due</th>
         <td><input  class="form-control" type="number" name="due" id="due" value="" Readonly placeholder="Automatically Filled" ></td>
       </tr>
      </tbody>
     </table>
  </div>
 </div>
</div>

<br>




<div class="contents">
  <h3 class="headingc c2">Sales Details <span><button type="button" name="add" data-toggle="modal" data-target="#add_data_Modal" class="pluss add">+</button></span></h3>

<!-- modal Start -->



<div id="add_data_Modal" class="modal fade" >
 <div class="modal-dialog modal-dialog1">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    
   </div>
   <h4 class="modal-title text-center">Sale Product</h4>
   <div class="modal-body modal-body1">
    <form method="post" id="insert_form">



      <div class="form-group row">
    <label  class="col-sm-2  col-form-label">Category</label>
    <div class="col-sm-10">
      <select name="product_category"  class="form-control" >
      <option selected value="Elecktronics">Elecktronics</option>  
      <option value="Fertilizer">Fertilizer</option>
     </select>
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-2  col-form-label">Product</label>
    <div class="col-sm-10">
     <select name="product_name"  class="form-control" >
      <option selected value="Mobile">Mobile</option>  
      <option value="Saar">Saar</option>
     </select>
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-2  col-form-label">Quantity</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" required name="qty"  placeholder="Enter in Number">
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-2  col-form-label">Purchasing Price</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="purchasing_price" value="1" readonly  placeholder="Automatically Filled">
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-2  col-form-label">Selling Price</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="selling_price"  required placeholder="Enter Selling Price">
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-2  col-form-label">Total Price</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="total_price" value="1"  placeholder="Enter in Number" readonly  placeholder="Automatically Filled">
    </div>
  </div>




     <br />
     <input type="submit" name="insert" id="insert" id="save" value="Insert" class="btn btn-success" />

    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>














<!-- 
  Modal Close -->
<div class="d-flex">
  <div class="mr-auto p-2 p234">

   
    <div class="table-repsonsive">
     <span id="error"></span>
     <table class="table" id="item_table">

      <tbody>
          <tr>
             <th scope="row"> </th>
             
             <th scope="row" class="text-center">Product</th>
             <th scope="row" class="text-center">Quantity</th>
             <th scope="row" class="text-center">Purchasing Price</th>
             <th scope="row" class="text-center">Selling Price</th>
             <th scope="row" class="text-center">Price</th>

          </tr>
      </tbody>
     </table>

    
     </div>

    </div>

  </div>
  </div>
<br>

<div align="center">
         <input type="submit" name="submit"  class="btn btn-info" value="Sale " />
     </div>

<br>
</form>



            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </section>

<?php  
  include '../inc/footer.php';
?>


 <script>
            $(document).on("click", "#save", function () {
                //get value of message 
                var message = $("#message").val();
                //check if value is not empty
                if (message == "") {
                    $("#error_message").html("Please enter message");
                    return false;
                } else {
                    $("#error_message").html("");
                }
                //Ajax call to send data to the insert.php
                $.ajax({
                    type: "POST",
                    url: "insert.php",
                    data: {message: message},
                    cache: false,
                    success: function (data) {
                        //Insert data before the message wrap div
                        $(data).insertBefore(".message-wrap:first");
                        //Clear the textarea message
                        $("#message").val("");
                    }
                });
            });
        </script>

<script>

  function calculate(x){
      var quan=document.getElementById('qty-'+x).value;
    var purchase=document.getElementById('sale-'+x).value;
    var bef=document.getElementById('total-'+x).value;
      document.getElementById('total-'+x).value=(quan*purchase);
      fun1();
     
    
  }
   function payment2(){
      var payable=document.getElementById("payable_amount").value;
  var pay=document.getElementById("payment").value;
  document.getElementById("due").value=payable-pay;
  }
  function discount2(){
      var z;
    var ans;
    var total=document.getElementById("total_amount1").value;
    if(total==''){total=0;}
     var x=document.getElementById("total_discount").value;
     ans=x;
     var tmp=document.getElementById("dis").value;
     
     if(tmp=='1'){  
         if(x<=100){
            ans=(((total)/100)*x);
            document.getElementById("discount_amount").value=ans;
            document.getElementById("payable_amount").value=total-ans;
            }
            else{
              x=parseInt(x/10);
              document.getElementById("total_discount").value=x;
            }
     }
     else{
      document.getElementById("discount_amount").value=ans;
      document.getElementById("payable_amount").value=total-ans;
    }
      payment2();
  }

document.querySelector("#today2").valueAsDate = new Date();


  function fun1(){
  var total=0;
  $('.total_amount').each(function(){
       var tm=$(this).val();
       total+=parseInt(tm, 10);
  });
  document.getElementById("total_amount1").value=total;
  discount2();
  payment2();
}


</script>