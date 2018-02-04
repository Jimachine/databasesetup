<?php include "incs/header.php"; ?> <!-- include header file to keep it consistance across all pages and easy to maintain -->

  <table class="table table-dark">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tier</th>
        <th>Type</th>
        <th>Common Rewards</th>
        <th>Uncommon Rewards</th>
        <th>Rare Rewards</th>
      </tr>
    </thead>

    <?php echo foreach ($rows as $row); ?> <!-- change the semi colon for a colon here as the foreach is spanning
                                                across multiple lines in your code, a semi colon will end the line
                                                before it has done what it needs to.  -->
      <tr>
        <td> <?php echo $row['vr_id']; ?> </td>   <!-- remove spaces between the PHP tags and the start/end of the <td></td> -->
        <td> <?php echo $row['vr_tier']; ?> </td> <!-- remove spaces between the PHP tags and the start/end of the <td></td> -->
        <td> <?php echo $row['vr_type']; ?> </td> <!-- remove spaces between the PHP tags and the start/end of the <td></td> -->
        <td class="reward">
          <?php
            echo $vr_common_rewards = array(); //remove the echo at the start of this line as we don't want to print anything out, we are telling PHP that your variable called $vr_common_rewards is now going to be an array and store multiple values (think like the filing cabinet example)

            echo $vr_common_rewards = explode(',', $row['vr_common_rewards']); //remove the echo at the start of this line as we don't want to print anything out, we are storing the exploded values back into the $vr_common_rewards array (separate draws in the filing cabinet)
          ?>
          <ul>
            <?php echo foreach ($vr_common_rewards as $vr_common_reward): ?> <!-- start looping over and printing reward names -->
              <li> <?php echo $vr_common_reward; ?> </li><!-- remove spaces between the PHP tags and the start/end of the <li></li> -->
            <!-- You are missing the endforeach; in php tags on this line so it doesn't know when to stop -->
          </ul>
        </td>
        <td>
          <?php
            echo $vr_uncommon_rewards = array(); //remove the echo, we don't need to print anything our here, just storing/modifying data
            echo $vr_uncommon_rewards = explode(',', $row['vr_uncommon_rewards']); //remove the echo, we don't need to print anything our here, just storing/modifying data
          ?>
          <ul>
            <?php foreach ($vr_uncommon_rewards as $vr_uncommon_reward): ?>
              <li><?php echo $vr_uncommon_reward; ?></li>
            <!-- You are missing the endforeach; in php tags on this line so it doesn't know when to stop -->
          </ul>
        </td>
        <td>
          <?php
            echo $vr_rare_rewards = array(); //remove the echo, we don't need to print anything our here, just storing/modifying data
            echo $vr_rare_rewards = explode(',', $row['vr_rare_rewards']); //remove the echo, we don't need to print anything our here, just storing/modifying data
          ?>
        <ul>
          <?php echo foreach ($vr_rare_rewards as $vr_rare_reward): ?>
            <li><?php echo $vr_rare_reward ?></li>
          <!-- You are missing the endforeach; in php tags on this line so it doesn't know when to stop -->
        </ul>
      </td>
    </tr>
  <?php endforeach; ?>

  </table>

<!--
  Note: You are missing the closing </body> and </html> tags.

  Step 1  - Create a footer.php file like you did with header.php

  Step 2 - add the missing closing tags mentioned above to the new footer.php

  Step 3 - include the footer file here and at the bottom of all your other pages like you did with the header file at the top of this page.
 -->
