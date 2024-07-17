<?php
  function boxDimensions($width, $height, $depth) {
    $area = $width * $height;
    $volume = $width * $height * $depth;
    return "The area of the box is: {$area}.<br>
    The volume of the box is: {$volume}.";
  }

  echo boxDimensions(10, 20, 30);
?>
