<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"
    <title></title>
</head>
<body>

    <?php

    $a = 4;
    $b = 3;
    $c = 1;
    $d = 20;

    if (($a >= $b) || ($c >= $d)){    // or is ||
        echo "A is larger than B or ";
        echo "C is larger than D.";
    }


    if (($a >= $b) && ($c >= $d)){    // AND both must be true
        echo "A is larger than B and ";
        echo "C is larger than D.";
    }




    $e = 100;
    if (!isset($e)){   // is e not set? if true then it equals 200. So it is false.
        $e = 200;
    }

    echo $e;


    $quantity = "";    // if quantity is empty and not numeric
    if (empty($quantity) && !is_numeric($quantity)){
        echo "You must enter a quantity!";
    }



    ?>



    <!-- if else statements/ conditionals -->

    <?php

    $a = 3;
    $b = 4;

    if ($a > $b){
        echo "a is larger than b.";
    }





    $new_user = true;
    if ($new_user) {   // if $new_user is true
        echo "<h1>Welcome!</h1>";
    }







    $numerator = 20;
    $denominator = 0;     // do not divide by 0
    $result = 0;

    if ($denominator > 0){
        $result = $numerator / $denominator;
    }

    echo "Result: {$result}";







    // Else and else if statements


    $a = 3;
    $b = 4;

    if ($a > $b){
        echo "A is larger than B";
    } elseif ($a < $b){
        echo "A is smaller than B";
    } else {
        echo "A is equal to B";
    }



    ?>



    <!-- switch case statements -->

    <?php
    // good for multiple conditionals in one process


    $a = 2;   // you can also do this with strings

    switch ($a){
        case 0:
            echo "A equals 0";
            break; // this stops once the correct one is found
        case 1:
            echo "A equals 1";
            break;
        case 2:
            echo "A equals 2";
            break; // this stops once the correct one is found
        case 3:
            echo "A equals 3";
            break;
        default:
            echo "a is not 0, 1, 2, or 3";
            break;
    }


    ?>








</body>
</html>