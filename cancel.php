<?php
    include("db_config.php");

    $num = $_POST['number'];
    $doctor = $_POST['doctor'];

    $query = "DELETE FROM appointment WHERE phone='$num'";
    $con->exec($query);

    ?>
        <h4>Appointment Removed</h4>
    <?php
?>