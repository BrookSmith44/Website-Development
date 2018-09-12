<?php
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/styles.css?<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <title><?php echo $title; ?></title>
  </head>
  <body>
    <header>
      <div class="na_lo">
    	<div class="title">
        <a href="home.php">
        <h1><?php echo $company; ?></h1>
        <img id="logo" src="Images\spider-web.png" />
      </a>
      </div>
    </div>
    <nav class="navtop">
      <ul>
        <!-- Full nav, shown on larger screens -->
        <a class="fullnav" href="about.php"><li><h3><?php echo $about; ?></h3></li></a>
        <a class="fullnav" href="services.php"><li><h3><?php echo $services; ?></h3></li></a>
        <a class="fullnav" href="portfolio.php"><li><h3><?php echo $portfolio; ?></h3></li></a>
        <a class="fullnav" href="contact.php"><li><h3><?php echo $contact; ?></h3></li></a>
        <!-- Button to show/hide dropdown menu, only shown on smaller screens -->
        <button onclick="myFunction()" id='navm'><img src='Images\order.png' /></button>
        <!-- Dropdown Menu Content -->
        <div class="dropdown-container">
          <div id="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
          </div>
        </div>
        <script type="text/javascript">
          // Toggle show/hide dropdown menu on button click
          function myFunction() {
            var dropdown = document.getElementById("dropdown-content");
            if (dropdown.style.display == "none") {
                dropdown.style.display = "block";
            } else {
                dropdown.style.display = "none";
            }
          }

          // Attempt at making dropdown close when user clicks off it, doesn't work
          /*window.onclick = function(event) {
            if (!event.target.matches('#navm')) {
              var dropdown = document.getElementById("dropdown-content");
              dropdown.style.display = "none";
            }
          }*/
        </script>
      </ul>
    </nav>
    </header>
