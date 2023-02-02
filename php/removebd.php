<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Remove Email</title>
</head>
<body>

<?php
  $db = mysqli_connect('localhost', 'root', '', 'coroner')
    or die('Error connecting to MySQL server.');

  $udal_id = $_POST['udal_id'];

  $udal_query = "DELETE FROM entry WHERE id = '$udal_id'";
  mysqli_query($db, $udal_query)
    or die('Error querying database.');

  echo 'Customer removed: ' . $udal_id;

  mysqli_close($db);
?>

</body>
</html>