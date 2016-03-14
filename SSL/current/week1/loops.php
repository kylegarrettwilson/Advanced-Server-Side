<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"
    <title></title>
</head>
<body>

    <!-- while loops -->

    <?php

        $count = 0;

        while ($count <= 10){

            if ($count == 5){
                echo "Five, ";
            } else{
                echo $count . ", ";
            }
            $count++;
        }

        echo "count: $count";


    ?>




    <!-- For loops -->



    <?php

    for($count = 0; $count <= 10; $count ++){ // start with o and go up by one
        echo $count . ", ";
    }


    ?>




    <!-- foreach loop good for looping through arrays -->

    <?php

    $ages = array(4, 5, 8, 8, 34, 56, 3);

    foreach($ages as $age) { //calling ages array and reading each value as age
        echo "age: {$age}";
    }


    $prices = array("Yolo" => 2008,
                    "Groovy" => 1974,
                    "Cool" => null);

    foreach($prices as $saying => $date){
        echo"{$saying}: ";
        if (is_int($date)){
            echo $date;
        } else {
            echo "priceless";
        }
    }


    ?>







</body>
</html>