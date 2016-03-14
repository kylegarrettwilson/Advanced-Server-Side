<?php



    session_start();

    session_regenerate_id();  // regen a new image

    $file = file('dictionary.txt', FILE_IGNORE_NEW_LINES);  // just focus on one line


    $length = count($file)-1;   // taking off the array starting at 0
    $random = rand(0, $length);  // pick a random line


    $_SESSION["captcha"] = $file[$random];
    session_write_close();









    // GD Library

    function msg($msg){
        $container = imagecreate(250, 170);  // size of the image
        $black = imagecolorallocate($container, 0, 0, 0);  // set rgb for black
        $white = imagecolorallocate($container, 255, 255, 255);  // set rgb for white
        $font = '/Library/Fonts/Arial.ttf';   // use this font
        imagefilledrectangle($container, 0, 0, 250, 170, $black);   // create the rectangle box

        $px = (imagesx($container) / (strlen($msg)/1.15));  // this sets the x axis
        $py = (imagesy($container) / 3.5);  // this sets the y axis


        imagefttext($container, 28, -27, $px, $py, $white, $font, $msg);
        header("Content-type: image/png");   // the file should be a png
        imagepng($container, null);  // output png file to browser
        imagedestroy($container);   // destroy file to free up memory



    }



    msg($file[$random]);   //invokes the msg function and display random selection for user


?>