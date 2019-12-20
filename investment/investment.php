
<?php  
$page ='investment';
  include 'header3.php';
  $query="SELECT * FROM investment";
  $read=$db->select($query);

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text2">I n v e s m e n t</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Investment</li>
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
              <h3 class="card-title card-title2">Investment Information</h3>
                <a href="investment_create.php" class="btn btn-success btn-add"><i class="fa fa-plus"></i> Add Investment</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped forproducttable tablepranta">
                <thead class="theadcolor">
                <tr>
                  <th>Investment By</th>
                  <th>Investment Added By</th>
                  <th>Investment Amount</th>
                  <th>Investment Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody class="tablepranta2">
        <?php 
          if ($read) {
            while ($row=$read->fetch_assoc()) {
       ?>

                <tr>
                  <td><?php echo $row['inv_by']; ?></td>
                  <td><?php echo $row['added_by']; ?></td>
                  <td><?php echo $row['inv_amount']; ?></td>
                  <td><?php echo $row['inv_date']; ?></td>
                  <td>

                    <button class="btn btn-info" data-toggle="modal" data-target="#myModal-<?php echo $row['inv_id']; ?>">
                        <span class="far fa-eye"></span>
                      </button> 





<!-- View Modal -->

                       <div class="modal fade" id="myModal-<?php echo $row['inv_id']; ?>" role="dialog">
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
                <h3 class="card-title">Investment Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="investment.php" method="post">
                <div class="card-body">

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Investment By</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['inv_by']; ?></p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Investment Added By</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['added_by']; ?></p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Investment Amount</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['inv_amount']; ?></p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Investment Date</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['inv_date']; ?></p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['inv_desc']; ?></p>
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



















                  <a href="company_edit.php?id=<?php echo $row['inv_id']; ?>" style="color: white;"> 
                    <button class="btn btn-success">
                      <span class="fa fa-edit"></span>
                    </button>
                  </a>
                  <a href="company_delete.php?id=<?php echo $row['inv_id']; ?>" style="color: white;"> 
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