<?php
    $int = 10;
    // echo
    var_dump($int);

    // float
    $flo = 1.2;
    var_dump($flo);

    // string
    $string = 'Hello World';
    var_dump($string);

    // array
    $arr = [
        'new'=>'Hello World'
    ];
    var_dump($arr);

    // boolean
    var_dump(1==1);

    // obj
    class new01{
        public function new01(){
            $this->model = 'Hello World';
        }
    }
    $val = new new01();
    echo $val->model;

    class new02{
        public $ec;
        public function new12(){
            $this->ec = 'Hello World 01';
        }
    }

    $val02 = new new02();
    $val02->new12();
    echo $val02->ec;

?>