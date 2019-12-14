<?php 
require './class/atclass.php';

?>
  <h1><center> <font color="red">Akshar </font>
                <font color="blue"> Engineers </font></center></h1>
        <hr size="1" color="black">     
        <center><h1>User Report</h1>
        <?php
        echo date("d-m-Y h:m:s");
        ?>
             <form method="get">
            Search : <input type="text" name="search" >
            <input type="submit">
        </form>
 <table id="example1" class="table table-bordered table-striped" width="100%">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>Email</th>
             
                  <th>Mobile</th>
                  <th>Address</th>
                   
                  <th>Area</th>
                  
                
                </tr>
                </thead>
                <tbody>
               
                    <?php

 
if(isset($_GET['search']))
{
    $search = $_GET['search'];
    $selectq = mysqli_query($connection, "SELECT * FROM `tbl_usermaster` where user_name like '%$search%' ") or die(mysqli_error($connection));

}else
{
$selectq = mysqli_query($connection, "SELECT * FROM `tbl_usermaster`
") or die(mysqli_error($connection));
}
$count = mysqli_num_rows($selectq);
echo $count . " Records Found";

while($productrow = mysqli_fetch_array($selectq))
{
    echo "<tr>";
    echo "<td>{$productrow['user_id']}</td>";
    echo "<td>{$productrow['user_name']}</td>";
    echo "<td>{$productrow['user_gender']}</td>";
     echo "<td>{$productrow['user_email']}</td>"; 
    echo "<td>{$productrow['user_mobile']}</td>";
    echo "<td>{$productrow['user_address']}</td>";
    echo "<td>{$productrow['area_id']}</td>";
 
   
    
    
    echo "</tr>";
}


?>
                </tbody>
             
               
              </table>