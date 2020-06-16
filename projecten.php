<?php
include 'include/database/mysql.php';
if(empty($_GET['page'])){
$page = 0;
}else{
$page = $_GET['page'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1.0">

    <title>Projecten</title>
    <link rel="stylesheet" href="css/projecten.css" type="text/css">

</head>
<body>
<?php include_once "include/html/Header.html" ?>

<div id="Projecten-Title">
    <h1 id="Projecten-Title-Text">Projecten</h1>
</div>

<div class="projecten">
    <?php
    $sql_query = "SELECT * FROM `portofolio` LIMIT ". $page*10 .", 10";
    $result = mysqli_query($con, $sql_query);

    while($row = mysqli_fetch_array($result)){
        echo "<div id='project-".$row['id']."'>";
        echo "<h2>".$row['title']."</h2>";
        echo "<p>".substr($row['description'], 0, 150)."</p>";
        echo "<a href='project.php?project=".$row['id']."'>"."Open"."</a>";
        echo "</div>";
    }
    ?>

    <div id="page-selection">
        <?php

        if($page  != 0) {
            $prefiouspage = $page-1;
            echo "<a class=\"page-button\"  href='projecten.php?page=".$prefiouspage."'>$prefiouspage</a>";
        }
        echo "<a class=\"page-button\" >".$page."</a>";
        $nextpage = $page+1;
        echo "<a class=\"page-button\"  href='projecten.php?page=".$nextpage."'>$nextpage </a>";
        ?>
    </div>

</div>
<?php include_once "include/html/Footer.html" ?>

</body>
</html>
