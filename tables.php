<?php include "incs/header.php"; ?>

  <table class="table table-dark">

    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Owned</th>
      </tr>
    </thead>

    <?php foreach ($rows as $row): ?>
      <tr>
        <td><?php echo $row['pw_id']; ?></td>
        <td><?php echo $row['pw_name']; ?></td>

        <?php if($row['pw_owned'] == 0): ?>
          <td class="notowned">No</td>
        <?php else: ?>
          <td class="owned">Yes</td>
        <?php endif; ?>

      </tr>
    <?php endforeach; ?>

  </table>

<?php include "incs/footer.php"; ?>
