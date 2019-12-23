
<?php
//insert.php  
$connect = mysqli_connect("localhost", "root", "", "stock");
if(!empty($_POST))
{
 $output = '';
    $product_category = mysqli_real_escape_string($connect, $_POST["product_category"]);  
    $product_name = mysqli_real_escape_string($connect, $_POST["product_name"]);  
    $qty = $_POST["qty"];  
    $purchasing_price = $_POST["purchasing_price"];  
    $selling_price = $_POST["selling_price"];  
    $total_price = $_POST["total_price"];  
    $query = "
    INSERT INTO INSERT INTO sale_temp(product_category,product_name,qty,purchasing_price,selling_price,total_price) VALUES('$product_category','$product_name','$qty','$purchasing_price','$selling_price','$total_price')
    ";
    if(mysqli_query($connect, $query))
    {
     $output .= '<label class="text-success">Data Inserted</label>';
     $select_query = "SELECT * FROM sale_temp ORDER BY id DESC";
     $result = mysqli_query($connect, $select_query);
     $output .= '
      <table class="table table-bordered">  
                    <tr>  
                         <th width="70%">Product Name</th>  
                         <th width="30%">View</th>  
                    </tr>

     ';
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
       <tr>  
                         <td>' . $row["product_name "] . '</td>  
                         <td><input type="button" name="view" value="view" id="' . $row["sal_tmp"] . '" class="btn btn-info btn-xs view_data" /></td>  
                    </tr>
      ';
     }
     $output .= '</table>';
    }
    echo $output;
}
?>