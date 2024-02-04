<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Mountain Man Confirmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/passwordMessage.css">

</head>
<body>
<div class="w3-blue-gray">
    <!-- Header -->
    <header class="w3-display-container w3-content w3-center" style="max-width:1500px">
        <img class="w3-image" src="/images/bannerpic.jpg" alt="Mountain" width="1500" height="600">
        <div class="w3-display-middle w3-padding-large w3-wide w3-text-deep-orange w3-center">
            <h1 class="w3-hide-medium w3-hide-small w3-jumbo"><strong>Mountain Man</strong></h1>
            <h5 class="w3-hide-large" style="white-space:nowrap">Mountain Man</h5>
            <h3 class="w3-hide-medium w3-hide-small w3-xxlarge" ><b>PHOTOGRAPHY</b></h3>
        </div>

        <!-- Navbar (placed at the bottom of the header image) -->
        <div class="w3-bar w3-deep-orange w3-round w3-display-bottommiddle w3-hide-small" style="bottom:-16px">
            <a href="homePage.html" class="w3-bar-item w3-button">Home</a>
            <a href="registration.php" class="w3-bar-item w3-button">Registration</a>
            <a href="animation.html" class="w3-bar-item w3-button">Animation</a>
        </div>
    </header>

    <!-- Navbar on small screens -->
    <div class="w3-center w3-deep-orange w3-padding-16 w3-hide-large w3-hide-medium">
        <div class="w3-bar w3-deep-orange">
            <a href="homePage.html" class="w3-bar-item w3-button">Home</a>
            <a href="registration.php" class="w3-bar-item w3-button">Registration</a>
            <a href="animation.html" class="w3-bar-item w3-button">Animation</a>
        </div>
    </div>

    <!-- Form details   -->
    <div class="w3-content w3-light-gray w3-padding-large w3-margin-top w3-border w3-border-deep-orange" id="confirmation">
        <h3 class="w3-center w3-text-deep-orange"><strong>Mountain Man Confirmation Page</strong></h3>

        <p class="w3-center">
        <?php
        foreach($_POST as $key => $value) {
            echo "<br/>$key : <strong>$value<br/></strong>";
        }
        ?>
        </p>

        <h4 class="w3-center w3-text-deep-orange"><strong>Thank You. Have a great day!</strong></h4>
        <h5 class="w3-center w3-text-deep-orange"><strong>We will contact you as soon as possible.</strong></h5>
    </div>

    <!-- Back to top of page option -->
    <div class="w3-right w3-content w3-text-deep-orange">
            <br/>
            <a href="#" class="w3-bar-item w3-button w3-light-gray w3-border w3-border-blue"><strong>Back to top</strong></a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-display-container w3-content w3-center" style="max-width:1500px">
        <div class="w3-display-middle w3-wide w3-text-blue w3-bottom-middle">
            <br/><br/><br/><br/><br/><br/><br/>
            <a href="https://www.youtube.com/watch?v=g4_p2-TG840">
                <img src="/images/logo.jpg" alt="Picture of Logo" class="w3-image w3-margin-top" width="75" height="75"/>
                <br/><strong>Mountain Man Photography Youtube - Click Here</strong>
            </a>
        </div>
    </footer>
</body>
</html>

