<!DOCTYPE html>
<html>
<head>
    <title>Form Data</title>
    <meta charset="UTF-8"
</head>
<body>

    <h2>User Validation</h2>

    <?php

    // using isset to see if there is a value


    $value = "x";

    if (!isset($value) || empty($value)){
        echo "Validation failed.";
    }else {
        echo "Validation was successful";
        echo "<br>";
        echo $value;
    }




    // this is using presence to validate
    // using trim so empty spaces don't count
    // use === to avoid false positives

    $value = trim(" 0 ");
    if (!isset($value) || $value === ""){  // if it is non existent
        echo "Validation failed.";
    }else {
        echo "Validation was successful";
        echo "<br>";
        echo $value;
    }



    // using string length
    // minimum number
    // can do it the same way but flipped around with $max

    $value = "abcd";
    $min = 3;

    if (strlen($value) < $min){  // if it is not minimum string length
        echo "Validation failed.";
    }else {
        echo "Validation was successful";
        echo "<br>";
        echo $value;
    }



    ?>








</body>
</html>