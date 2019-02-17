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
	if(isset($_POST['submit'])){$value1 = $_POST['value1'];
		$value2 = $_POST['value2'];
		$action = $_POST['action'];
		}
	try{
		if($value1 == 0 || $value2 == 0 ) throw new Exception('Lỗi');
		if($action=="Addition"){
		echo "<b>Result:</b><br>";
		echo $value1+$value2;
		}
		if($action=="Subtraction"){
		echo "<b>Result:</b><br>";
		echo $value1-$value2;
		}
		if($action=="multiplication"){
		echo "<b>Result:</b><br>";
		echo $value1*$value2;
		}
		if($action=="division"){
		echo "<b>Result:</b><br>";
		echo $value1/$value2;
		}
	}
	catch (Exception $ex){
		echo $ex -> getMessage();
	}
	 ?>
</body>
</html>