<?php
function image($last_id){
    $con = mysqli_connect("school-mysql-1", "root", "walrus", "portofolio");
    $target_dir = "../../upload/";
    $target_file = $target_dir .$last_id. basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if(isset($_POST["CreatePage"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            //    todo Throw error that it isnt a image

            $uploadOk = 0;
        }
    }

    if (file_exists($target_file)) {
        $uploadOk = 0;
    }

    if ($_FILES["fileToUpload"]["size"] > 500000) {
        $uploadOk = 0;
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        $uploadOk = 0;
    }


    if ($uploadOk == 0) {
        //    todo Throw error that image isnt uploaded
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        }


    }
    $filename = basename($_FILES["fileToUpload"]["name"]);
    $sql_q2 = "INSERT INTO `images`(`portofolioId`,`imageName`)VALUES(\"" . $last_id . "\",\"" . $filename . "\");";
    mysqli_query($con, $sql_q2);
    $con->close();
    return $target_file;
}
?>