<?php



    echo "My SSL Browser Cookie";

    $name = "SSLCookie";    // no spaces in the name
    $value = "1508 - Day 3";
    $expire = time() + (60*60*24*7); // seconds minutes hours days

    setcookie($name, $value, $expire);

    echo "<br><a href=unset_cookies.php>" . "Wanna unset cookie" . "</a>"


?>

<pre>
    <?php print_r($_COOKIE); ?>
</pre>
