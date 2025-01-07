<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sample";
    
    
    $connection = new mysqli($servername, $username, $password, $dbname);

  
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    } else {
        echo "Connection successful";
    }

   
    $sql = "CREATE TABLE myGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_data TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

	
    if ($connection->query($sql) === TRUE) {
        echo "Table myGuests created successfully";
    } else {
        echo "Error creating table: " . $connection->error;
    }
    $inst = "INSERT INTO myGuests (first_name,last_name, email)values('sneha','sathya','snehakaliyath@gmail.com')";
    
    if ($connection->query($inst) === TRUE) {
        echo "value inserted successfully";
    } else {
        echo "Error " . $connection->error;
    }

    $op = "SELECT * FROM myGuests ";
    if ($connection->query($op) === TRUE) {
        echo "value inserted successfully";
    } else {
        echo "Error " . $connection->error;
    }

   
    $connection->close();
?>