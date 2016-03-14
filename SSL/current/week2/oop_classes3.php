<?php

    class Person {
        function say_hello(){           // this is the only method of this class
            echo "Hello from inside";
        }

    }


    $person = new Person();
    $person2 = new Person();


    echo get_class($person) . "<br>";    // get the class name of variable person is storing

    if(is_a($person, 'Person')){    // is the variable person part of the class person
        echo "Yup, its a person.";
    } else {
        echo "Not a person";
    }


    if(is_a($person, 'Animal')){    // is the variable person part of the class person
    echo "Yup, its a person.";
    } else {
        echo "Not a person";
    }








    // use arrow notation to invoke the function of the class






?>