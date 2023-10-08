<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testproject2";

    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully"."<br>"."<br>";
    $sql = "SELECT * FROM user";

// Execute the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"] . "<br>";
        echo "Sirname: " . $row["sirname"] . "<br>";
        echo "Number: " . $row["number"] . "<br>";
        
        // Create a button with a link to user.php and pass data via GET parameters
        echo '<a href="user.php?name=' . $row["name"] . '&sirname=' . $row["sirname"] . '&number=' . $row["number"] . '">View Details</a>';
        
        echo "<br><br>";
    }
} else {
    echo "No records found in the 'user' table.";
}

// Close the database connection
$conn->close();
    ?>
</body>
<script src="jquery.js"></script>
</html>