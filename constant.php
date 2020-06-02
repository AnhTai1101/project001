<?php

    // hang so phan biet hoa thuong
    echo 'Hang so phan biet hoa thuong'.PHP_EOL;
    define('string','Phan biet HOA thuong',true);
    echo string;

    // khong phan biet hoa thuong
    echo 'Hang so khong phan biet hoa thuong';
    // khong truyen bool mac dinh la false
    define('STRIN', 'Khong phan biet Hoa thuong');
    echo strin;

    // array define
    define('arr',['Hello',' World']);
    echo arr[1];

    // global
    function test(){
        echo string;
    }
    test();
