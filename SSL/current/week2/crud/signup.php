<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

<!-- Kyle Wilson -->


<?php

    if(isset($_POST['submit'])){


        if ($_POST['password'] != null && $_POST['user'] != null){


            function makeArray()
            {

                $salt = "SuperFIASaltHash";
                $epass = md5($_POST['password'] . $salt);
                $euser = $_POST['user'];

                return array("USER NAME" => $euser, "Password" => $epass);





            }



            echo "<h2>Congrats!</h2>Your membership signup is successful!";
            echo "<table width=100% align=left border=0><tr><td>";

            $data = makeArray();

            foreach ($data as $attribute => $data){
                echo "<p align=left><font color = #FF4136>{$attribute}</font>: {$data}";
            }


            $tmp_file = $_FILES['avatarfile']['tmp_name'];

            $target_file = basename($_FILES['avatarfile']['name']);
            $upload_dir = "uploads";


            if (move_uploaded_file($tmp_file, $upload_dir . "/" . $target_file)){
                echo "file upload successful";
                echo "<br><br> Your photo: " . $target_file;
                echo "<br><br><img src='" . $upload_dir . "/" . $target_file . "' width='200'/>";
            }else {

                echo "<br><br> AVATAR: No photo.";

            }


            echo "<br><br><a href='database_form.php'>Please try logging in now!</a>";

            echo "</td></tr></table>";



            $user = 'root';
            $pass = 'root';

            $dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

            $salt = "SuperFIASaltHash";
            $epass = md5($_POST['password'] . $salt);
            $euser = $_POST['user'];

            $stmt = $dbh->prepare("insert into users101 (username, password, avatar)
                    values(:username, :password, :avatar)");
            $stmt->bindParam(':username', $euser);
            $stmt->bindParam(':password', $epass);
            $stmt->bindParam(':avatar', $target_file);
            $stmt->execute();



        }else{

            echo "Sorry you must register all fields.<br><br>";
            echo "<a href='database_form.php'>Try Again</a><br><br>";

        }
    }





?>




</body>
</html>