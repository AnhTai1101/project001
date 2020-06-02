<?php


$a=[1,2,3];
$b=["a","b"];

function GhepPhanTu($a,$b){
    //write your code here
}

$c=GhepPhanTu($a,$b);
//ket qua mong cho la 1 mang , moi item la 1 mang nhu sau:
// [[1,"a"],[1,"b"],[2,"a"],[2,"b"],[3,"a"],[3,"b"]]

$d=["x",1];

$e= GhepPhanTu($c,$d);

//ket qua mong cho la 1 mang , moi item la 1 mang nhu sau:
// [[1,"a","x"],[1,"a",1],[1,"b","x"],[1,"b",1],[2,"a","x"],[2,"a",1],...]


function GhepPhanTuNangCao($arrayInput){
//write your code here
}

$arr=[$a,$b,$d];// $arr co the co so luong item bat ki
$r= GhepPhanTuNangCao($arr);
//ket qua mong cho la 1 mang , moi item la 1 mang nhu sau:
// [[1,"a","x"],[1,"a",1],[1,"b","x"],[1,"b",1],[2,"a","x"],[2,"a",1],...]