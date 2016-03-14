<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"
    <title></title>
</head>
<body>

    <!-- These are variables -->

    <?php

    $var1 = 10;
    echo $var1;

    echo "<br>";

    $var1 = 100;    // resetting the same variable to something else
    echo $var1;

    echo "<br>";

    $var2 = "Hello World";
    echo $var2;

    echo "<br>";
    echo "<br>";

    ?>









    <!-- These are strings -->


    <?php
    echo "Hello World<br>";
    echo 'Hello World<br>';

    $greeting = "Hello";
    $target = "World";
    $phrase = $greeting . " " . $target;
    echo $phrase;

    // embedding a variable have to use double quotes

    echo "$phrase Again<br>";
    echo "{$phrase}Again<br>";   // no space between the words

    // string functions

    $first = "The quick brown fox";
    $second = " jumped over the lazy dog.";

    $third = $first;
    $third .= $second;   // concatenates the two
    echo $third;
    echo "<br>";


    // changing case of letters

    echo strtolower($third);
    echo "<br>";
    echo strtoupper($third);
    echo "<br>";
    echo ucfirst($third);
    echo "<br>";
    echo ucwords($third);
    echo "<br>";
    echo strlen($third);
    echo "<br>";
    echo "A" . trim(" B C D "). "E";   // trims the beginning and ending spaces
    echo "<br>";
    echo strstr($third, "brown");   // shows brown and everything else
    echo "<br>";
    echo str_replace("quick", "super-fast", $third); // replaces
    echo "<br>";
    echo str_repeat($third, 2);    // repeats
    echo "<br>";
    echo substr($third, 5, 10);    // show from character 5 plus 10 more
    echo "<br>";
    echo strpos($third, "brown");   // Shows position
    echo "<br>";
    echo strchr($third, "z");   // returns everything after z
    echo "<br>";




    echo "<br>";
    echo "<br>";

    ?>




    <!-- These are Numbers -->

    <?php

    $var4 = 4;
    $var5 = 5;

    echo ((1 + 2 + $var4) * $var5) / 2 - 5;

    echo "<br>";

    echo abs(0 - 300);   // returns the highest number between the two

    echo "<br>";

    echo pow(2, 8);   // does exponentials

    echo "<br>";

    echo sqrt(100);  // does the square root

    echo "<br>";

    echo fmod(20, 7);   // does modulo

    echo "<br>";

    echo rand();   // picks a random number

    echo "<br>";

    echo rand(1, 10);   // does a random number between the two

    echo "<br>";






    $var5 += 56;     // these are all changing the actual value of the variable by whatever parameter
    echo $var5;

    echo "<br>";

    $var5 -= 56;
    echo $var5;

    echo "<br>";

    $var5 *= 56;
    echo $var5;

    echo "<br>";

    $var5 /= 56;
    echo $var5;

    echo "<br>";

    $var5++;          // this is adding one
    echo $var5;

    echo "<br>";

    $var5--;         // this is subtracting one
    echo $var5;

    echo "<br>";








    $float = 3.14;
    echo round($float, 1);
    echo "<br>";
    echo ceil($float);     // round down
    echo "<br>";
    echo floor($float);    // rounds up

    echo "<br>";




    $integer = 3;

    echo "Is $integer float? " . is_float($integer);    // false equals nothing. True equals 1
    echo "Is $float float? " . is_float($float);           // can also do numeric



    ?>







    <!-- Arrays -->



    <?php

    $numbers = array(4,8,7,5,4,6);
    echo $numbers[0];


    $mixed = array(6, "fox", "dog", array("x", "y", "z"));
    echo $mixed[2];
    echo $mixed[3][1];
    $mixed[2] = "cat";   // changing the value in array
    $mixed[4] = "Horse";    // adding to the array
    $mixed[] = "Ted"; // adds to the end of the array

    echo "<br>";



    // associative arrays are unordered list of index objects. Keys and values.


    $assoc = array("first_name" => "Kyle", "last_name" => "Wilson");
    echo $assoc["first_name"];
    echo "<br>";
    echo $assoc["first_name"] . " " . $assoc["last_name"];
    echo "<br>";
    echo $assoc["first_name"] = "Todd";    // changes the value of first name
    echo "<br>";
    echo $assoc["first_name"] . " " . $assoc["last_name"];
    echo "<br>";


    $numbers = array(4,8,7,5,4,6);
    $numbers = array(0 => 4, 1 => 8, 2 => 7, 3 => 5, 4 => 4, 5 => 6);
    echo $numbers[0];
    echo "<br>";
    echo count($numbers);
    echo "<br>";
    echo max($numbers);
    echo "<br>";
    echo min($numbers);

    echo "<br>";
    sort($numbers); print_r($numbers);     // sort from low to high
    rsort($numbers); print_r($numbers);    // sort from high to low

    echo "<br>";

    $num_string = implode(" * ", $numbers);  // turns an array into a string separated by a char
    print_r(explode(" * ", $num_string)); // turns a string into an array using separator

    echo "<br>";

    in_array(15, $numbers);  // this returns a true or false if there is a 15

    echo "<br>";


    ?>






    <!-- Booleans (true or false)-->

    <?php

    $results1 = true;
    $results2 = false;

    echo $results1;
    echo $results2;

    echo "<br>";

    is_bool($results2);   // is results a boolean?

    echo "<br>";

    $number = 3.14;
    if(is_float($number)){    // checking to see if it is a float
        echo "It is a float.";
    }




    // this is all stuff dealing with null, Isset, empty


    $var1 = null;
    $var2 = "";

    echo is_null($var2);    // checking to see if it is null
    echo is_null($var1);

    echo isset($var1);    // checking to see if it is set (defined)

    echo empty($var1);    // checking to see if it is empty


    ?>



    <!-- type juggling and casting -->

    <?php


    $count = "2 cats";
    echo gettype($count);   // get me the type for this

    $count += 3; // add three to it
    echo gettype($count);   // get type, php does some changing here

    $cats = "I have " . $count . " cats.";
    echo gettype($cats);     // goes back to a string



    // now we are going to set the type

    settype($count, "integer");    // set it to an integer
    echo gettype($count);

    $count = (string) $count;    // setting it to a string. You can use this or the other one
    echo gettype($count);






    // constants are opposites of variables
    // all caps
    // no dollar sign
    // rarely used
    // cannot redefine it or change it later
    // use constants when the value is permanent

    $max_width = 980;   // this is how to define a variable
    define("MAX_WIDTH", 980);   // this is how to define the same thing in a constant
    echo MAX_WIDTH;



    ?>










</body>
</html>