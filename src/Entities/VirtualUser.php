<?php
/**
 * Created by PhpStorm.
 * User: minhao
 * Date: 2016-04-20
 * Time: 11:19
 */

namespace Vendor\Doctrinecache\Entities;

use Doctrine\ORM\Mapping as ORM;
use Oasis\Mlib\Doctrine\AutoIdTrait;

/**
 * Class VirtualUser
 *
 * @package Vendor\Doctrinecache\Entities
 *
 * @ORM\Entity()
 * @ORM\Table(name="virtual_users")
 * @ORM\Cache(usage="NONSTRICT_READ_WRITE")
 * @ORM\HasLifecycleCallbacks()
 */
class VirtualUser
{
    use AutoIdTrait;
    
    /**
     * @var User
     * @ORM\OneToOne(targetEntity="User", inversedBy="virtualUser")
     * @ORM\JoinColumn(referencedColumnName="user_id", onDelete="CASCADE")
     */
    protected $user;

    /**
     * @var UserGroup
     * @ORM\OneToOne(targetEntity="UserGroup", inversedBy="virtualUser")
     * @ORM\JoinColumn(referencedColumnName="group_id", onDelete="CASCADE")
     */
    protected $group;

    /**
     * @return UserGroup
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @param UserGroup $group
     */
    public function setGroup($group)
    {
        $this->group = $group;
    }
    
}

