<?php
    include("db_config.php");

    $num = $_POST['number'];
    $doctor = $_POST['doctor'];

    $query = "DELETE FROM appointment WHERE phone='$num'";
    $con->exec($query);

    ?>
        <h4>Appointment Removed</h4>
        <a href="appt_input.php">Make an appointment</a>
    <br>
        <a href="cancel_input.php">Cancel an appointment</a>
    <?php
?>