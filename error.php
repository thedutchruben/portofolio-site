<?php

$id = $_GET['error'];
if($id == null||$id == ""){
    $id = 0;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1.0">

    <title>     <?php echo "ERROR" ?></title>
</head>
<body>
<?php include_once "include/html/Header.html" ?>

<div class="error-title">
    <?php echo "Error" ?>
</div>


<div class="error-description">
    <?php echo "Er is iets fout gegaan probeer het later opniew"?>

</div>

<?php include_once "include/html/Footer.html" ?>

</body>
</html>
