// so the html elements that would normally be at the top will be in include_header file

<?php

    include("include_header.php");

?>

<br><br>

<h1>This is where the main body starts:</h1>

<?php

    include("include_functions.php");

    echo hello("Everyone");  // invoking function within include_functions file

    include ("print_r.php");

?>


</body>
</html>