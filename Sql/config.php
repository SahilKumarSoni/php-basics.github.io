<?php
    $dbname = 'php_learning';
    $host = 'localhost';
    $username = 'root';
    $password = 'Sahil@01';

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if($conn) {
        echo "Database Connected";
    }else{
        echo "Connection Error".mysqli_error($conn);
    }
?>