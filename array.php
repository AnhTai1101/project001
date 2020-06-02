<?php
    $arr = array('name1', 'name2','name3');
    
    // count
    echo count($arr).PHP_EOL;

    // mang tuan tu
    foreach($arr as $key=>$val){
        echo "key $key => value = $val \n";
    }
    // lay gia tri nhat dinh trong mang
    echo "key 0 value = $arr[0]";

    // doc tung key va value trong mang
    $arr2 = array(
        'key0'=>'name1',
        'key1'=>'name2',
        'key2'=>'name3',
        'key3'=>'name4'
    );

    foreach($arr2 as $k=>$vl){
        echo "Gia tri tai vi tri $k la $vl \n";
    }


    // mang trong mang
    echo "\n";
    $arr3 = array(
        array('name1','name2','name3'),
        array('key1','key2','key3'),
        array('value1','value2','value3'),
        array('base1','base2','base3')
    );

    foreach($arr3 as $key1=>$value1){
        echo "Array co gia tri $key1 co gia tri lan luot la \n";
        foreach($value1 as $value2){
            echo "   $value2";
        };
        echo "\n";
    };
?>