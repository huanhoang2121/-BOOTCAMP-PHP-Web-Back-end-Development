<?php
$Mang = array(
    array(3,2,1,4),
    array(4,5,6,3));
$max = $Mang[0][0];
for ($i = 0;$i< 2;$i++){
    $mangSo = count($Mang[$i]);
    for($j=0;$j<count($Mang[$i]);$j++)
        if($Mang[$i][$j]>$max)
            $max = $Mang[$i][$j];}
        echo $max;
?>


