<?php

$servername = "localhost"; 
$username = "root";        
$password = "";            
$dbname = "dbtable";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$table_creation_sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL
)";
if ($conn->query($table_creation_sql) === TRUE) {
    echo "Table 'users' is ready.<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}


$check_data_sql = "SELECT COUNT(*) AS count FROM users";
$result = $conn->query($check_data_sql);
$row = $result->fetch_assoc();

if ($row['count'] == 0) {
    
    $insert_sql = "INSERT INTO users (name, email, phone) VALUES
    ('John Doe', 'john@example.com', '1234567890'),
    ('Jane Smith', 'jane@example.com', '0987654321'),
    ('Alice Johnson', 'alice@example.com', '1122334455'),
    ('Bob Lee', 'bob@example.com', '2233445566')";
    
    if ($conn->query($insert_sql) === TRUE) {
        echo "Sample data inserted successfully.<br>";
    } else {
        echo "Error inserting data: " . $conn->error . "<br>";
    }
}


$sql = "SELECT id, name, email, phone FROM users";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
   
    echo "<html><head><title>Data Table</title></head><body>";
    echo "<h1>User Details</h1>";
    echo "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse;'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th></tr>";

    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "</tr>";
    }

    
    echo "</table>";
    echo "</body></html>";
} else {
    echo "No results found.";
}


$conn->close();
?>