<?php
    ini_set("display_errors",1);
    error_reporting(E_ALL);

 $num_e = 2.71828;
 echo ('Число e равно '.$num_e.'<br>');
 const num_e1 = 2.71828;
 echo ('$num_e1 = '.num_e1. '-'.gettype(num_e1). '<br>');
 const num_e2 = '2.71828';
 echo ('$num_e2 = '.num_e2. '-'.gettype(num_e2). '<br>');
 const num_e3 = true;
 echo ('$num_e3 = '.num_e3. '-'.gettype(num_e3). '<br>');
 const num_e4 = 2;
 echo('$num_e4 = '.num_e4. '-'.gettype(num_e4). '<br>');