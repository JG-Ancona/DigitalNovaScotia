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
    <link rel="stylesheet" href="/Assignments/Assignment_1/style.css">
    <link rel="stylesheet" href="login.css">
    <link rel="icon" type="image/png" href="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/paddle-white.png">
</head>
<body>
    
    <header class="header_bar"> <!-- Navigation menu -->

        <img id="nav_button" class="header_button" src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png" alt="Menu">
        <nav class="header_nav">
            <ul class="nav_menu">
                <li>Home<a href="./../Assignment_1/index.php"></li>
                <li>Book a trip</li>
                <li><a href="./login_page.php">Admin login</a></li>

            </ul>
        </nav>


    </header>
    <main>
        <div class="log_out">
            <form method="post">
                <button type="input" class="submit_btn" name="log_out_btn">Log out</button>
            </form>
        </div>
        <div class="welcome_user">
            <h1>Hello <?php echo $user_name;?></h1>
        </div>
        
        <div class="user_menu">
            <h2>We are sorry you are experiencing troubles...</h2>
            <br>
            <p>Our suppport department will contact you shortly.</p>
            <p>Thanks for your patience.</p>
            <br>
            <iframe src='https://gfycat.com/ifr/ChillyNegativeHawk' frameborder='0' scrolling='no' allowfullscreen width='640' height='404'></iframe><p><a href="https://gfycat.com/discover/firefighter-gifs">from Firefighter GIFs</a> <a href="https://gfycat.com/chillynegativehawk-minions">via Gfycat</a></p>
        </div>
        
        
    
    </main>
    <!-- Call to scripts sources -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="/Assignments/Assignment_1/script.js"></script>
</body>
</html>