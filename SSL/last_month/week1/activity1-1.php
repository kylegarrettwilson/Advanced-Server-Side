<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"
    <title></title>
</head>
<body>

    <?php
        // Kyle Wilson
        // Server Side Languages
        $name = "Kyle Wilson";
        $age = 26;

        $person = array($name, $age, array("name" => "Kyle Wilson", "age" => "26"));

        echo "My name is " . $name . " and my age is " . $age;
        echo "<br>";
        echo 'My name is ' . $name . ' and my age is ' . $age;
        echo "<br>";
        echo $person[0] . " " . $person[1];
        echo "<br>";
        echo $person[2]["name"] . " " . $person[2]["age"];
        echo "<br>";

        $age = null;
        echo $age;

        unset($name);
        echo $name;



    ?>










</body>
</html>