<?php
include "Project.php";
$id = $_GET['project'];
$con = mysqli_connect("school-mysql-1", "root", "walrus", "portofolio");


$project = new Project();
$project->setId($id);



$sql_query = "SELECT * FROM `portofolio` WHERE `id`='" . $id . "'";


$result = mysqli_query($con, $sql_query);
if(mysqli_num_rows($result) == 0){

}else{
    while($row = mysqli_fetch_array($result)){
        $project->setTitle($row['title']);

        $project->setDescription($row['description']);

        $project->setDatum($row['datum']);

        $project->setAuthor($row['author']);

        $project->setUrl($row['url']);

    }
}

$result->close();
