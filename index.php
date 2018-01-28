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
