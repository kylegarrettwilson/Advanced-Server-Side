<?php

    session_start();

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"
    <title></title>
</head>
<body>

    <?php


        // Kyle Wilson
        // Server Side


        $_SESSION["last_name"] = "Wilson";
        $_SESSION["first_name"] = "Kyle";
        $_SESSION["fav_color"] = "Red";


        $last = $_SESSION["last_name"];
        $first = $_SESSION["first_name"];
        $color = $_SESSION["fav_color"];


        echo "<br><a href='getsession.php?last_name=$last&first_name=$first&color=$color'>" . "Click Here!" . "</a>"

    ?>
