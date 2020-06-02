<?php
    class Car{
        public $name;
        public $color;

        // tao
        public function __construct(){
            $this->name = "Xe \n";
            echo $this->name;
        }

        // function
        public function show(){
            echo "now \n";
        }


        // ket thuc
        public function __destruct(){
            echo '  huy'.PHP_EOL;
        }
    }
    $cartVin = new Car;
    $cartVin->show();

    // constant

    class echo_construc{
        const show = "\n".'Hello World';
        function show(){
            echo self::show;
        }
    }
    $show_constans = new echo_construc;
    echo $show_constans->show();

?>