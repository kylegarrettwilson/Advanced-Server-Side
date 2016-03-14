<!DOCTYPE html>
<html>
<head>
    <title>Form Data</title>
    <meta charset="UTF-8"
</head>
<body>

    <h2>Kyle's Sign Up Form</h2>


        <!-- when the user hits submit on the form we want it to run the form_processing page
         using the post super global variable  -->

    <!--<form action="form_processing.php" method="post">  -->
        <form action="form_processing.php" method="post">

            Username: <input type="text" name="username" value=""/><br>
            Password: <input type="password" name="password" value=""/><br>

            <br>

            <input type="submit" name="submit" value="Submit" />

        </form>




</body>
</html>