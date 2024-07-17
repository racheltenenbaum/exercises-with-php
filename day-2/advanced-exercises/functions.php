<?php
  $weather = "";

  function fToC($fdegrees) {
    $cdegrees = ($fdegrees - 32) * 5/9;
    return $cdegrees;
  }

  if (isset($_POST["submit"])) {
    $fdegrees = $_POST["fdegrees"];
    $cdegrees = fToC($fdegrees);
    if ((0 <= $cdegrees) && ($cdegrees <= 5)) {
      $weather = "It's {$cdegrees} degrees Celsius<br><img src='https://static.scientificamerican.com/sciam/cache/file/8A0A57E0-4FA4-42DC-A44267E8D5D8C94C_source.png?w=1350' class='img-thumbnail' style='max-width: 200px;' alt='glaciers'><br>
      It's very cold!";
    }
    elseif ((6 <= $cdegrees) && ($cdegrees <= 10)) {
      $weather = "It's {$cdegrees} degrees Celsius<br><img src='https://i0.wp.com/eos.org/wp-content/uploads/2022/01/rain.jpg?fit=1200%2C675&ssl=1' class='img-thumbnail' style='max-width: 200px;' alt='cold'><br>
      It's cold!";
    }
    elseif ((11 <= $cdegrees) && ($cdegrees <= 15)) {
      $weather = "It's {$cdegrees} degrees Celsius<br><img src='https://thumbs.dreamstime.com/b/tree-windy-weather-lone-nordic-island-hailuoto-northern-finland-66292565.jpg' class='img-thumbnail' style='max-width: 200px;' alt='pleasant'><br>
      It's pleasant!";
    }
    elseif ((16 <= $cdegrees) && ($cdegrees <= 20)) {
      $weather = "It's {$cdegrees} degrees Celsius<br><img src='https://a.rgbimg.com/users/m/mi/micromoth/600/mouY5LE.jpg' class='img-thumbnail' style='max-width: 200px;' alt='warm'><br>
      It's warm!";
    }
    elseif (21 <= $cdegrees) {
      $weather = "It's {$cdegrees} degrees Celsius<br><img src='https://images.pexels.com/photos/1152359/pexels-photo-1152359.jpeg?cs=srgb&dl=pexels-marctutorials-298692-1152359.jpg&fm=jpg' class='img-thumbnail' style='max-width: 200px;' alt='hot'><br>
      It's hot!";
    }
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playwrite+BE+VLG:wght@100..400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h1 class="m-3" style="font-family:Playwrite BE VLG, cursive; font-size: 80pt; text-align:center; color:greenyellow">Weather Checker</h1><br>
    <div style="margin:auto; width: 50%; padding:20px; border-radius:3px; text-align:center; font-family: Quicksand, sans-serif; background-color:#E6E6FA">
      <form method="post">
        <input style="padding:10px" type="text" placeholder="How hot is it in C°?" name="fdegrees"><br><br>
        <input style="background-color:darkgreen; color:lavender; border-radius:3pt; border:none; padding:10px;" type="submit" placeholder="Submit" name="submit">
      </form><br>
      <?php
        echo "<div style='font-family: Quicksand, sans-serif;'> {$weather} </div>";
      ?>
    </div>
  </div>
</body>
</html>
