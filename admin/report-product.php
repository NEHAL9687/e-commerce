<?php 
require './class/atclass.php';

?>
<h1><center> <font color="red">Akshar </font>
                <font color="blue"> Engineers </font></center></h1>
        <hr size="1" color="black">     
        <?php
        echo date("d-m-Y h:m:s");
        ?>
        <form method="get">
            Search : <input type="text" name="search" >
            <input type="submit">
        </form>
        <h1> <center> Product Listing</center></h1>
<table id="example1" class="table table-bordered table-striped" align="center" width="70%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Subcategory</th>
                                                <th>Price</th>
                                             
                                             
                                           
                                            </tr>
                                        </thead>
                                        <tbody>

<?php
 

if(isset($_GET['search']))
{
    $search = $_GET['search'];
    $selectq = mysqli_query($connection, "select * from tbl_product where product_name like '%$search%' ") or die(mysqli_error($connection));

}else
{
$selectq = mysqli_query($connection, "select * from tbl_product") or die(mysqli_error($connection));

}$count = mysqli_num_rows($selectq);
echo $count . " Records Found";

while ($productrow = mysqli_fetch_array($selectq)) {
    echo "<tr>";
    echo "<td  >{$productrow['product_id']}</td>";
    echo "<td style='width:250px;'>{$productrow['product_name']}</td>";
    echo "<td>{$productrow['product_details']}</td>";
    echo "<td>{$productrow['category_id']}</td>";
    echo "<td>{$productrow['product_price']}</td>";
  

    
    echo "</tr>";
}
?>
                                        </tbody>
                                        
                                    
   </table>