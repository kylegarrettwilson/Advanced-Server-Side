<?php

// how to unset cookies

    $name = "SSLCookie";
    setcookie($name, null, time() - 3600);  // value is null and some time in the past

    echo "<br> Your cookie is now unset!";

    echo "<a href=set_cookies.php>" . "Go Set It Again?" . "</a>";




?>


<pre>
    <?php print_r($_COOKIE); ?>
</pre>
