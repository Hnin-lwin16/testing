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
    $sql = "CREATE TABLE MyTestData (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        
    if ($conn->query($sql) === TRUE) {
        echo "Table MyData created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    

?>