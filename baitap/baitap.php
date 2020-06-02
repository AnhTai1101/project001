<?php


$a=[1,2,3,4];
$b=["a","b"];

function GhepPhanTu($a,$b){
    // tao mang nhan ket qua
    $result = [];
    // foreach $a
    foreach($a as $val){
        // foreach $b
        foreach($b as $val2){
            // dua gia tri vao mang con
            $result[] = [
                $val,$val2
            ];
        }
        // dua gia tri vao mang chinh

    }
    return $result;
}


$c=GhepPhanTu($a,$b);
//ket qua mong cho la 1 mang , moi item la 1 mang nhu sau:
// [[1,"a"],[1,"b"],[2,"a"],[2,"b"],[3,"a"],[3,"b"]]

$d=["x",1];

// ghep phan tu 2
function GhepPhanTu1($c,$d){
    // tao bien hung ket qua
    $result = [];
    foreach($c as $key){
        // ket qua se la [1,'a'] foreach tiep mang con
        // tao bien hung mang con
        foreach($d as $key1){
            $nam = $key;
            $nam[] = $key1;
            $result[] = $nam;
        }

    }
    return $result;
}
print_r(GhepPhanTu1($c,$d));

$e= GhepPhanTu1($c,$d);

//ket qua mong cho la 1 mang , moi item la 1 mang nhu sau:
// [[1,"a","x"],[1,"a",1],[1,"b","x"],[1,"b",1],[2,"a","x"],[2,"a",1],...]


function GhepPhanTuNangCao($arrayInput){
//write your code here
}

//$arr=[$a,$b,$d];// $arr co the co so luong item bat ki
//$r= GhepPhanTuNangCao($arr);
//ket qua mong cho la 1 mang , moi item la 1 mang nhu sau:
// [[1,"a","x"],[1,"a",1],[1,"b","x"],[1,"b",1],[2,"a","x"],[2,"a",1],...]