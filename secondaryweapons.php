<?php include "incs/header.php"; ?>

<?php
  $stmt = $db->prepare("SELECT * FROM secondary_weapons ORDER BY sw_owned, sw_name");
  $stmt->execute();
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

  <table class="table table-dark">

    <thead>
      <tr>
        <th>Name</th>
        <th>Obtained From</th>
        <th>Owned</th>
      </tr>
    </thead>

    <?php foreach ($rows as $row): ?>
      <tr>
        <td><?php echo $row['sw_name']; ?></td>
        <td><?php echo $row['sw_obtained_via']; ?></td>

        <?php if($row['sw_owned'] == 0): ?>
          <td class="notowned">No</td>
        <?php else: ?>
          <td class="owned">Yes</td>
        <?php endif; ?>

      </tr>
    <?php endforeach; ?>

  </table>

<?php include "incs/footer.php"; ?>
