<?php
function getRank(){
    include '../admin/Authenticate.php';
    isActive();
    include "../database/mysql.php";
    include "Rank.php";

    $username = $_SESSION['name'];
    $sql_statemment= "SELECT `userRank` FROM `author` WHERE `name` = \"".$username."\";";
    $result = mysqli_query($con, $sql_statemment);
    $row = mysqli_fetch_array($result);



    $rank_Statement = "SELECT `id`,
    `name`,
    `canCreatePages`,
    `canDeletePages`,
    `canEditPages`,
    `canCreateUsers`,
    `canEditUsers`,
    `canRemoveUsers`
FROM `ranks` WHERE `id` = ".$row['userRank'].";";


    $result_rank = mysqli_query($con, $rank_Statement);
    $row_rank = mysqli_fetch_array($result_rank);
    echo $row_rank['id'];
    echo $row_rank['name'];
    $rank = new Rank();

    $rank->setId($row_rank['id']);
    $rank->setCanCreatePages($row_rank['canCreatePages']);
    $rank->setCanDeletePages($row_rank['canDeletePages']);
    $rank->setCanEditPages($row_rank['canEditPages']);
    $rank->setCanCreateUsers($row_rank['canCreateUsers']);
    $rank->setCanEditUsers($row_rank['canEditUsers']);
    $rank->setCanRemoveUsers($row_rank['canRemoveUsers']);
    $rank->setName($row_rank['name']);
    return $rank;
}