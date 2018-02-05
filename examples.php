<!--
  If statments can be written in multiple ways.
-->

<!-- 1. all in PHP. Notice there is no colon or endif used when the if statement is written in PHP across multiple lines.-->

<?php
  if( 1 == 1 ) {
    echo "<p>True</p>";
  } else {
    echo "<p>False</p>";
  }
?>

<!-- 2. Mix of PHP and HTML involving breaking in and out of PHP. Notice the use of a colon for if and else but the use of semi colon for the endif. -->

<?php if( 1 == 1 ):  ?>
  <p>True</p>
<?php else:  ?>
  <p>False</p>
<?php endif;  ?>

<!-- 3. Single line/shorthand -->

<?php echo (1 == 1 ? "<p>True</p>" : "<p>False</p>") ?>
