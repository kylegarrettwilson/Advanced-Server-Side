<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"
    <title></title>
</head>
<body>


    <!-- Kyle Wilson
         Server Side Languages -->




    <?php


        $fullname = "Steve Jobs";
        $age = 66;

        $person = array($fullname, $age, array("name" => "Steve Jobs", "age" => "66"));

        echo "My name is " . $fullname . " and my age is " . $age;
        echo "<br>";
        echo 'My name is ' . $fullname . ' and my age is ' . $age;
        echo "<br>";
        echo $person[0] . " " . $person[1];
        echo "<br>";
        echo $person[2]["name"] . " " . $person[2]["age"];
        echo "<br>";

        $age = null;
        echo $age;

        unset($fullname);
        echo $fullname;



    ?>










</body>
</html>