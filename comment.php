<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Data Table</title>
    <link rel="stylesheet" href="comment.css">
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT id, name, email, message FROM contacts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Start table and header
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>";
    
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["name"]. "</td>
                <td>" . $row["email"]. "</td>
                <td>" . $row["message"]. "</td>
              </tr>";
    }
    
    // Close the table
    echo "</table>";
} else {
    echo "No records found";
}

$conn->close();

?>

</body>
</html>