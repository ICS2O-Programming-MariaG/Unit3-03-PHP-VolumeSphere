<?php
  $radius = floatval($_POST["radius"]);
  $volume = $radius ** 3 * pi() * 4 / 3;
  echo "The volume of the sphere is " . number_format($volume, 2) . "cm<sup>3</sup>.";
?>
