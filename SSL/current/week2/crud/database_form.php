<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

        <!-- Kyle Wilson -->


    <!-- sign up form -->


    <h2>Sign Up Today!</h2>

    <form enctype="multipart/form-data" action="signup.php" method="post">

        <fieldset>
            <legend>Sign Up Now</legend>
            Username <input type="text" name="user" value="" /><br>
            Password <input type="password" name="password" value="" /><br>

            <br>Select avatar photo:
            <input type="file" name="avatarfile" value="" /><br>
            <br>
            <input type="submit" value="Sign Up" name="submit">
        </fieldset>

    </form><br><br>






    <!-- login in form -->

    <form action="login.php" method="post">

        <fieldset>
            <legend>Already a member?</legend>

            <p>
                <label for="username_li">Username:</label><input id="username_li" type="text" name="username_li">
            </p>
            <p>
                <label for="password_li">Password:</label><input id="password_li" type="password" name="password_li">
            </p>
            <p class="rel">
                <button type="submit" class="right">Submit</button>
            </p>
        </fieldset>

    </form>





</body>

</html>