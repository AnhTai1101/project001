<?php
    class men{
        public static $name = "Hello World";
        public function show(){
            // self sẽ gọi tới $name trong class men
            echo self::$name;
            echo "\n";
            // nếu có class được kế thừa và set lại giá trị name thì sẽ hiển thị giá trị name đã được set
            echo static::$name;
        }

        public function getName($name1){
            self::$name = $name;
        }
    }

    class men2 extends men{
        public static $name = "Le Van B";
    }

    $leMinh = new men2;
    $leMinh->show();
?>