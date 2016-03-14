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

        function full_name(){
            return $this->first_name . " " . $this->last_name;
        }
    }




    $jake = new Person();

    echo $jake->arm_count;    // give me the arm count for this copy of person
    $jake->first_name = "Jake";
    $jake->last_name = "Taylor";


    echo $jake->full_name();

    




?>