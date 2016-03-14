<!DOCTYPE html>
<html>
<head>
    <title>Form Data</title>
    <meta charset="UTF-8"
</head>
<body>

    <h2>Congratulations: Your form was processed!</h2>

    <pre>
        <?php
        print_r($_POST);   // we want to see whats in the post variable
        ?>
    </pre>



    <br>


    <?php


        $username = $_POST["username"];   // go grab the username input and store it in the username variable here
        $password = $_POST["password"];

        echo "Username: {$username}" . "<br>";    // echo it out here

        echo "Password: {$password}";




    ?>







</body>
</html>