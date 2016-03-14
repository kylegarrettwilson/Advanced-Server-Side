<?php


    session_start();

?>


<?php

        // if captcha exists
    if(array_key_exists('captcha', $_SESSION)){
        echo "Yes, captcha exists!";
    }


    $captchaInput = $_POST['captcha'];
    $captchaVerify = $_SESSION['captcha'];


    // does the form input match the session input

    if ($captchaInput == $captchaVerify){

        echo "Congrats!! You are human!";
        echo "<a href='form_captcha.php'> Try again?</a>";

    } else{

        echo "You have entered incorrectly.";
        echo "<a href='form_captcha.php'> Try again?</a>";
    }



?>




<pre>
    <?php
        print_r(get_defined_vars()); // see what variables are being used
    ?>
</pre>