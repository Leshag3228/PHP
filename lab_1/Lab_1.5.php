<?php
    ini_set("display_errors",1);
    error_reporting(E_ALL);

    $x = rand(1,10);
    $y = rand(1,10);
    print($x.'+'. $y.'='.($x+$y).'<br>');
    print($x.'-'. $y.'='.($x-$y).'<br>');
    print($x.'*'. $y.'='.($x*$y).'<br>');
    print($x.'/'. $y.'='.($x/$y).'<br>');