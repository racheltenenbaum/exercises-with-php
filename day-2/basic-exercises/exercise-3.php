<?php
  function average($math, $physics, $english) {
    if ((gettype($math) == "integer") && (gettype($physics) == "integer")
        && (gettype($english) == "integer")) {
      $sum = $math + $physics + $english;
      $avg = $sum / 3;
      echo "The student's average grade is: {$avg}";
    }
    else {
      echo "Please only use whole numbers";
    }
  }

  average(80, 70, 100)
?>
