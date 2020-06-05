<?php

    // ham test trong array con array con khong
    function testArray($arr){
        if(is_array($arr)){
            // biến số so sánh
            $test = 0;
            foreach($arr as $val){
                if(is_array($val)){
                    // nếu 1 phần tử là array sẽ cộng thêm 1
                    $test += 1;
                }
            }
            if($test > 0){
                // co array con
                return true;
            }else{
                // không có array con
                return false;
            }
        }else{
            // tham số không phải array
            return 0;
        }
    }

    //test array 2
    // test sau khi đã chạy quá ghep 1 lan
    function testArray2($arr){
        $test = 0;
        // xét các mảng con trong mang arr
        foreach($arr as $arr2){
            // neu mot mang con nao do con ton tai
            if(is_array($arr2)){
                foreach($arr2 as $arr3){
                    if(is_array($arr3)){
                        $test += 1;
                    }
                }
            }
        }
        if($test > 0){
            return true;
        }else{
            return false;
        }
    }

    // hàm chèn phần tử vào vi trí key trong mang tuan tu
    function chenArray($arr, $key, $value){
        // tao bien moi
        $result = [];
        // duyet mang arr
        foreach($arr as $k=>$v){
            if($k != $key){
                $result[] = $v;
            }elseif($k = $key){
                $result[] = $value;
                $result[] = $v;
            }
        }
        return $result;
    }

    $chenArray = [1,2,4,5,6];
    // print_r(chenArray($chenArray, 2, 3));

    // de quy 2
    function ghep2($arr){
        // co phai array khong
        if(is_array($arr)){
            // test array cap 2
            if(testArray2($arr)){
                // lay ra array con trong bien truyen vao
                foreach($arr as $key=>$value){
                    // duyet cac mang con
                    foreach($value as $key2=>$value2){
                        // tim mang chua phan tu con
                        if(is_array($value2)){
                            // nếu là lần đầu sẽ là thay thế giá trị mảng bằng phần tử của nó
                            if($key2 == 0){
                                // tao bien moi co gia tri giong $arr
                                $result = $arr;
                                // thay the gia tri tai vi tri $key bang gia tri moi khong phai mang $value2
                                $result[$key] = $value2; 
                                return $result;
                            }else{
                                // neu khong phai la lan dau thi chen
                                // them phan tu mới tại vị trí có key = $key + 1 + $key2
                                $keyChen = $key + 1 + $key2;
                                $result = chenArray($result,$keyChen,$value2);
                                return $result;
                            }
                            
                            
                            



                        }
                    }
                }
            }
        }
    }
    $arr2 = [[1,2,[7,8]],[4,5,6]];
    print_r(ghep2($arr2));

    // ghep chinh
    function ghep($arr){
        
        // dieu kien $arr phai la array
        if(is_array($arr)){
            // test xem co ton tai mang con trong mang $arr khong
            if(testArray($arr)){
                // co ton tai
                // $arr = [1,2,3,[4,5,6],2,3,4]
                // duyet mang
                foreach($arr as $key=>$val){
                    // tim phan tu la array
                    if(is_array($val)){
                        //duyet mang ton tai
                        foreach($val as $value){
                            $result = [];
                            $new = $arr;
                            $new[$key] = $value; 
                            $result[] = $new;
                            ghep2($result);
                        }
                        
                    }
                }
            }else{
                // nếu không có mảng con thì mảng mới là chính nó.
                return $arr;
            }
        }else{
            return "false";
        }
        return $result;
    }

    // test
    $arr1 = [1,2,3,[4,5,6],[8,9]];
    // print_r(ghep($arr1));

?>