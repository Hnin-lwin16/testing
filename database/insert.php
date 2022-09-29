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
    $stmt = $conn->prepare("INSERT INTO MyTestData (firstname, lastname, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $firstname, $lastname, $email);

    // set parameters and execute
    $firstname = "Hnin";
    $lastname = "Lwin";
    $email = "Hnin@example.com";
    $stmt->execute();

    $firstname = "Nan";
    $lastname = "Kyaw";
    $email = "Nan@example.com";
    $stmt->execute();

    $firstname = "Moh";
    $lastname = "Moh";
    $email = "Moh@example.com";
    $stmt->execute();

    echo "New records created successfully";

    $stmt->close();
    $conn->close();
?>