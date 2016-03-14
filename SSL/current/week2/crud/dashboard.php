<?php

session_start();


if(!empty($_SESSION["user_name"])) {
    ?>

    Welcome <b><?php echo $_SESSION["user_name"]; ?></b>! ~
    Click here to <a href="logout.php">Logout</a>&nbsp; |&nbsp;

    <?php

    $user_id = $_SESSION['user_id'];
    $usernameInput = $_SESSION['user_name'];
    $passwordInput = $_SESSION['pass_word'];
    $avatarfile = $_SESSION['avatar_file'];
}
    ?>



<!DOCTYPE html>
<html>
<head>
    <title>MySQL and PHP</title>
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>



<!-- Kyle Wilson -->



    <?php


        if(!isset($_SESSION["user_id"])){

            echo "<h2>User101 Dashboard</h2>";
            echo "Sorry - You must be logged in to access this area";
            echo "<a href='database_form.php'>Try logging in</a>";

        }else {

            echo "<a href='profile.php'>My Profile</a>";
            echo "<h2>Users101 Dashboard</h2>";
            echo "<tr>";
            echo "<th>User Id</th>";
            echo "<th>Username</th>";
            echo "<th>Password</th>";
            echo "<th>Profile Photo</th>";
            echo "<th>Action</th></tr>";





            $user = 'root';
            $pass = 'root';
            $salt = "SuperFIASaltHash";

            $dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);


            $stmt = $dbh->prepare('SELECT * FROM users101 ORDER BY userid ASC;');
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


            foreach ($result as $row){
                echo '<tr><td>' . $row['userid'] . '</td><td>' . $row['username'] . "    " . '</td><td>' .
                    $row['password'] . '</td><td>' . $row['avatar'] . "      " . ' </td><td><a href="deleteuser.php?id=' .
                    $row['userid'] . '"> Delete</a></td><td><a href="updateuser.php?id=' .
                    $row['userid'] . '"> Update</a></td><br><br>';
            }

        }


        echo "</tr></table>";



    ?>








