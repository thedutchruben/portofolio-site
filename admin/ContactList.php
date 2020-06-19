<?php
include_once '../include/admin/Authenticate.php';
isActive();
include_once '../include/admin/RankHandle.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1.0">
    <title>Ruben de Roos</title>
</head>
<body>
<?php include_once "../include/admin/AdminHeader.html"?>

<center><h1>Welkom <?php echo $_SESSION['name'] ?></h1></center>




<table style="width: 100%">
    <tr>
        <th>Title</th>
        <th></th>
    </tr>

    <?php
    include "../include/database/mysql.php";
    $sql_query = "SELECT naam,id FROM `contact`";
    $result = mysqli_query($con, $sql_query);

    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$row['naam']."</td>";
        echo "<td><a href='Contact.php.php?id=".$row['id']."'>Open</a></td>";
        echo " </tr>";
    }
    ?>





</table>
<?php include_once "../include/html/Footer.html" ?>

</body>
</html>
