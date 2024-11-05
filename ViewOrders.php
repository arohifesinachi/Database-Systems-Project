<?php
include 'database.php';
$con = get_connection();

// SQL query to select data from database
$sql = " SELECT * FROM db_order";
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
       <title>View Orders</title>
       <link rel='stylesheet' href='style.css' type='text/css' media='all' />
</head>
<body>
 <h1 class="BookstoreTitle">Ifesinachi Aroh's Online Bookstore</h1>
    <h2 class="PageTitle">View All Orders</h2>

<section>
<div>
        <!-- TABLE -->
        <table>
            <tr>
                <th>Order ID</th>
		<th>Customer ID</th>
                <th>Employee ID</th>
                <th>Order Date</th>
                <th>Shipped Date</th>
  		<th>Shipper ID</th>
	</tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['OrderID'];?></td>
 		<td><?php echo $rows['CustomerID'];?></td>
                <td><?php echo $rows['EmployeeID'];?></td>
                <td><?php echo $rows['OrderDate'];?></td>
                <td><?php echo $rows['ShippedDate'];?></td>
		<td><?php echo $rows['ShipperID'];?></td>
  	   </tr>
            <?php
                }
            ?>
        </table>
</div>
    </section>

</body>
<footer>
<div style="align-content: center;">
<button class="button buttonfooter" onClick="window.location.href='https://webhome.auburn.edu/~isa0009';">Back to Home Page</button>
</div>
</footer>
</html>
<?php mysqli_close($con); ?>