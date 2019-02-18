<?php
$array = array(2,7,3,4,5,6);
$minnumber = $array[0];
for ($i= 0;$i< count($array) ; $i++) {
	if ($array[$i] < $minnumber  )
		 $minnumber = $array[$i] ;
}
echo $minnumber;
 ?>