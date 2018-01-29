<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Changa+One|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warframe Database</title>
  </head>
  <body>
    <header>
      <a>
        <h1>WARFRAME</h1>
      </a>
    </header>
  </body>
</html>

<?php
  $db = new PDO('mysql:host=localhost;dbname=warframe;charset=utf8mb4', 'root', 'root');
  $stmt = $db->prepare("SELECT * FROM primary_weapons");
  $stmt->execute();
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);



  // print_r($rows);

  echo "<table>";

  foreach ($rows as $row) {
    echo "<tr>";
      echo "<td>" . $row['pw_id'] . "</td>";
      echo "<td>" . $row['pw_name'] . "</td>";

      echo "<td>";
        if($row['pw_owned'] == 0) {
          echo "No";
        } else {
          echo "Yes";
        }
      echo "</td>";

    echo "</tr>";
  }

  echo "</table>";

?>
