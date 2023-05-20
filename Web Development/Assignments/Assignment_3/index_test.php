<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halifax Canoe and Kayak</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png"
        href="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/paddle-white.png">
</head>

<body>


    <header class="header_bar"> <!-- Navigation menu -->

        <img id="nav_button" class="header_button"
            src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png" alt="Menu">
        <nav class="header_nav">
            <ul class="nav_menu">
                <li>Home</li>
                <li>Book a trip</li>
                <li><a href="./../Assignment_2/login_page.php">Admin login</a></li>

            </ul>
        </nav>

    </header>
    <main>
        <div class="front_img"> <!-- Main front image with text -->
            <img class="main_img" src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/canoe.jpg"
                alt="main image">
            <div class="text_img">Come Experience Canada</div>
        </div>

        <div class="title">
            <h1>Upcoming adventures</h1>
        </div>


        <section class="content"> <!-- Text content divided -->

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
                    echo '<div class="city">';
                    echo "<h2>" . $row["heading"] . "</h2>";
                    echo '<ul class="info_date">';
                    echo "<li>Date: " . $row["tripDate"] . "</li>";
                    echo "<li>Duration: " . $row["duration"] . "</li>";
                    echo "</ul>";
                    //echo "<h2>" . $row["heading"] . "</h2>";
                    echo "<h3>Summary</h3>";
                    echo "<p>" . $row["summary"] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "No data found.";
            }

            // Close the database connection
            $connection->close();
            ?>
        </section>
    </main>
    <!-- Call to scripts sources -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
<!-- 
<!DOCTYPE html>
<html>

<head>
    <title>MySQL Data</title>
</head>

<body>
    <?php
    // // Connect to the MySQL database
    // $dbUserName = "dns";
    // $dbPassword = "dns";
    // $dbServer = "localhost";
    // $dbName = "dns_adventures";

    // $connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

    // // Check connection
    // if ($connection->connect_errno) {
    //     exit("Database Connection Failed. Reason: " . $coconnection->connect_error);
    // }

    // // Query to retrieve data from the db
    // $query = "SELECT * FROM adventure";
    // $result = $connection->query($query);

    // if ($result->num_rows > 0) {
    //     // Print data inside <div> elements
    //     while ($row = $result->fetch_assoc()) {
    //         echo '<div class="city">';
    //         echo "<h2>" . $row["heading"] . "</h2>";
    //         echo '<ul class="info_date">';
    //         echo "<li>Date: " . $row["tripDate"] . "</li>";
    //         echo "<li>Duration: " . $row["duration"] . "</li>";
    //         echo "</ul>";
    //         echo "<h2>" . $row["heading"] . "</h2>";
    //         echo "<h3>Summary</h3>";
    //         echo "<p>" . $row["summary"] . "</p>";
    //         echo "</div>";
    //     }
    // } else {
    //     echo "No data found.";
    // }

    // // Close the database connection
    // $connection->close();
    ?>
</body>

</html> -->