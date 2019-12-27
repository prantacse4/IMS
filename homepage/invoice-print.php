<?php
include "../inc/header3.php";



$e=0;
$f="";
if (isset( $_SESSION['email'])) {
  $email =  $_SESSION['email'];
  $f = $email;
  $f='<div class="text-center"><a class="btn btn-danger" href="logout.php">Logout</a></div> ';
  $e=1;
}

?>

 


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


        
        <H1>W E L C O M E</H1>
               <div class="card">
            <div class="card-header">
              <h3 class="card-title">Quick Links</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table">
                <tr>
                  <th>
                    <a href="../product/product.php"><i class="nav-icon fas fa-luggage-cart quicklinkicon"></i> Products</a>
                  </th>
                  <th>
                    <a href="../company/company.php"><i class="nav-icon fas fa-building quicklinkicon"></i> Company</a>
                  </th>
                  <th>
                    <a href="../purchase/purchase.php"><i class="nav-icon fas fa-baby-carriage quicklinkicon"></i> Purchase</a>
                  </th>
                  
                
                  <th>
                    <a href="../sale/sale.php"><i class="nav-icon fas fa-shopping-cart quicklinkicon"></i> Sale</a>
                  </th>
                 
                  <th>
                    <a href="../supplier/supplier.php"><i class="nav-icon fas fa-shapes quicklinkicon"></i> Supplier</a>
                  </th>

                </tr>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.end assets card--->

        <!-- Assets: main body start from here -->
        <div class="row">
       <div class="card col-md-5">
            <div class="card-header" style="background-color: #34495e; color: white;>
              <h3 class="card-title">Business Outstandings</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">


                <tr>
                  <td>Total Asset</td>
                  <td>100000</td>
                </tr>
                 <tr>
                  <td>Total Investment</td>
                  <td>5000</td>
                </tr>
                <tr>
                  <td>Total Sale</td>
                  <td>2000</td>
                </tr>
                <tr>
                  <td>Total Profit</td>
                  <td>2000</td>
                </tr>
                <tr>
                  <td>Total Expenses</td>
                  <td>2000</td>
                </tr>
              </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.end assets card--->

           <!-- purchase : main body start from here -->

       <div class="card col-md-6 offset-md-1">
            <div class="card-header" style="background-color: #34495e; color: white;>
              <h3 class="card-title">Expenses Summary</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">


                <tr>
                  <td>Family Expenses</td>
                  <td>100000</td>
                </tr>
                 <tr>
                  <td>Business Expenses</td>
                  <td>5000</td>
                </tr>
                <tr>
                  <td>Salary</td>
                  <td>2000</td>
                </tr>
                <td>Other Expenses</td>
                  <td>2000</td>
                </tr>
              </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.products end card--->

        </div>
        <!-- main body end here -->
<!-- Assets: main body start from here -->
        <div class="row">
       <div class="card col-md-5">
            <div class="card-header" style="background-color: #34495e; color: white;>
              <h3 class="card-title">Products Summary</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">


                <tr>
                  <td>Number of products</td>
                  <td>10200000</td>
                </tr>
                 <tr>
                  <td>Purchase Price</td>
                  <td>1245000</td>
                </tr>
                <tr>
                  <td>Wholesale Price</td>
                  <td>1245000</td>
                </tr>
                <tr>
                  <td>MRP Price</td>
                  <td>1245000</td>
                </tr>
              </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.end assets card--->

           <!-- purchase : main body start from here -->

       <div class="card col-md-6 offset-md-1">
            <div class="card-header" style="background-color: #34495e; color: white;>
              <h3 class="card-title">Products Outstandings</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">


                <tr>
                  <td>Products Name</td>
                  <td>Quantity</td>
                  <td>Purchase Price</td>
                </tr>
                 <tr>
                  <td>Urea</td>
                  <td>50 kg</td>
                  <td>5000</td>
                </tr>
                <tr>
                  <td>Urea</td>
                  <td>50 kg</td>
                  <td>5000</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td>
                    <button class="btn btn-info">View Details</button>
                  </td>
                </tr>
              </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.products end card--->

        </div>
        <!-- main body end here -->

<!-- Purchase: main body start from here -->
        <div class="row">
       <div class="card col-md-5">
            <div class="card-header" style="background-color: #34495e; color: white;>
              <h3 class="card-title">Purchase</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">


                <tr>
                  <td>Total Amount </td>
                  <td>100000</td>
                </tr>
                 <tr>
                  <td>Total Payment</td>
                  <td>5000</td>
                </tr>
                <tr>
                  <td>Discount Amount</td>
                  <td>2000</td>
                </tr>
                <tr>
                  <td>Due Amount</td>
                  <td>2000</td>
                </tr>
              </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.end purchase card--->

           <!-- Sale : main body start from here -->

       <div class="card col-md-6 offset-md-1">
            <div class="card-header" style="background-color: #34495e; color: white;>
              <h3 class="card-title">Sales</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">


                <tr>
                  <td>Total Amount</td>
                  <td>100000</td>
                </tr>
                 <tr>
                  <td>Total Payment</td>
                  <td>5000</td>
                </tr>
                <tr>
                  <td>Discount Amount</td>
                  <td>5000</td>
                </tr>
                <tr>
                  <td>Due Amount</td>
                  <td>2000</td>
                </tr>
              </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.Purchase end card--->

        </div>
        <!-- main body end here -->

<!-- Outstandings: main body start from here -->
        <div class="row">
       <div class="card col-md-5">
            <div class="card-header" style="background-color: #34495e; color: white;>
              <h3 class="card-title">Purchase Outstandings</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">


                <tr>
                  <td>Supplier</td>
                  <td>Total Balance</td>
                  <td>Due Balance</td>
                </tr>
                 <tr>
                  <td>ACI</td>
                  <td>5000</td>
                  <td>1000</td>
                </tr>
                <tr>
                  <td>ACI</td>
                  <td>5000</td>
                  <td>1000</td>
                </tr>
                 <tr>
                  <td>ACI</td>
                  <td>5000</td>
                  <td>1000</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td>
                    <button class="btn btn-info">View Details</button>
                  </td>
                </tr>
              </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.end assets card--->

           <!-- purchase : main body start from here -->

       <div class="card col-md-6 offset-md-1">
            <div class="card-header " style="background-color: #34495e; color: white;">
              <h1 class="card-title">Sales Outstandings</h1>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">


                <tr>
                  <td>Customers</td>
                  <td>Total Balance (Tk)</td>
                  <td>Due Balance (Tk)</td>
                </tr>
                 <tr>
                  <td>Abdur Rashid</td>
                  <td>2000</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>Abdur Rashid</td>
                  <td>2000</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td>Abdur Rashid</td>
                  <td>2000</td>
                  <td>500</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td>
                    <button class="btn btn-info">View Details</button>
                  </td>
                </tr>
              </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>



          <!-- Purchase end card--->





        <!-- main body start from here -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
  <?php 

  include "../inc/footer.php";
  echo "<script>window.location.href='index.php'</script>"; 
  ?>