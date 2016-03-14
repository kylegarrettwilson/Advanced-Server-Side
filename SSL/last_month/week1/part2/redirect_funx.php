<?php

    // redirecting to a new page with a function

    function redirect_to($new_location){
        header("Location: " . $new_location);
    exit;
    }



    $logged_in = $_GET['logged_in'];



    if ($logged_in == "1"){
        redirect_to("first_page.php");
    } else {
        redirect_to("http://www.fullsail.com");
    }






?>