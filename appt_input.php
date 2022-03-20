<?php
    include("db_config.php");

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>App-Fontend</title>
    </head>
    <body>
        <form action="appt.php" method="POST">
            <p>
                <label for="Name">Name: </label>
                <input type="text" name="name">
            </p>
            <p>
                <label for="Number">Number: </label>
                <input type="text" name="number">
            </p>
            <p>
                <label for="Date">Date: </label>
                <input type="text" name="date">
            </p>
            <p>
                <label for="Doctor name">Doctor name: </label>
                <input type="text" name="dname">
            </p>
            <button>Submit</button>
        </form>
    </body>
    </html>
    <?php
?>