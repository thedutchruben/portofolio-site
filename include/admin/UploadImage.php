<?php
function image($last_id){
    $con = mysqli_connect("school-mysql-1", "root", "walrus", "portofolio");
    $target_dir = "../../upload/";
    $target_file = $target_dir .$last_id. basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    if(isset($_POST["CreatePage"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
//        echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
//        echo "File is not an image.";
            $uploadOk = 0;
        }
    }

// Check if file already exists
    if (file_exists($target_file)) {
//    echo "Sorry, file already exists.";
//    echo $_FILES["fileToUpload"]["name"];
//    echo $target_file;
        $uploadOk = 0;
    }

// Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
//    echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

// Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
//    echo $imageFileType;
//    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
//    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
//        echo "Sorry, there was an error uploading your file.";
        }


    }
    $filename = basename($_FILES["fileToUpload"]["name"]);
    $sql_q2 = "INSERT INTO `images`(`portofolioId`,`imageName`)VALUES(\"" . $last_id . "\",\"" . $filename . "\");";
    mysqli_query($con, $sql_q2);
    $con->close();
    return $target_file;
}
?>