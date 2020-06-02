<?php
    $a = 1;
    $b = 2;

    function sum(){
        $b = $GLOBALS['a'] + $GLOBALS['b'];
        $GLOBALS['a']++;
        echo $b.PHP_EOL;
    }
    sum();
    echo $GLOBALS['a'];
    echo $b;

?>