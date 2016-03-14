<?php



session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transtional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
    <title></title>
</head>
<body>


    <h2>Kyles Captcha</h2>

    <p>Are you human? If so, enter the phrase: </p><br>

    <form action="captcha_validation.php" method="post">

        Captcha Verify:
        <input type="text" name="captcha"<br><br><img src="captcha.php" />
        <br>
        <br>
        <input type="submit" name="submit" value="Submit"/>
    </form>







    </form>




</body>

</html>
