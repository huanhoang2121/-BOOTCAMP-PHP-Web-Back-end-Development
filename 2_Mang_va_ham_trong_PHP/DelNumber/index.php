<?php
$array = array(2,7,3,4,5,6);
$x = 3;
for ($i= 0;$i< count($array) ; $i++) {
	if ($array[$i] === $x  )
		 unset($array[$i]);
}
print_r($array);
 ?>