<?php
/**
 * Created by PhpStorm.
 * User: minhao
 * Date: 2016-04-20
 * Time: 11:22
 */

namespace Vendor\Doctrinecache\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 *
 * @package Vendor\Doctrinecache\Entities
 * @ORM\Entity()
 * @ORM\Table(name="users")
 * @ORM\Cache(usage="NONSTRICT_READ_WRITE")
 *
 * @ORM\HasLifecycleCallbacks()
 */
class User
{
    /**
     * @var integer
     * @ORM\Id()
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $userId;

    /**
     * @var VirtualUser
     * @ORM\OneToOne(targetEntity="VirtualUser", mappedBy="user", cascade={"persist"})
     * @ORM\Cache(usage="NONSTRICT_READ_WRITE")
     */
    protected $virtualUser;

    /**
     * @var string
     * @ORM\Column(type="string", length=16)
     */
    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return VirtualUser
     */
    public function getVirtualUser()
    {
        return $this->virtualUser;
    }

    /**
     * @param VirtualUser $virtualUser
     */
    public function setVirtualUser($virtualUser)
    {
        $this->virtualUser = $virtualUser;
    }
}
