<?php


    $name = "SSLCookie";
    setcookie($name, null, time() - 3600);
    echo "<br>Your cookie is unset!";
    echo "<br><a href=set_cookies.php>" . "Go set the cookie" . "</a>";



?>

<pre>
        <?php print_r($_COOKIE); ?>
</pre>

