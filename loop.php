<?php
    echo "Vong lap for \n";
    for($i = 0; $i < 10; $i++){
        echo $i."\n";
    }

    // foreach
    echo "Vong lop foreach \n";
    $arr = [
        'nam', 'name1', 'name2'
    ];
    foreach($arr as $key=>$value){
        echo "Vị trí $key có giá trị $value \n";
    }

    $test = 0;
    // while
    echo "Vong lap While \n";
    while($test < 10){
        echo "So thu $test \n";
        $test++;
    }

    $test2 = 0;
    // do while
    echo " Vong lap Do While \n";
    do{
        echo "Gia tri trong vong lap $test2 \n";
        $test2++;
    }while($test2<10);
