<?php
    class men{
        public static $name = "Le Van A";
        public function show(){
            echo self::$name;
        }

        // getName
        public function getName($name){
            self::$name = $name;
        }
    }

    $men1 = new men;
    $men1->show();
    $show = 'dfasdf';
    echo $men1->getName($show).PHP_EOL;
    $men1->show();


?>