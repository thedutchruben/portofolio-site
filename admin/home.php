<?php
include '../include/admin/Authenticate.php';
isActive();
include '../include/admin/RankHandle.php';

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




<?php
echo "Rank : " . getRank()->getName();
?>
<table style="width: 100%">
    <tr>
        <th>Postname</th>
        <th></th>
        <th></th>
    </tr>

    <?php
    include "../include/database/mysql.php";
    $sql_query = "SELECT title,id FROM `portofolio`";
    $result = mysqli_query($con, $sql_query);

    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$row['title']."</td>";
        echo "<td><a href='updatePage.php?project=".$row['id']."'>Edit</a></td>";
        echo "<td><a href='deletePage.php?project=".$row['id']."'>Delete</a></td>";
        echo " </tr>";
    }
    ?>





</table>
<?php include_once "../include/html/Footer.html" ?>

</body>
</html>



