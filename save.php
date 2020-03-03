<?php
session_start();
$sql = "INSERT INTO Addresses(name,street_address,zip,city,state,country) VALUES('" . $_POST['name'] .
"','" . $_POST['street_address'] . "','" . $_POST['zip'] . "','" . $_POST['city'] . "','" . $_POST['state'] . "','" .
$_POST['country'] ."');"; $result = mysqli_query($conn, $sql);
//  print $sql;

  print("Save completed.");
  print("</html>");
  mysqli_close($conn);
} ?>

