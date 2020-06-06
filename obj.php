<?php
    class Bo{
        public function name(){
            return "Class cha";
        }
    }

    class Con extends Bo{
        public function name(){
            return "Class con";
        }

        public function nameBo(){
            return parent::name();
        }
    }
    $class = new Con;

    // goi toi name trong class con
    $con = $class->name();
    echo $con;
    echo "\n";

    // goi toi name trong class bo
    $bo = $class->nameBo();
    echo $bo;
    

?>