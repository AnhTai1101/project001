<?php
    $a = 1.2;
    $b = 3.4;

    function tong($i, $y){
        $tong = $i + $y;
        return $tong;
    }
    echo tong($a, $b).PHP_EOL;

    // hieu
    function hieu($i , $y){
        $hieu = $i - $y;
        return $hieu;
    }
    echo(hieu($a,$b)).PHP_EOL;

    function int_tong(int $a,int $b) :int{
        $tong = $a + $b;
        return $tong;
    }
    echo(int_tong($a,$b));
?>