<?php
    trait humen{
        function speak(){
            echo "hello World";
        }
    }

    trait people{
        function speak(){
            echo "hello World 1";
        }
        
        function write(){
            echo "Now";
        }
        
    }

    //ket thua
    class men{
        use humen, people
        {
            // sử dụng speak trong humen thay vì trong people
            humen::speak insteadof people;
        }
        function show(){
            $this->speak();
        }
    }

    $men1 = new men;
    $men1->show();

?>