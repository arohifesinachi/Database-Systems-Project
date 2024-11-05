<?php

$dbhost = "sysmysql8.auburn.edu"; // Consider storing these credentials securely
$dbuser = "isa0009";
$dbpass = "dbpassword2024";
$dbname = "isa0009db";

$tables = array("db_books", "db_customer", "db_employee", "db_order", "db_order_detail", "db_shipper", "db_subject", "db_supplier");

function get_connection() {
    global $dbhost, $dbuser, $dbpass, $dbname;
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if ($connection === false) {
        die("Could not connect: " . mysqli_connect_error());
    }
    return $connection;
}

if (!function_exists('executeQuery')) {
    function executeQuery($connection, $query) {
        return mysqli_query($connection, $query);
    }
}

function countAffectedRows($connection) {
    return mysqli_affected_rows($connection);
}

function getError($connection) {
    return mysqli_error($connection);
}

?>
