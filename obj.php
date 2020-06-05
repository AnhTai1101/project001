<?php
    class new01{
        public $model = 'fg';
        public function getModel(){
            return "Class cha";
        }

        public function echoModel(){
            // self::$model = 'fasdfa';
            return self::getModel();

        }
    }

    class new02 extends new01{
        public function getModel(){
            return "Class con";
        }
    }
    $val = new new02;
    $cha = $val->echoModel();
    echo $cha.PHP_EOL;
    $con = $val->getModel();
    echo $con;
    
?>