<?php

    session_start();

    // update with a new id everytime the session is loaded
    session_regenerate_id();


    $file = file('dictionary.txt', FILE_IGNORE_NEW_LINES);

    $length = count($file)-1;
    $random = rand(0, $length);


    $_SESSION['captcha'] = $file[$random];

    session_write_close();





    function msg($msg){

        $container = imagecreate(250, 170);
        $black = imagecolorallocate($container, 0, 0, 0);
        $white = imagecolorallocate($container, 255, 255, 255);
        $font = "/Library/Fonts/Arial.ttf";

        imagefilledrectangle($container, 0, 0, 250, 170, $black); // building the rectangle

        $px = (imagesx($container) / (strlen($msg)/1.15));   // x axis
        $py = (imagesy($container) / 3.5);   // y axis


        imagefttext($container, 28, -27, $px, $py, $white, $font, $msg);
        header("Content-type: image/png");
        imagepng($container, null);
        imagedestroy($container);

    }


    msg($file[$random]);   // invoking function msg


?>