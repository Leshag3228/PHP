<?php
    srand();
    echo 'Наибольшее случайное число - '.getrandmax();
    $a = rand();
    $b = rand(1,50);
    $c = lcg_value();
    echo '<br> rand()= '.$a;
    echo '<br> rand (1,50) = '.$b;
    echo '<br> lcg_value() = '.$c;
    ini_set("display_errors",1);
    error_reporting(E_ALL);