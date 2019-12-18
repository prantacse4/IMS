
<?php  
$page ='company';
  include 'header3.php';
  $query="SELECT * FROM sale order by sale_id DESC";
  $read=$db->select($query);

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
              <h3 class="card-title card-title2">Sale Records</h3>
                <a href="sale_product.php" class="btn btn-success btn-add"><i class="fa fa-plus"></i>Add Sale</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped forproducttable tablepranta">
                <thead class="theadcolor">
                <tr>
                  <th>Sale Code</th>
                  <th>Customer</th>
                  <th>Price</th>
                  <th>View</th>
                </tr>
                </thead>
                <tbody class="tablepranta2">
        <?php 
          if ($read) {
            while ($row=$read->fetch_assoc()) {
       ?>

                <tr>
                  <td><?php echo $row['sale_id']; ?></td>
                  <td><?php 
                  $id=$row['sale_cus'];
                   $query2="SELECT * FROM customer where cus_id='$id'";
                   
                    $row2=$db->select($query2)->fetch_assoc();

                    $name=$row2['cus_name'];
                    $name.="(";
                    $name.=$row2['cus_identifier'];
                    $name.=')';

                  echo $name; ?>
                    
                  </td>
                  <td><?php echo $row['sale_amount']; ?></td>
                  <td>

                    <button class="btn btn-info" data-toggle="modal" data-target="#myModal-<?php echo $row['sale_id']; ?>">
                        <span class="far fa-eye"> </span>
                      </button> 


<!-- View Modal -->

                       <div class="modal fade" id="myModal-<?php echo $row['sale_id']; ?>" role="dialog">
                       <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
                  <div class="modal-content">
                   <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                 
                   </div>
                    <div class="modal-body">
                       <section class="content">
      <div class="container-fluid">
        <!-- main body start from here -->

        <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Sale Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="view_sale.php" method="post">
                <div class="card-body">

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Sale Code</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['sale_id']; ?></p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['sale_date']; ?></p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Customer</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $name; ?></p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Sale Amount</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['sale_amount']; ?></p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Payment</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['sale_payment']; ?></p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Discount</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['sale_discount']; ?></p>
                    </div>
                  </div>

                   

                   <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Due</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['sale_due']; ?></p>
                    </div>
                  </div>

                   <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Type</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['sale_type']; ?></p>
                    </div>
                  </div>

                  
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label"></label>
                    
                
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
    </div>
  </section>
         </div>

                     <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>

               </div>
                </div> 

              </div>


         <!--      End Modal -->



















                 
                   
                  </td>
                </tr>
        <?php } } ?>
              </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </section>

<?php  
  include '../inc/footer.php';
?>