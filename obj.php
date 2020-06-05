<?php
    class new01{
        public static $model = 'fg';
        public function getModel(){
            $this->model = 'Hello World';
        }

        public function echoModel(){
            // self::$model = 'fasdfa';
            echo self::$model;
        }

        public function getModel1(){
            self::$model = 'dsfsdf';
        }
    }

    class new02 extends new01{
        public function get(){
            $this->echoModel();
        }
    }
    $val = new new02;
    $val->getModel1();
    $val->echoModel();
?>