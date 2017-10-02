<?php
    function telOp() {
        $celsius = 37;
        $b =  32;
        $d = 9;
        $e = 5;
        $fahrenheit = $celsius * $d / $e + $b;
        echo "37 * 9 / 5 + 32 = ".$fahrenheit; echo " Fahrenheit";
    }
    telOp();
?>