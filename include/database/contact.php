<?php

    include '../database/mysql.php';
    $sql_q = "INSERT INTO `contact`(`naam`,`email`,`bericht`)VALUES(\"" . $_POST['title'] . "\",\"" . $_POST['email'] . "\",\"" . $_POST['text']. "\");";
    mysqli_query($con, $sql_q);

    $last_id = $con->insert_id;
    header("location: ../../contact.php?id=".$last_id);
