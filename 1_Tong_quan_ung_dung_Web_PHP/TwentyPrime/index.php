<?php
function isPrimeNumber($n)
{
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
echo("20 số nguyên tố đầu tiên là: <br>");
$numbers = 10;
$dem = 0;
for ($i = $numbers; $i < 1000; $i++) {
    if (isPrimeNumber($i)) {
        echo($i . " ");
        $dem++;
        if ($dem == 20) {
            break;
        }
    }
}
?>