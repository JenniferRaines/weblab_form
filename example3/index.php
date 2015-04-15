<?php include('includes/header.php'); ?>

<div id="wrap">
  <table data-toggle="table" class="table">
    <thead>
      <td>id</td>
      <td>Name</td>
      <td>Address</td>
      <td>Phone</td>
    </thead>

<?php

  print "about to get users";

  $sql = "SELECT * FROM `users` ;";

  $result = $conn->query($sql);

  while($row = $result->fetch_assoc()) {
    ?>
      <tr>
        <td><?php print $row['id']?></td>
        <td><?php print $row['name']?></td>
        <td><?php print $row['address']?></td>
        <td><?php print $row['phone']?></td>
      </tr>

    <?php

  }



?>







  </table>
</div>
<style>
  #wrap { width: 500px; border: 3px dotted blue}

</style>


<?php include('includes/footer.php'); ?>
