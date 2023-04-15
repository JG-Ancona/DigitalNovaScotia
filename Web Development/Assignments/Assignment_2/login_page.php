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
                <li>Home</li>
                <li>Book a trip</li>
                <li><a href="./../Assignment_2/admin_login.html">Admin login</a></li>

            </ul>
        </nav>


    </header>
    <main>
        
        <div class="form_section">
            <p class="form_header">
                Welcome to your IT Suppport System
            </p>
            <form class="form_grid" method="post">
                <div>
                    <br>Title:<br>
                    <select name="title" id="title">
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Miss">Miss</option>
                        <option value="Ms.">Ms.</option>
                    </select>
                </div>
                <div>
                    <br>
                    First Name:<br>
                    <input type="text" name="first_name">
                </div>
                <div>
                    <br>
                    Last Name:<br>
                    <input type="text" name="Last_name">
                </div>
                <div>
                    <br>Rol:<br>
                    <select name="rol" id="rol">
                        <option value="Admin">Admin</option>
                        <option value="Manager">Manager</option>
                        <option value="CEO">CEO</option>
                    </select>
                </div>
                <div>
                    <br>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    
    </main>
    <!-- Call to scripts sources -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="./..Assignment_1/script.js"></script>
</body>
</html>