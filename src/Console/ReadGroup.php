<?php
/**
 * Created by PhpStorm.
 * User: zhangxinghe
 * Date: 18/12/24
 * Time: 16:53
 */

namespace Vendor\Doctrinecache\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Vendor\Doctrinecache\Database\DoctrinecacheDatabase;
use Vendor\Doctrinecache\Entities\User;
use Vendor\Doctrinecache\Entities\UserGroup;

class ReadGroup extends Command
{
    public function configure()
    {
        parent::configure();
        $this->setName('read:group');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $em = DoctrinecacheDatabase::getEntityManager();

        /** @var UserGroup[] $groups */
        $groups = $em->getRepository(UserGroup::class)->findAll();
        foreach ($groups as $group) {
            if (!$group->getOwner()) {
                mdebug($group->getGroupId());
            }
        }
    }
}
