<?php



include '../database/mysql.php';



if(isset($_POST['Login'])) {

    $uname = mysqli_real_escape_string($con, $_POST['username']);

    $password = hash('sha512', mysqli_real_escape_string($con, $_POST['password']));
    if ($uname != "" && $password != "") {

        $sql_query = "select count(*) as cntUser from author where name='" . $uname . "' and password='" . $password . "'";
        $result = mysqli_query($con, $sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['cntUser'];

        $result->close();

        if ($count == 1) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $uname;

            ob_start();
            header("location: ../../admin/home.php");
            ob_end_flush();
            die();
        } else {
            ob_start();
            header("location: ../../admin/login.php");
            ob_end_flush();
            die();
        }

    }
}