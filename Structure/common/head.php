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
        <a href="about.php"><li><h3><?php echo $about; ?></h3></li></a>
        <a href="services.php"><li><h3><?php echo $services; ?></h3></li></a>
        <a href="portfolio.php"><li><h3><?php echo $portfolio; ?></h3></li></a>
        <a href="contact.php"><li><h3><?php echo $contact; ?></h3></li></a>
        <img id='navm' src='Images\order.png' />
      </ul>
    </nav>
    </header>
