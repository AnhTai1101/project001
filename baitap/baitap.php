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
// print_r(GhepPhanTu1($c,$d));

$e= GhepPhanTu1($c,$d);

//ket qua mong cho la 1 mang , moi item la 1 mang nhu sau:
// [[1,"a","x"],[1,"a",1],[1,"b","x"],[1,"b",1],[2,"a","x"],[2,"a",1],...]

$result = [];
function GhepPhanTuNangCao($arr){
    foreach($arr as $arr){
        if(is_array($arr)){
            GhepPhanTuNangCao($arr);
        }else{
            $result[] = $arr;
        }
    }
//write your code here
}

function flatten_array($simple){
    static $outputs=array();
    foreach ( $simple as $value){
        $out2 = [];
        if(is_array($value)){
            flatten_array($value);
        }else{
            // $outputs[]=array_merge($outputs,$simple );
            $out2[] = $value;
        }
        $outputs[] = $out2;
    
    }
    return $outputs;
}
$out=flatten_array($e);
print_r($out);

//$arr=[$a,$b,$d];// $arr co the co so luong item bat ki
//$r= GhepPhanTuNangCao($arr);
//ket qua mong cho la 1 mang , moi item la 1 mang nhu sau:
// [[1,"a","x"],[1,"a",1],[1,"b","x"],[1,"b",1],[2,"a","x"],[2,"a",1],...]

// cho 1 array bất kì. $arr = [$arr1, $arr2, . . . .]
// $arr1,$arr2, . . . các array con có thể là biến hoặc array con gồm các array con bé hơn
// Vd $arr1 = [$arr11, $arr12,...]
// viết hàm ghép các phần tử.
// kết quả mong muốn
// VD: $ketqua = [[$arr11,$arr21],[$arr11,$arr22],[$arr12,$arr21],[$arr12,$arr22], . . .]