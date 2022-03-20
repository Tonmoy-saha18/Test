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
    <a href="appt_input.php">Make an appointment</a>
    <br>
    <a href="cancel_input.php">Cancel an appointment</a>
    <?php
?>