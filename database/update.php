<?php
    error_reporting(E_ALL);
    ini_set("display_errors",'1');
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "myPhp";
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "UPDATE MyTestData SET lastname='Da' WHERE id=2";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
?>