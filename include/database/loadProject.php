<?php
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


class Project{
    public $id;
    public $title;
    public $url;
    public $techniek;
    public $datum;
    public $description;
    public $commentaar;
    public $author;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getTechniek()
    {
        return $this->techniek;
    }

    /**
     * @param mixed $techniek
     */
    public function setTechniek($techniek)
    {
        $this->techniek = $techniek;
    }

    /**
     * @return mixed
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * @param mixed $datum
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getCommentaar()
    {
        return $this->commentaar;
    }

    /**
     * @param mixed $commentaar
     */
    public function setCommentaar($commentaar)
    {
        $this->commentaar = $commentaar;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

}