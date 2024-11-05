<?php
include 'database.php';
$con = get_connection();

// SQL query to select data from database
$sql = " SELECT * FROM db_customer";
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
       <title>View Customers</title>
       <link rel='stylesheet' href='style.css' type='text/css' media='all' />
</head>
<body>
 <h1 class="BookstoreTitle">Ifesinachi Aroh's Online Bookstore</h1>

    <h2 class="PageTitle">View All Customers</h2>

<section>
<div>
        <!-- TABLE -->
        <table>
            <tr>
                <th>Customer ID</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Phone Number</th>
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
                <td><?php echo $rows['CustomerID'];?></td>
                <td><?php echo $rows['LastName'];?></td>
                <td><?php echo $rows['FirstName'];?></td>
                <td><?php echo $rows['Phone'];?></td>
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