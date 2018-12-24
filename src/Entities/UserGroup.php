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
 * Class UserGroup
 *
 * @package Vendor\Doctrinecache\Entities
 * @ORM\Entity()
 * @ORM\Table(name="user_groups")
 * @ORM\Cache(usage="NONSTRICT_READ_WRITE")
 *
 * @ORM\HasLifecycleCallbacks()
 */
class UserGroup
{

    /**
     * @var integer
     * @ORM\Id()
     * @ORM\Column(name="group_id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $groupId;
    
    /**
     * @var VirtualUser
     * @ORM\OneToOne(targetEntity="VirtualUser", mappedBy="group", cascade={"persist"})
     * @ORM\Cache(usage="NONSTRICT_READ_WRITE")
     */
    protected $virtualUser;

    /**
     * @var string
     * @ORM\Column(type="string", length=16)
     */
    protected $name;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User", inversedBy="ownerUserGroup",cascade={"persist"})
     * @ORM\JoinColumn(referencedColumnName="user_id",onDelete="CASCADE")
     * @ORM\Cache(usage="NONSTRICT_READ_WRITE")
     */
    protected $owner;

    /**
     * @return int
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * @param int $groupId
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return User
     */
    public function getOwner()
    {
        return $this->owner;
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

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param User $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

}
