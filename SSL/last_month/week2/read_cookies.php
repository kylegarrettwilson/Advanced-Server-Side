<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php

    if (isset($_COOKIE["SSLCookie"])){
        $test = $_COOKIE["SSLCookie"];
    } else {
        $test = "Cookie was not set";
    }


    echo "<br><br> The value of Cookie is: " . $test;
    echo "<br><a href=unset_cookies.php>" . "Wanna unset cookie" . "</a>"






?>




<pre>
    <?php print_r($_COOKIE); ?>
</pre>









</body>
</html>