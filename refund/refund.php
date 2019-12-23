
<?php  
$page ='refund';
  include 'header3.php';
  $query="SELECT * FROM refund";
  $read=$db->select($query);

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text2">R e f u n d</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Refund</li>
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
              <h3 class="card-title card-title2">Refund Information</h3>
                <a href="refund_create.php" class="btn btn-success btn-add"><i class="fa fa-plus"></i> New Refund</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped forproducttable tablepranta">
                <thead class="theadcolor">
                <tr>
                  <th>No</th>
                  <th>Refund Type</th>
                  <th>Refund No</th>
                  <th>Product</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody class="tablepranta2">
        <?php 
          if ($read) {
            $cnt=0;
            while ($row=$read->fetch_assoc()) {
              $id=$row['pro_id'];
              $cnt++;
                $query2="SELECT * FROM product where pro_id='$id'";
                    $row2=$db->select($query2)->fetch_assoc();
       ?>

                <tr>
                  <td><?php echo $cnt; ?></td>
                  <td><?php echo $row['ref_type']; ?></td>
                  <td><?php echo $row['ref_number']; ?></td>
                  <td><?php echo $row2['pro_name']; ?></td>
                  <td>

                    <button class="btn btn-info" data-toggle="modal" data-target="#myModal-<?php echo $row['ref_id']; ?>">
                        <span class="far fa-eye"></span>
                      </button> 





<!-- View Modal -->

                       <div class="modal fade" id="myModal-<?php echo $row['ref_id']; ?>" role="dialog">
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
                <h3 class="card-title">Refund Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="" method="post">
                <div class="card-body">

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Refund Type</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['ref_type']; ?></p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Refund No</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['ref_number']; ?></p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Product</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row2['pro_name']; ?></p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Quantity</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['pro_qty']; ?></p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['pro_price']; ?></p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Total Amount</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['pro_total_amount']; ?></p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Refund Date</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['ref_date']; ?></p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Refund By</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['ref_by']; ?></p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Note</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['ref_note']; ?></p>
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



















                  <a href="refund_edit.php?id=<?php echo $row['ref_id']; ?>" style="color: white;"> 
                    <button class="btn btn-success">
                      <span class="fa fa-edit"></span>
                    </button>
                  </a>
                  <a href="refund_delete.php?id=<?php echo $row['com_id']; ?>" style="color: white;"> 
                    <button class="btn btn-danger">
                      <span class="fa fa-trash-alt"></span>
                    </button>
                  </a>
                   
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