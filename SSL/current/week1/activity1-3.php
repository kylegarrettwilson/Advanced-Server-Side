<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"
    <title></title>
</head>
<body>


    <!-- Kyle Wilson
         Activity 1-3 -->




    <?php



    $colors = array(0 => "Red",
                    1 => "Pink",
                    2 => "Blue",
                    3 => "Baby Blue",
                    4 => "Green",
                    5 => "Lime");

    foreach($colors as $number => $hue){
        echo " Color " . $number . " is " . $hue . "<br>";
    }



    echo "<br>";


    $rev = array_reverse($colors);


    echo "<br>";


    foreach($rev as $num => $hu){
        echo " Color " . $num . " is " . $hu . "<br>";
    }


    echo "<br>";



    foreach($colors as $number => $hue){

        for($number=0; $number <= 5; $number++){
                if ($number % 2) {continue;}
                echo " Color " . $number . " is " . $hue . "<br>";
        }
        break;
    }




    ?>





</body>
</html>
