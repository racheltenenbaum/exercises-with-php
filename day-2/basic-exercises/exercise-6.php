<?php
  $info = "";
  if (isset($_POST["submit"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $age = $_POST["age"];
    $hobbies = $_POST["hobbies"];
    $fname = (strlen($fname)>5)? "<text style='color:green'>{$fname}</text>":"<text style='color:red'>{$fname}</text>" ;
    $info = "<div>First name: {$fname}<br>
    Last name: {$lname}<br>
    Age: {$age}<br>
    Hobbies: {$hobbies}</div>";
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
    <input type="text" placeholder="Age" name="age"><br>
    <input type="text" placeholder="Hobbies" name="hobbies"><br>
    <input type="submit" placeholder="Sumit" name="submit">
  </form>
  <p><?= $info
  ?></p>

</body>
</html>
