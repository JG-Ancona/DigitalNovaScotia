<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halifax Canoe and Kayak</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/paddle-white.png">
</head>
<body>
    
    
    <header class="header_bar"> <!-- Navigation menu -->

        <img id="nav_button" class="header_button" src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/hamburger.png" alt="Menu">
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
            <img class="main_img" src="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/canoe.jpg" alt="main image">
            <div class="text_img">Come Experience Canada</div>
        </div>
        
        <div class="title">
            <h1>Upcoming adventures</h1>
        </div>
        

        <section class="content">   <!-- Text content divided -->

            <div class="city">
                <h2>Halifax</h2>

                <ul class="info_date">
                    <li>Date: 2023-03-12</li>
                    <li>Duration: 4 days</li>
                </ul>

                <h3>Summary</h3>

                <p>
                    Halifax, the charming port city in Nova Scotia, Canada, offers a multitude of adventures 
                    for travelers seeking excitement and exploration: kayaking or paddleboarding excursion 
                    through the harbor, hiking in Point Pleasent Park, or visiting one of the many provitial
                    parks to get closer to nature.
                </p>

            </div>

            <div class="city">
                <h2>Sydney</h2>

                <ul class="info_date">
                    <li>Date: 2023-03-23</li>
                    <li>Duration: 5 days</li>
                </ul>

                <h3>Summary</h3>

                <p>
                    Sydney, Nova Scotia is a vibrant coastal community that offers plenty of adventure for visitors. 
                    For nature lovers, there are miles of trails to hike in the nearby Cape Breton Highlands National Park, 
                    offering stunning views of rugged coastlines, waterfalls, and forests.
                </p>

            </div>

        </section>
    </main>
    <!-- Call to scripts sources -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>