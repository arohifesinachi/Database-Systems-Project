<?php
include 'database.php';
$con = get_connection();

// SQL query to select data from database
$sql = " SELECT * FROM db_books";
$result = $con->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
       <title>View Books</title>
       <link rel='stylesheet' href='style.css' type='text/css' media='all' />
</head>
<body>
 <h1 class="BookstoreTitle">Ifesinachi Aroh's Online Bookstore</h1>
    <h2 class="PageTitle">View All Books</h2>

<section>
<div>
        <!-- TABLE -->
        <table>
            <tr>
                <th>Book ID</th>
                <th>Title</th>
                <th>Unit Price</th>
                <th>Author</th>
		<th>Quantity</th>
		<th>Supplier ID</th>
		<th>Subject ID</th>
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
                <td><?php echo $rows['BookID'];?></td>
                <td><?php echo $rows['Title'];?></td>
                <td>$<?php echo $rows['UnitPrice'];?></td>
                <td><?php echo $rows['Author'];?></td>
  		<td><?php echo $rows['Quantity'];?></td>
  		<td><?php echo $rows['SupplierID'];?></td>
  		<td><?php echo $rows['SubjectID'];?></td>
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