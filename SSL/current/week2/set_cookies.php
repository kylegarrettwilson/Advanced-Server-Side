<?php

// remember that the cookies change the http header.
// any changes must be requested before any html output, unless output buffering is on

    echo "My Cookies is set";

    $name = "SSLCookies";  // cookie name cannot have spaces
    $value = "1508 - Day 3";
    $expire = time() + (60*60*24*7);   // sec, min, hours, days  this equals one week


    setcookie($name, $value, $expire);

    echo "<br><a href=unset_cookies.php>" . "Wanna UNSET Your Cookie?" . "</a>";

?>


<pre>
        <?php print_r($_COOKIE); ?>
</pre>