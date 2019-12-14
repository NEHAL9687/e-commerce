<?php
require './class/atclass.php';
?>
<h1><center> <font color="red">Akshar </font>
        <font color="blue"> Engineers </font></center></h1>
<hr size="1" color="black">     
<?php
echo date("d-m-Y h:m:s");
?>

<h1> <center>Order Report </center></h1>
<table id="example1" class="table table-bordered table-striped" align="center" width="70%">
    <thead>
        <tr>
            <th>ID</th>
            <th>user_id</th>
            <th>Order Date</th>
            <th>order_status</th>
            <th>shipping_name</th>
            <th>shipping_mobile</th>
            <th>shipping_address</th>
            <th>area_id</th>




        </tr>
    </thead>
    <tbody>

        <?php
        $selectq = mysqli_query($connection, " select * from  tbl_ordermaster") or die(mysqli_error($connection));
        $count = mysqli_num_rows($selectq);
        echo $count . " Records Found";

        while ($productrow = mysqli_fetch_array($selectq)) {
            echo "<tr>";
            echo "<td>{$productrow[0]}</td>";
            echo "<td>{$productrow[1]}</td>";
            echo "<td>{$productrow[2]}</td>";
            echo "<td>{$productrow[3]}</td>";
            echo "<td>{$productrow[4]}</td>";
            echo "<td>{$productrow[5]}</td>";
            echo "<td>{$productrow[6]}</td>";


            echo "<td>{$productrow[7]}</td>";
            echo "</tr>";
        }
        ?>
        ?>
    </tbody>


</table>