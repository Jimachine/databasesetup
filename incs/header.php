<!-- Database Connection -->
<?php
  $db = new PDO('mysql:host=localhost;dbname=warframe;charset=utf8mb4', 'root', 'root');
?>

<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/warframelogo.png">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Changa+One|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warframe Database</title>
  </head>
  <body>
    <header>
      <a href="index.php" id="logo">
        <img src="img/warframelogo.png" alt="Warframe Logo">
      </a>
      <a>
        <h1>WARFRAME</h1>
      </a>
      <nav>
        <ul>
          <li><a href="primaryweapons.php">Primary Weapons</a></li>
          <li><a href="secondaryweapons.php">Secondary Weapons</a></li>
          <li><a href="meleeweapons.php">Melee Weapons</a></li>
          <li><a href="voidrelics.php">Void Relics</a></li>
          <li><a href="focus.php">Focus</a></li>
        </ul>
      </nav>
    </header>
