<?php
    include("db_config.php");
    $name = $_POST['name'];
    $number = $_POST['number'];
    $date = $_POST['date'];
    $doctor = $_POST['dname'];

    $query = "INSERT INTO appointment VALUES(NULL, '$number', '$name', '$date', '$doctor')";
    $con->exec($query);

    ?>
    <h5>Data Inserted</h5>
    <?php
?>