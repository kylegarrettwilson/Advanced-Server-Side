<?php

session_start();
?>


<?php

    // check to see if captcha exists in the page

    if(array_key_exists('captcha', $_SESSION)){
        echo "Yes, captcha exists!<br><br>";
    }




    // storing captcha input session variable for verification later:

    $captchaInput = $_POST['captcha'];
    $captchaVerify = $_SESSION['captcha'];


    if ($captchaInput == $captchaVerify){
        echo "Congrats! You are human!<br><br>";
        echo "<a href='form_captcha.php'>Try Again</a><br>";
    } else {
        echo "It did not work alien.";
        echo "<a href='form_captcha.php'>Try Again</a><br>";
    }
?>
