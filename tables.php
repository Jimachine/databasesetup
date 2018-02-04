<?php include "incs/header.php"; ?> <!-- include header file to keep it consistance across all pages and easy to maintain -->

  <table class="table table-dark">

    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Owned</th>
      </tr>
    </thead>

    <?php foreach ($rows as $row): ?> <!-- start looping over sql query results row by row -->
      <tr>
        <td><?php echo $row['pw_id']; ?></td>
        <td><?php echo $row['pw_name']; ?></td>

        <?php if($row['pw_owned'] == 0): ?>   <!-- START IF - if the item is NOT OWNED and add class "notowned" to the cell -->
          <td class="notowned">No</td>
        <?php else: ?>                        <!-- else/otherwise we know it is OWNED so add class "owned" to the cell -->
          <td class="owned">Yes</td>
        <?php endif; ?>                       <!-- END IF -->

      </tr>
    <?php endforeach; ?> <!-- end loop -->

  </table>

<!--
  Note: You are missing the closing </body> and </html> tags.

  Step 1  - Create a footer.php file like you did with header.php

  Step 2 - add the missing closing tags mentioned above to the new footer.php

  Step 3 - include the footer file here and at the bottom of all your other pages like you did with the header file at the top of this page.
 -->
