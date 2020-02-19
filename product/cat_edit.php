<?php
$page='';
$page = 'product_category';
include 'header3.php';
if ($user_level == '0') {
    echo "<script>window.location.href='category.php'</script>";
  }
$id = $_GET['id'];

if(isset($_POST['update']))
{
  $cat_name = mysqli_real_escape_string($db->link, $_POST['cat_name']);
  $cat_desc = mysqli_real_escape_string($db->link, $_POST['cat_desc']);
  $query = "UPDATE category
  SET
    cat_name='$cat_name',
    cat_desc = '$cat_desc'
    WHERE cat_id =$id";
  $update = $db->update($query);
  if($update){
       echo "<script>window.location.href='category.php'</script>"; 
     }
     else{
      echo '$error';
     }
}
if (isset($_POST['goback'])) {
  echo "<script>window.location.href='category.php'</script>"; 
}


$query = "SELECT * FROM category WHERE cat_id = $id";
$row = $db->select($query)->fetch_assoc();
?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Product Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item "><a href="category.php">Category</a></li>
              <li class="breadcrumb-item active">Update Category</li>
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
                <h3 class="card-title">Product Category Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="cat_edit.php?id=<?php echo $id; ?>" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Category Name</label>
                    <div class="col-sm-6">
                      <input type="text" name="cat_name" value="<?php echo $row['cat_name'] ?>" class="form-control"  >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-6">
                      <input type="text" value="<?php echo $row['cat_desc'] ?>" name="cat_desc" class="form-control"  >
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                      <button type="submit" name="update" class="btn btn-success btn-2">Update</button>
                      <button type="reset" class="btn btn-danger btn-2">Reset</button>
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">Go Back</button>
                      

                     <!--  href="category.php" -->
                      
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->






<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Confirm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure to go back?
      </div>
      <div class="modal-footer">
          <button type="button" onclick="javascript:window.location.href='category.php';" name="goback" class="btn btn-primary">Confirm</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>






          <!--   modal end
 -->
	   
    </div>
  </section>
<!-- End Main content -->

<?php
include '../inc/footer.php';
?>