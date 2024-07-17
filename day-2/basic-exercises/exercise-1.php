<?php
  $result = "";

  if (isset($_POST["submit"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    if ($fname == "") {
      $result = "Please insert your first name";}
    elseif ($lname == "") {
      $result = "Please insert your last name";}
    else {
      $result = "Welcome {$fname} {$lname}!";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post">
    <input type="text" placeholder="First Name" name="fname"><br>
    <input type="text" placeholder="Last Name" name="lname"><br>
    <input type="submit" placeholder="Submit" name="submit">
  </form>
  <p><?= $result?></p>
</body>
</html>
