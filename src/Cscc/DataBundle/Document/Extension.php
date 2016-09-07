<?php
/**
 * Created by PhpStorm.
 * User: wangQi
 * All Rights Reserved
 * Time: 16:13
 */

namespace Cscc\DataBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(repositoryClass="Cscc\DataBundle\Document\ExtensionRepository")
 */
class Extension
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(name="no",type="int")
     */
    protected $no;

    /**
     * @MongoDB\Field(name="pwd",type="string")
     */
    protected $pwd;

    /**
     * @MongoDB\Field(name="isActive",type="boolean")
     */
    protected $isActive;


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set no
     *
     * @param int $no
     * @return self
     */
    public function setNo($no)
    {
        $this->no = $no;
        return $this;
    }

    /**
     * Get no
     *
     * @return int $no
     */
    public function getNo()
    {
        return $this->no;
    }

    /**
     * Set pwd
     *
     * @param string $pwd
     * @return self
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
        return $this;
    }

    /**
     * Get pwd
     *
     * @return string $pwd
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return self
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
}
