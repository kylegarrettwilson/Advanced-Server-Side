<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"
    <title></title>
</head>
<body>





<br> I am reading my Cookies <br>


<?php

    if (isset($_COOKIE["SSLCookie"])) {

        $test = $_COOKIE["SSLCookie"];   // assigning the cookie value to this variable
    } else {

        $test = "Cookie is NOT set";
    }


    echo "<br> The Value of Cookie is" . $test;
    echo "<br><a href=unset_cookies.php>" . "Wanna unset the cookies?" . "</a>"


?>


<pre>
        <?php print_r($_COOKIE); ?>
</pre>









</body>
</html>