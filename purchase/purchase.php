
<?php  
$page ='company';
  include 'header3.php';
  $query="SELECT * FROM purchase order by pur_id DESC";
  $read=$db->select($query);

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text2">P u r c h a s e</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Purchase</li>
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
              <h3 class="card-title card-title2">Purchase Records</h3>
                <a href="purchase_product.php" class="btn btn-success btn-add"><i class="fa fa-plus"></i> Purchase</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped forproducttable tablepranta">
                <thead class="theadcolor">
                <tr>
                  <th>Purchase Code</th>
                  <th>Supplier</th>
                  <th>Cost</th>
                  <th>View</th>
                </tr>
                </thead>
                <tbody class="tablepranta2">
        <?php 
          if ($read) {
            while ($row=$read->fetch_assoc()) {
       ?>

                <tr>
                  <td><?php echo $row['pur_code']; ?></td>
                  <td><?php 
                  $id=$row['pur_supplier'];
                   $query2="SELECT * FROM supplier where sup_id='$id'";
                   
                    $row2=$db->select($query2)->fetch_assoc();

                    $id2=$row['pur_company'];
                   $query3="SELECT * FROM company where com_id='$id2'";
                   
                    $row3=$db->select($query3)->fetch_assoc();

                  echo $row2['sup_name']; ?></td>
                  <td><?php echo $row['pur_price']; ?></td>
                  <td>

                    <button class="btn btn-info" data-toggle="modal" data-target="#myModal-<?php echo $row['pur_id']; ?>">
                        <span class="far fa-eye"> </span>
                      </button> 





<!-- View Modal -->

                       <div class="modal fade" id="myModal-<?php echo $row['pur_id']; ?>" role="dialog">
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
                <h3 class="card-title">Purchase Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="company.php" method="post">
                <div class="card-body">

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Purchase Code</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['pur_code']; ?></p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['pur_date']; ?></p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Company</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row3['com_name']; ?></p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Supplier</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row2['sup_name']; ?></p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Total Price</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['pur_price']; ?></p>
                    </div>
                  </div>

                   <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Paid</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['pur_paid']; ?></p>
                    </div>
                  </div>

                   <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Due</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['pur_due']; ?></p>
                    </div>
                  </div>

                   <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Discount</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['pur_discount']; ?></p>
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