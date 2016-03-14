<?php

session_start();

if(isset($_SESSION['user_id'])){
    echo "Session status, user is logged in";
}



?>



<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>


<!-- Kyle Wilson -->



<?php

    $user = 'root';
    $pass = 'root';
    $salt = "SuperFIASaltHash";

    $dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);



    if ($_POST['username_li'] != null && $_POST['password_li'] != null){


        $usernameInput = $_POST['username_li'];
        $passwordInput = md5($_POST['password_li'] . $salt);

        $sth = $dbh->prepare('select userid, username, password, avatar from users101
                        where username = :username and password = :password');

        $sth->bindParam(':username', $usernameInput);
        $sth->bindParam(':password', $passwordInput);
        $sth->execute();

        $result = $sth->fetchAll();


        if (isset($result[0]['userid'])){



            // this is begging the session processor

            $user_id= $result[0]['userid'];
            $avatarfile = $result[0]['avatar'];

            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_name'] = $usernameInput;
            $_SESSION['pass_word'] = $passwordInput;
            $_SESSION['avatar_file'] = $avatarfile;
            echo 'Session check, you are now logged in';
            //
            // end of processor are we logged in?




            echo "Congrats!";
            echo "<a href='database_form.php'>Home</a> &nbsp;|&nbsp;";
            echo "<a href='dashboard.php'>Dashboard</a> &nbsp;|&nbsp;";
            echo "<a href='logout.php'>Logout</a> &nbsp;|&nbsp;";



            foreach ($result as $row){

                $sth = $dbh->prepare('select username, avatar from users101 where userid = :userid');
                $sth->bindParam(':userid', $row['userid']);
                $sth->execute();
                $result = $sth->fetchAll();


                echo "<p>";
                $userid = $row['userid'];
                foreach ($result as $row){
                    $photo = $row['avatar'];
                    $username = $row['username'];
                };

                if (!empty($photo)){
                    echo "<img src=\"uploads/" . $photo . "\" width=\"200\" class=\"right userPhoto\"/><br>";
                }else{
                    echo "no avatar";
                }

                echo "</p>";
                echo "<ul class=\"right userSection\">
                        <li>Your userid: ".$userid."</li>
                        <li>Your username: ".$username."</li>
                        </ul>";

            };


        } else {

            echo "So sorry your login failed<br><br>";
            echo "<a href='database_form.php'>Go back</a><br><br>";
        }



    }else {

        echo "Sorry you must submit both login fields<br><br>";
        echo "<a href='database_form.php'>Try again</a><br><br>";
    }



?>



</body>
</html>
