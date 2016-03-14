<?php

    class Person{   // classes can have their own variables


        var $first_name;
        var $last_name;

        var $arm_count = 2;
        var $leg_count = 2;

        function say_hello(){
            echo "Hello from the inside";

        }

        function hello(){
            $this->say_hello();
        }
    }


    $person = new Person();

    echo $person->arm_count;    // give me the arm count for this copy of person

    




?>