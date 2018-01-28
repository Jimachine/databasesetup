<pre>
<?php
  $db = new PDO('mysql:host=localhost;dbname=warframe;charset=utf8mb4', 'root', 'root');
  $stmt = $db->prepare("SELECT * FROM primary_weapons WHERE pw_id=:id");
  $stmt->execute(array(':id' => 1));
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

  print_r($rows);

  // foreach ($rows as $row) {
  //   print_r($row['']);
  // }
?>
