<?php
    class new01{
        public function name(){
            return "Class cha";
        }

        public function nameParent(){
            // self::$model = 'fasdfa';
            return self::name();

        }
    }

    class new02 extends new01{
        public function name(){
            return "Class con";
        }
         public function parent(){
            return $this->nameParent();

         }
    }
    $val = new new02;
    $cha = $val->nameParent();
    echo $cha.PHP_EOL;
    $con = $val->name();
    echo $con;
    
?>