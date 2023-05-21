<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halifax Canoe and Kayak</title>
    <link rel="stylesheet" href="./../Assignment_1/style.css">
    <link rel="stylesheet" href="login.css">
    <link rel="icon" type="image/png"
        href="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/paddle-white.png">
</head>

<body>

    <header class="header_bar"> <!-- Navigation menu -->

        <img id="nav_button" class="header_button"
            src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png" alt="Menu">
        <nav class="header_nav">
            <ul class="nav_menu">
                <li><a href="./../Assignment_1/index.php" >Home</li>
                <li>Book a trip</li>
                <li><a href="./../Assignment_2/admin_login.html">Admin login</a></li>

            </ul>
        </nav>


    </header>
    <main>

        <div class="form_section">
            <p class="form_header">
                Admin - Add Adventure
            </p>

            <form class="adv_form" method="post" action="./script.php">
                <div>
                    <br>
                    Heading:<br>
                    <input type="text" name="heading">
                </div>
                <div>
                    <br>
                    Trip Date:<br>
                    <input type="date" name="tripDate">
                </div>
                <div>
                    <br>
                    Duration:<br>
                    <input type="text" name="duration">
                </div>
                <div>
                    <br>
                    Summary:<br>
                    <input type="text" name="summary" id="summary-box">
                </div>
                <div>
                    <br>
                    <button type="submit" class="submit_btn" name="sub">Submit</button>
                </div>

 


            </form>
        </div>

    </main>
    <!-- Call to scripts sources -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="./../Assignment_1/script.js"></script>
</body>

</html>