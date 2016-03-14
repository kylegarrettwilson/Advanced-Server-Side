<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"
    <title></title>
</head>
<body>

    <h1>Congrats! You made it!</h1>

    <pre>
        <?php

            print_r($_GET);   // this detects that there are values for the first page variables.

            $id = $_GET["id"];   // this is just getting the value and printing it to the second page
            echo $id;

            $company = $_GET["company"];
            echo $company;

        ?>
    </pre>


    <br><br><a href="print_r.php">Go Back</a>





</body>
</html>