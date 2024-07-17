<?php
  function minutesToHours($minutes) {
    $hourdecimals = $minutes / 60;
    $hours = floor($hourdecimals);
    $hourfraction = $hourdecimals - $hours;
    $minutesremaining = $hourfraction * 60;

    echo "{$minutes} minutes = {$hours} hours(s) and {$minutesremaining} minute(s)";
  }

  minutesToHours(150)

?>
