<?php
include '../database/mysql.php';


if(isset($_POST['CreateUser'])) {
    $uname = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);

    $password = hash('sha512', mysqli_real_escape_string($con, $_POST['password']));
    $sql_q = "INSERT INTO `author`(`name`,`email`,`password`)VALUES(\"" . $uname . "\",\"" . $email . "\",\"" . $password. "\");";
    mysqli_query($con, $sql_q);
    header("location: ../../admin/login.php");

}
