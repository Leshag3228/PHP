<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);
function user_fun($u, $t)
{
    if ($u > 0 && $t > 0) {
        return (pow($u, 2) + pow($t, 2));
    } elseif ($u <= 0 && $t <= 0) {
        return ($u + (pow($t, 2)));
    } elseif ($u > 0 && $t <= 0) {
        return ($u - $t);
    } elseif ($u <= 0 && $t > 0) {
        return ($u + $t);
    }
}
$a = rand(5, 20);
$b = rand(10, 15);
$z = user_fun($a, $b) + user_fun(pow($a, 2), pow($b, 2)) - user_fun($a - 1, $b);
echo "<pre>";
echo "a: $a" . PHP_EOL;
echo "b: $b" . PHP_EOL;
echo "z: $z" . PHP_EOL;
echo "</pre>";
