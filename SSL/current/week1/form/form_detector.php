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

        /*
        $username = $_POST["username"];   // go grab the username input and store it in the username variable here
        $password = $_POST["password"];

        echo "Username: {$username}" . "<br>";    // echo it out here

        echo "Password: {$password}";

        */


        // we are testing to see if the form has been submitted using the submit button

        if(isset($_POST['submit'])){

            echo "The following registration details were submitted!";


            // if username is not empty
            // this is for username variable

            if(!empty($_POST["username"])){
                $username = $_POST["username"];
                echo "Username: {$username}" . "<br>";
            }else{
                $username = "default user (no input)";
                echo "Username: {$username}" . "<br>";
            }



            // this is for the password variable

            if(!empty($_POST["password"])){
                $password = $_POST["password"];
                echo "Password: {$password}" . "<br>";
            }else{
                $password = "default user (no input)";
                echo "Password: {$password}" . "<br>";
            }




        } else {    // if nothing was submitted


            echo "No form details submitted";

            $username = " Default user no input";
            $password = " Default pass no input";

            echo "Username: {$username}" . "<br>";
            echo "Password: {$password}" . "<br>";




        }



    ?>







</body>
</html>