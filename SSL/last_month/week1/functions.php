<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"
    <title></title>
</head>
<body>

    <!-- user defined functions -->

    <?php

    // do not use duplicate names for functions

    function say_hello(){
        echo "Welcome to Full Sail";
    }


    say_hello();   // do not invoke function above the function

    function say_hello_2($word){
        echo "Hello {$word}";
    }

    say_hello_2("Class of 2008");





    ?>





    <!-- arguments -->

    <?php

    function say_hello_3($word){
        echo "Hello {$word}";
    }

    $name = "SSL classes";
    say_hello_3($name);    // this shows that you can pass other variables in other than what was previously defined in the function



    // passing multiple parameters

    function better_hello($greeting, $target, $punct){
        echo $greeting . " " . $target . $punct;
    }

    better_hello("Hello", $name, "!");    // invoking it three different times
    better_hello("Greetings", $name, "!");
    better_hello("Goodbye", $name, null);


    ?>








    <!-- Return values from a function -->


    <?php

    function add($val1, $val2){
        $sum = $val1 + $val2;
        return $sum;
    }

    $result1 = add(3,4);
    $result2 = add(5, $result1);   // taking result1 sum and adding it to 5
    echo $result2;


    // only one return per function, returning multiple values

    function add_subt($var1, $var2){
        $add = $var1 + $var2;
        $subt = $var1 - $var2;

        return array($add, $subt);
    }


    $result_array = add_subt(10, 5);
    echo "add: " . $result_array[0];
    echo "subt: " . $result_array[1];



    list($add_result, $sub_result) = add_subt(20, 7);   // list is a cleaner way of doing it
    echo "Add: " . $add_result;     // no array key numbers
    echo "Subt: " . $sub_result;



    ?>





    <!-- function scope -->

    <?php

    $bar = "outside";

    function kyle(){
        global $bar; // this is allowing a global variable inside


        if (isset($bar)){    // using outside bar
            echo "Kyle is: " . $bar;
        }

        $bar = "Inside";

    }

    echo "1: " . $bar; // this will be outside bar
    kyle();
    echo "2: " . $bar; // this will be inside bar



    ?>






    <!-- setting default argument functions -->

    <?php

    function painter($color){
        return "The painter is using {$color}";
    }

    echo painter("Blue"); // the blue has to be there because of the default argument of color




    function paint($room = "office", $color = "red"){   // these are the defaults if there are no new parameters passed in
        return "The painter is using {$color} and {$room}";
    }

    echo paint();   // uses default
    echo paint("bedroom", "blue");   // changes it to bedroom and blue
    echo paint("living room", null);






    ?>







</body>
</html>