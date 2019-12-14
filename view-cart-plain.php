<?php 
require './admin/class/atclass.php';
session_start();

if(isset($_GET['remove']))
{
    $key = $_GET['remove'];
    unset($_SESSION['productcart'][$key]);
    unset($_SESSION['qtycart'][$key]);
    
}
if(isset($_SESSION['productcart']) && !empty($_SESSION['productcart']))
{
    //Fetch Products from Session
    
    echo "<table border='1'>";
    $sum = array();
    foreach ($_SESSION['productcart'] as $key => $value) {
      
        //Fetch Prodcuts From Database
        $select = mysqli_query($connection, "select * from tbl_product where product_id ='{$value}' ") or die(mysqli_error($connection));
    $productdata = mysqli_fetch_array($select);
        $subtotal = $productdata['product_price'] * $_SESSION['qtycart'][$key] ;
    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td>{$productdata['product_name']}</td>";
    echo "<td>{$productdata['product_price']}</td>";
    echo "<td>{$_SESSION['qtycart'][$key]}</td>";
    echo "<td>$subtotal</td>";
    echo "<td><img src='admin/upload/{$productdata['product_image']}' width='100px;'></td>";
    echo "<td><a href='?remove=$key'>Remove</a></td>";
    echo "</tr>";

    $sum[] = $subtotal;
        }
        $total = array_sum($sum);
        echo "<tr><td>$total</td></tr>";
    echo "</table>";
     echo "Buy New Products <a href='display.php'>Buy</a>";
}else
{
    echo "Buy New Products <a href='display.php'>Buy</a>";
}
echo "Buy New Products <a href='place-order.php'>Confirm</a>";
//print_r($_SESSION);