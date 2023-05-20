

<!DOCTYPE html>
<html>
<head>
    <title>MySQL Data</title>
</head>
<body>
    <?php
    // Connect to the MySQL database
    $dbUserName = "dns";
    $dbPassword = "dns";
    $dbServer = "localhost";
    $dbName = "dns_adventures";

    $connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

    // Check connection
    if ($connection->connect_errno) {
        exit("Database Connection Failed. Reason: " . $coconnection->connect_error);
    }

    // Query to retrieve data from the db
    $query = "SELECT * FROM adventure";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        // Print data inside <div> elements
        while ($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<p>ID: " . $row["id"] . "</p>";
            echo "<p>Name: " . $row["heading"] . "</p>";
            echo "<p>Email: " . $row["tripDate"] . "</p>";
            echo "</div>";
        }
    } else {
        echo "No data found.";
    }

    // Close the database connection
    $connection->close();
    ?>
</body>
</html>