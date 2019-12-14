<?php
session_start();


$qty = $_GET['qty'];
$pid = $_GET['pid'];

if(isset($_SESSION['productcart'])){
    //Fetch Current Number
    $current = $_SESSION['max'] + 1;
     $_SESSION['productcart'][$current] = $pid;
    $_SESSION['qtycart'][$current] = $qty;
    //Update New Value in Session Max
    $_SESSION['max'] = $current;
}else
{
   //Create Session Array of Cart
    $_SESSION['productcart'] = array();
    $_SESSION['qtycart'] = array();
    $_SESSION['max'] = 0;
    $_SESSION['productcart'][0] = $pid;
    $_SESSION['qtycart'][0] = $qty;
    
}

//Testing
echo "<pre>";
print_r($_SESSION);

header("location:view-cart.php");