<?php
    abstract class men{
        public $name;
        abstract function speak();
    }

    class men1 extends men{
        public function speak(){
            // định nghĩa lại function speak trong class men
            $this->name = 'Hello';
            echo $this->name;
        }
    }

    $men2 = new men1;
    echo $men2->speak();
?>