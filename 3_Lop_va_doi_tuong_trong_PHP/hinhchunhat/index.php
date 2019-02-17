<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
include "Rectangle.php";
$width  = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);
echo $rectangle->width;
echo $rectangle->height;
$rectangle->height = 30;
$rectangle->width = 20;
echo $rectangle->height;
echo $rectangle->width;
echo $rectangle->getPerimeter();
echo $rectangle->getArea();
echo ("Your Rectangle". $rectangle->display()); ?>
</body>
</html>