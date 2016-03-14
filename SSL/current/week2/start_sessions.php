<?php


    session_start();

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"
    <title></title>
</head>
<body>


<?php


    $_SESSION["first_name"] = "Kyle";
    $name = $_SESSION["first_name"];
    echo "Welcome to My Session, " . $name . "!";


?>


<pre>
        <?php print_r($_SESSION); ?>
</pre>




</body>
</html>