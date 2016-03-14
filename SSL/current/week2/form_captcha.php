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



    <h2>Kyle's Captcha Validation</h2>

    <h4>Are you human? Enter the phrase below: <br><br></h4>



    <form action="captcha_validate.php" method="post">

    Captcha Verify:
    <input type="text" name="captcha" /><br><br><img src="captcha.php" />
    <br><br>
    <input type="submit" name="submit" value="submit" />
    </form>




</body>
</html>

