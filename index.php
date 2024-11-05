<!DOCTYPE html>
<html>
<head>
    <title>Ifesinachi Aroh's Online Bookstore</title>
    <style>
        .bordered {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    background-color: white; /* Or another color that fits the overlay */
    color: black; /* Text color */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); /* Optional shadow for depth */
}

.bordered th, .bordered td {
    border: 1px solid #ddd; /* Light grey border */
    padding: 8px;
    text-align: left;
}

.bordered th {
    background-color: #4CAF50; /* Or another color that matches your theme */
    color: white;
}

/* Row hover effect */
.bordered tr:hover {
    background-color: #f5f5f5;
}

<!DOCTYPE html>
<html>
<head>
    <title>Ifesinachi Aroh's Online Bookstore</title>
    <style>

        .bordered {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: white; /* Background color for tables */
            color: black; /* Text color inside tables */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5); /* Shadow effect for depth */
        }

        .bordered th, .bordered td {
            border: 1px solid #ddd; /* Light grey border for cells */
            padding: 8px;
            text-align: left;
        }

        .bordered th {
            background-color: #4CAF50; /* Color for header cells */
            color: white;
        }

        /* Optional: Row hover effect */
        .bordered tr:hover {
            background-color: #f5f5f5;
        }
        body {
            background:  beige;
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .overlay {
            background-color: rgba(0, 0, 0, 0.7); /* Black background with opacity */
            color: white;
            padding: 15px;
            min-height: 100vh;
        }
        .container {
            text-align: center;
            padding: 50px 20px;
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 0.5em;
        }
        h2 {
            margin-bottom: 1em;
            font-size: 1.5em;
        }
        .button {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px 5px;
            cursor: pointer;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            transition: all 0.3s ease;
        }
        .button:hover {
            box-shadow: 0 6px 12px rgba(0,0,0,0.5);
        }
        .button1 {background-color: darkcyan;} 
        .button2 {background-color: darkcyan;}
        .button3 {background-color: darkcyan;} 
        .button4 {background-color: darkcyan;} 
        .button5 {background-color: darkcyan;} 
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 20px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="overlay">
        <div class="container">
            <h1>Ifesinachi Aroh's Online Bookstore</h1>
            <hr/>
            <h2>Welcome to my bookstore, How may I assist you today?</h2>

            <button class="button button1" onClick="window.location.href='https://webhome.auburn.edu/~isa0009/RunQueries.php';">Run Queries</button>
            <button class="button button2" onClick="window.location.href='https://webhome.auburn.edu/~isa0009/ViewBooks.php';">View Books</button>
            <button class="button button3" onClick="window.location.href='https://webhome.auburn.edu/~isa0009/ViewCustomers.php';">View Customers</button>
            <button class="button button4" onClick="window.location.href='https://webhome.auburn.edu/~isa0009/ViewOrders.php';">View Orders</button>
            <button class="button button5" onClick="window.location.href='https://webhome.auburn.edu/~isa0009/ViewSuppliers.php';">View Suppliers</button>

            <?php
            include 'database.php';
            $con = get_connection();
            $tables = array("db_books", "db_customer", "db_employee", "db_order", "db_order_detail", "db_shipper", "db_subject", "db_supplier");

            foreach($tables as $tableName) {
                echo "<h2>{$tableName}</h2>";
                echo "<table class='bordered'><thead><tr>";

                $query = "SELECT * FROM {$tableName}";
                $result = executeQuery($con, $query);  
                if (!$result) {
                    die("Query failed to execute: " . getError($con));   
                }

                $numFields = mysqli_num_fields($result);
                for ($i = 0; $i < $numFields; $i++) {
                    $field = mysqli_fetch_field_direct($result, $i);
                    echo "<th>{$field->name}</th>";
                }
                echo "</tr></thead><tbody>";

                while ($resultRow = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    foreach ($resultRow as $col) {
                        echo "<td>{$col}</td>";        
                    }
                    echo "</tr>";
                }

                mysqli_free_result($result);
                echo "</tbody></table><br><br>";
            }
            ?>
        </div>
    </div>
    <footer>
        <p>© 2024 Ifesinachi Aroh. All Rights Reserved.</p>
    </footer>
</body>
</html>
