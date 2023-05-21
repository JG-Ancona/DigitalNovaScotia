<?php

$_SERVER['adv_form'] = $_POST;

// Retrieve form data
$heading = $_POST["heading"];
$tripDate = $_POST["tripDate"];
$duration = $_POST["duration"];
$summary = $_POST["summary"];


// Data validation html form
        if (empty($heading) || empty($tripDate) || empty($duration) || empty($summary)) {
            echo "Please fill in all fields.";
        } else {
            // Connect to the MySQL database
            $dbUserName = "dns";
            $dbPassword = "dns";
            $dbServer = "localhost";
            $dbName = "dns_adventures";

            $conn = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

            // Check connection
            if ($conn->connect_error) {
                exit("Database Connection Failed. Reason: " . $conn->connect_error);
            }

            // SQL statement to insert data
            $query = "INSERT INTO adventure (heading, tripDate, duration, summary) VALUES ('$heading', '$tripDate', '$duration','$summary')";
            
            if ($conn->query($query) === TRUE) {
                header("Location:succesful_push.php");
            } else {
                echo "Error inserting data: " . $conn->error;
            }

            // Close the database connection
            $conn->close();
        }
    
    ?>