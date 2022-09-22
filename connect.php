<?php

    $connection = new mysqli('localhost', 'root', '', 'bootstrapCrud');

    if(!$connection){
        die(mysqli_error($connection));
    }

?>