<?php include "incs/header.php"; ?>

<?php
  $stmt = $db->prepare("SELECT * FROM void_relics ORDER BY vr_vaulted, vr_tier, vr_type");
  $stmt->execute();
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

  <table class="table table-dark">
    <thead>
      <tr>
        <th>Tier</th>
        <th>Type</th>
        <th>Vaulted</th>
        <th>Common Rewards</th>
        <th>Uncommon Rewards</th>
        <th>Rare Rewards</th>
      </tr>
    </thead>

    <?php foreach ($rows as $row): ?>
      <tr>
        <td><?php echo $row['vr_tier']; ?></td>
        <td><?php echo $row['vr_type']; ?></td>

          <?php if ($row['vr_vaulted'] == 0): ?>
            <td class="notvaulted"></td>
          <?php else: ?>
            <td class="vaulted"></td>
          <?php endif; ?>

        <td class="reward">
          <?php
            $vr_common_rewards = array();
            $vr_common_rewards = explode(',', $row['vr_common_rewards']);
          ?>
          <ul>
            <?php foreach ($vr_common_rewards as $vr_common_reward): ?>
              <li><?php echo $vr_common_reward; ?></li>
            <?php endforeach; ?>
          </ul>
        </td>
        <td>
          <?php
            $vr_uncommon_rewards = array();
            $vr_uncommon_rewards = explode(',', $row['vr_uncommon_rewards']);
          ?>
          <ul>
            <?php foreach ($vr_uncommon_rewards as $vr_uncommon_reward): ?>
              <li><?php echo $vr_uncommon_reward; ?></li>
            <?php endforeach; ?>
          </ul>
        </td>
        <td>
          <?php
            $vr_rare_rewards = array();
            $vr_rare_rewards = explode(',', $row['vr_rare_rewards']);
          ?>
        <ul>
          <?php foreach ($vr_rare_rewards as $vr_rare_reward): ?>
            <li><?php echo $vr_rare_reward ?></li>
          <?php endforeach; ?>
        </ul>
      </td>
    </tr>
  <?php endforeach; ?>

  </table>

<?php include "incs/footer.php"; ?>
