<?php
  include '../config/config.php';
  include '../config/Database.php';

 ?>
 <?php 
  $db=new Database();
  $query="SELECT * FROM investment";
  $read=$db->select($query);

if (isset($_GET['id'])) {
   $id = $_GET['id'];
   $query = "delete from investment where inv_id='$id'";
   $result = $db->delete($query);
    if($result){
       echo "<script>alert('Deleted successfully');</script>";
// Code for redirection
    echo "<script>window.location.href='investment.php'</script>"; 
    }
   }

  ?>