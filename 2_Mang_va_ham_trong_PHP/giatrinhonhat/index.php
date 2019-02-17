<?php
$Mang = array(2,7,3,4,5,6);
$min = $Mang[0];
for ($i= 0;$i< count($Mang) ; $i++) {
	if ($Mang[$i] < $min  )
		 $min = $Mang[$i] ;
}
echo $min;
 ?>