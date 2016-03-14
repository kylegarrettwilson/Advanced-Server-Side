<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"
    <title></title>
</head>
<body>

    <!-- routing web pages -->

    <?php /*

    print_r(get_defined_vars());

    echo "<br>";

    var_dump(get_defined_vars());

    echo "<br>";

    var_dump(debug_backtrace());

    */

    ?>



    <!-- links and url using get -->

    <?php

    $link_name = "Visit Second Page";

    $id = 2015;

    $company = "Full Sail!"


    ?>

    <a href="second_page.php?id=<?php echo $id; ?>&company=<?php echo $company; ?>">

       <?php echo $link_name; ?></a>





</body>
</html>