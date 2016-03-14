<?php

    class Person {
        function say_hello(){           // this is the only method of this class
            echo "Hello from inside";
        }

    }



    $methods = get_class_methods("Person");    // go find all of the methods for that class
    foreach($methods as $method){
        echo $method . "<br>";
    }






?>