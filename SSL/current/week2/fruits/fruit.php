<?php

    // Kyle Wilson
    // Server Side
    // Week Two





    $user = 'root';
    $pass = 'root';
    $dbh = new PDO('mysql:host=localhost; dbname=ssl; port:8889', $user, $pass);


    if (isset($_POST['submit'])){

        $name = $_POST['fruitname'];
        $color = $_POST['fruitcolor'];



        $stmt = $dbh->prepare("INSERT INTO fruits (fruitname, fruitcolor) VALUES (:fruitname, :fruitcolor);");

        $stmt->bindParam(':fruitname', $name);
        $stmt->bindParam(':fruitcolor', $color);
        $stmt->execute();
    }


?>


<!DOCTYPE html>
<html>
<head>
    <title>My Fruit Database</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
</head>
<body>


<div id="app">

    <h1>Fruit Database App</h1>

    <div id="headerimg"></div>



    <section>
        <form action="fruit.php" method="post">
            <label><br>
                <b>Fruit Name:</b> <input type="text" name="fruitname" value="" required ></label>
            <label><b>Fruit Color:</b><input type="text" name="fruitcolor" value="" placeholder="" required ></label>
            <input type="submit" name="submit" value="Submit">
        </form>
    </section>



    <section>
        <table>
            <tr>
                <th>Fruit Id</th>
                <th>Fruit Name</th>
                <th>Fruit Color</th>
                <th>Action</th>
            </tr>



<?php


    $stmt = $dbh->prepare('SELECT * FROM fruits ORDER BY fruitid ASC');

    $stmt->execute();

    $results = $stmt->fetchAll();

    foreach($results as $row){

        echo '<tr><td>' . $row['fruitid'] . '</td><td>' . $row['fruitname'] . '</td><td>' . $row['fruitcolor'] .
            '</td><td><a href="delete.php?id=' . $row['fruitid'] . '">Delete</a></td>';
    }




?>


     </table></section>






</div>







</body>
</html>
