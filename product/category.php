<?php
  $page='';
  $page = 'product_category';
	include 'header3.php';
  $query="SELECT * FROM category";
  $read=$db->select($query);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text2">P r o d u c t &nbsp; C a t e g o r y</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
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
              <h3 class="card-title card-title2">Product Category Information</h3>
                <a href="cat_create.php" class="btn btn-success btn-add"><i class="fa fa-plus"></i> Add Category</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped  tablepranta">
                <thead class="theadcolor">
                <tr>
                  <th>Category Name</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody class="tablepranta2">
<?php
     if($read) {
    while($row=$read->fetch_assoc()) {
?>

                <tr>
                  <td><?php echo $row['cat_name'];?></td>
                  <td><?php echo $row['cat_desc'];?></td>
                  <td>
                    <button class="btn btn-info" data-toggle="modal" data-target="#myModal-<?php echo $row['cat_id']; ?>">
                        <span class="far fa-eye"></span>
                      </button> 


              <div class="modal fade" id="myModal-<?php echo $row['cat_id']; ?>" role="dialog">
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
                <h3 class="card-title">Category Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Category Name</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">: <?php echo $row['cat_name']; ?></p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Category Description</label>
                    <div class="col-sm-6">
                      <p style="padding-top :8px;">:  <?php echo $row['cat_desc']; ?></p>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                  </div>

                </div>
                <!-- /.card-body -->
            
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




                  <a href="cat_edit.php?id=<?php echo $row['cat_id']; ?>" style="color: white;"> 
                    <button class="btn btn-success">
                      <span class="fa fa-edit"></span>
                    </button>
                  </a>
                  <a href="cat_delete.php?id=<?php echo $row['cat_id']; ?>" style="color: white;"> 
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