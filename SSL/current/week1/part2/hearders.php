<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"
    <title></title>
</head>
<body>

    <?php


    // if http header changes are placed below html
    // the value wont change -- unless we turn on output buffering
    // place this ahead of the html for it it work

    header("X-Powered-By: None of your business");

    ?>



    <pre>
        <?php
         // using header_list function
        // with print_r() to allow us to see header values
        print_r(headers_list());
        ?>
    </pre>

</body>
</html>