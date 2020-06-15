<?php
include_once '../include/admin/Authenticate.php';
isActive();
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

<?php include_once "../include/html/Footer.html" ?>

</body>
</html>



