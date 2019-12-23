
<?php  
$page ='salary';
  include 'header3.php';
  $query="SELECT * FROM salary";
  $read=$db->select($query);

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text2">S a l a r y</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Salary</li>
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
              <h3 class="card-title card-title2">Salary Information</h3>
                <a href="salary_create.php" class="btn btn-success btn-add"><i class="fa fa-plus"></i> Add Salary</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped forproducttable tablepranta">
                <thead class="theadcolor">
                <tr>
                  <th>No</th>
                  <th>Employee Name</th>
                  <th>Salary Amount</th>
                  <th>Salary Payment</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody class="tablepranta2">
        <?php 
          if ($read) {
            $cnt=0;
            while ($row=$read->fetch_assoc()) {
              $id=$row['emp_id'];
              $cnt++;
                $query2="SELECT * FROM employee where emp_id='$id'";
                    $row2=$db->select($query2)->fetch_assoc();
       ?>

                <tr>
                  <td><?php echo $cnt; ?></td>
                  <td><?php echo $row2['emp_name']; ?></td>
                  <td><?php echo $row['sal_amount']; ?></td>
                  <td><?php echo $row['sal_payment']; ?></td>
                  
                  <td>

                    <button class="btn btn-info" data-toggle="modal" data-target="#myModal-<?php echo $row['sal_id']; ?>">
                        <span class="far fa-eye"></span>
                      </button> 





<!-- View Modal -->

                       <div class="modal fade" id="myModal-<?php echo $row['sal_id']; ?>" role="dialog">
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
                <h3 class="card-title">Salary Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="" method="post">
                <div class="card-body">

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Employee Name</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row2['emp_name']; ?></p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Salary Amount</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['sal_amount']; ?></p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Salary Payment</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['sal_payment']; ?></p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Salary Due</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['sal_due']; ?></p>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Salary Advance</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['sal_advance']; ?></p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Advance</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['advance_date']; ?></p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Salary Month</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['sal_month']; ?></p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Salary Payment Date</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['sal_payment_date']; ?></p>
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



















                  <a href="salary_edit.php?id=<?php echo $row['sal_id']; ?>" style="color: white;"> 
                    <button class="btn btn-success">
                      <span class="fa fa-edit"></span>
                    </button>
                  </a>
                  <a href="salary_delete.php?id=<?php echo $row['sal_id']; ?>" style="color: white;"> 
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