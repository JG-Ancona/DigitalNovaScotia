<?php
    session_start();
    //print_r($_SESSION);
    $Form_user = $_SESSION['Form_user'];
    $user_name= $Form_user['Last_name'].', '.$Form_user['First_name'];

    // Close session - log out button
    
    if(isset($_POST['log_out_btn'])) {
        session_destroy();
        header('Location:login_page.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halifax Canoe and Kayak</title>
    <link rel="stylesheet" href="./../Assignment_1/style.css">
    <link rel="stylesheet" href="login.css">
    <link rel="icon" type="image/png" href="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/paddle-white.png">
</head>
<body>
    
    <header class="header_bar"> <!-- Navigation menu -->

        <img id="nav_button" class="header_button" src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png" alt="Menu">
        <nav class="header_nav">
            <ul class="nav_menu">
                <li><a href="./../Assignment_1/index.php" >Home</li>
                <li>Book a trip</li>
                <li><a href="./../Assignment_2/login_page.php">Admin login</a></li>

            </ul>
        </nav>


    </header>
    <main>
        <div class="log_out">
            <form method="post">
                <button type="input" class="submit_btn" name="log_out_btn">Log out</button>
            </form>
            <!-- <a href="./../Assignment_2/admin_login.html">Log out</a> -->
        </div>
        <div class="welcome_user">
            <h1>Hello <?php echo $user_name;?></h1>
        </div>
        
        <div class="user_menu">
            <h2>Here are your options</h2>
            <ul>
                <li><a href="./../Assignment_2/not_working_page.html">My computer is not working</a></li>
                <li><a href="mailto:email@example.com">New account</a></li>
            </ul>
        </div>
        
    
    </main>
    <!-- Call to scripts sources -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="./../Assignment_1/script.js"></script>
</body>
</html>