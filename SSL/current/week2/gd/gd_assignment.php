<?php

    // Kyle Wilson
    // Server Side

    header('Content-Type: image/jpeg');

    $jpg_img = imagecreatefromjpeg('puppy.jpg');

    $white = imagecolorallocate($jpg_img, 255, 255, 255);

    $font_path = '/Library/Fonts/Arial.ttf';

    $text = "Puppy";

    imagettftext($jpg_img, 65, 70, 75, 300, $white, $font_path, $text);

    imagejpeg($jpg_img);

    imagedestroy($jpg_img);

?>
