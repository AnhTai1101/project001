<?php

    // cong bien vao mang thanh 1 mang
    function CongArry($arr, $val){
        $result = [];
        $arr[] = $val;
        $$result = $arr;
        return $result;
    }

    //
    //ghep2
    function ghep2($val, $result1,$arr,$key11){
        foreach($val as $val2){
            if(is_array($val2)){
                $result1[] = ghep2($val2, $result1,$arr,$key11);
            }else{
                // tạo 1 mảng mới giống mảng $arr để sử dụng
                $new = $arr;
                // thay vị trí mảng thành các phần tử đơn lẻ con
                $new[$key11] = $val2;
                // đưa các mảng con thành mảng mới
                $result1[] = $new;
            }
        }
        return $result1;
    }

    //
    $arr = [[1,2,3,4,5],[11,12,23,44],[['as','asdf','afd'],['er','as','as']],[324,34,23,4,23]];
    $arr1  = [[1,2,3,4,5],6,7];
    $arr2  = [[1,2,3,4,5],[6,7,8,9],['a','b','c']];
    $arr3  = [[1,2,3,4,5],[6,7,8,9],1];
    function ghep($arr){
        $result1 = [];
        foreach($arr as $key11=>$val){
            // neu laf mang
            if(is_array($val)){
                // duyet tung phan tu mang
                foreach($val as $val2){
                    if(is_array($val2)){
                        $result1[] = ghep2($val2, $result1,$arr,$key11);
                    }else{
                        // tạo 1 mảng mới giống mảng $arr để sử dụng
                        $new = $arr;
                        // thay vị trí mảng thành các phần tử đơn lẻ con
                        $new[$key11] = $val2;
                        // đưa các mảng con thành mảng mới
                        $result1[] = $new;
                        // 
                    }
                    
                    
                }
            }
        }
        return $result1;
    }

    // print_r(ghep($arr));



    function ghep1($arr){
        $result = $arr;
        $result1 = [];
        foreach($arr as $key11=>$val){
            // neu laf mang
            if(is_array($val)){
                // duyet tung phan tu mang
                foreach($val as $val2){
                    if(is_array($val2)){
                        return 12;
                    }else{
                        // tạo 1 mảng mới giống mảng $arr để sử dụng
                        $new = $arr;
                        // thay vị trí mảng thành các phần tử đơn lẻ con
                        $new[$key11] = $val2;
                        // đưa các mảng con thành mảng mới
                        $result1[] = $new;
                        // 
                    }
                    
                    
                }
            }else{
                // $result1[] ;
            }
        }
        return $result1;
    }

    print_r(ghep1($arr3));
?>