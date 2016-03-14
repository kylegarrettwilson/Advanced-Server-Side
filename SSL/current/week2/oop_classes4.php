<?php

    class Person {
        function say_hello(){           // this is the only method of this class
            echo "Hello from inside" . get_class($this) . "<br>";  // echo out the class
        }
        function hello(){
            $this->say_hello();   // this invokes the function above it
        }

    }


    $person = new Person();

    $person->say_hello();


    




?>