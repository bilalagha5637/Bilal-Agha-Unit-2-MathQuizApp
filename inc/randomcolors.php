<?php
//Below Code randomly changes the background color after each question


$colors = array();
$colors[] = "#FFE4B5";
$colors[] = "#98FB98";
$colors[] = "#E0FFFF";
$colors[] = "#DCDCDC";
$colors[] = "#C0C0C0";
$colors[] = "#BC8F8F";
$colors[] = "#F4A460";
$colors[] = "#DAA520";
$colors[] = "#FAEBD7";
$colors[] = "#00FFFF";
$colors[] = "#5F9EA0";


$colorChange = $colors[array_rand($colors)];
return $colorChange ;




?>