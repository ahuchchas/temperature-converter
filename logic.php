<?php
    $c = $_GET['cel'];
    $f = $_GET['far'];
    $k = $_GET['kel'];


    if($c!="") {
        $inputValueInCel = floatval($c);
    }
    if($f!="") {
        $inputValueInCel = (floatval($f)-32)/1.8;
    }

    if($k!="") {
        $inputValueInCel = floatval($k) - 273.15;
    }

    if(isset($_GET['cbtn'])) {
        $output = $inputValueInCel;
        echo "$output degree Celcius";
    }
    else if(isset($_GET['fbtn'])) {
        $output = ($inputValueInCel*1.8) + 32;
        echo "$output degree Fahrenheit";
    }
    else if(isset($_GET['kbtn'])) {
        $output = $inputValueInCel + 273.15;
        echo "$output Kelvin";
    }