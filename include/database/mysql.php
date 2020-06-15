<?php
session_start();
$con = mysqli_connect("school-mysql-1", "root", "walrus", "portofolio");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

