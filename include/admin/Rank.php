<?php


/**
 * Class Rank
 */
class Rank
{
    /**
     * @var
     */
    public $id;
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $canCreatePages;
    /**
     * @var
     */
    public $canDeletePages;
    /**
     * @var
     */
    public $canEditPages;
    /**
     * @var
     */
    public $canCreateUsers;
    /**
     * @var
     */
    public $canEditUsers;
    /**
     * @var
     */
    public $canRemoveUsers;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCanCreatePages()
    {
        return $this->canCreatePages;
    }

    /**
     * @param mixed $canCreatePages
     */
    public function setCanCreatePages($canCreatePages)
    {
        $this->canCreatePages = $canCreatePages;
    }

    /**
     * @return mixed
     */
    public function getCanDeletePages()
    {
        return $this->canDeletePages;
    }

    /**
     * @param mixed $canDeletePages
     */
    public function setCanDeletePages($canDeletePages)
    {
        $this->canDeletePages = $canDeletePages;
    }

    /**
     * @return mixed
     */
    public function getCanEditPages()
    {
        return $this->canEditPages;
    }

    /**
     * @param mixed $canEditPages
     */
    public function setCanEditPages($canEditPages)
    {
        $this->canEditPages = $canEditPages;
    }

    /**
     * @return mixed
     */
    public function getCanCreateUsers()
    {
        return $this->canCreateUsers;
    }

    /**
     * @param mixed $canCreateUsers
     */
    public function setCanCreateUsers($canCreateUsers)
    {
        $this->canCreateUsers = $canCreateUsers;
    }

    /**
     * @return mixed
     */
    public function getCanEditUsers()
    {
        return $this->canEditUsers;
    }

    /**
     * @param mixed $canEditUsers
     */
    public function setCanEditUsers($canEditUsers)
    {
        $this->canEditUsers = $canEditUsers;
    }

    /**
     * @return mixed
     */
    public function getCanRemoveUsers()
    {
        return $this->canRemoveUsers;
    }

    /**
     * @param mixed $canRemoveUsers
     */
    public function setCanRemoveUsers($canRemoveUsers)
    {
        $this->canRemoveUsers = $canRemoveUsers;
    }


}