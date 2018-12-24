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

class CreateUser extends Command
{
    public function configure()
    {
        parent::configure();
        $this->setName('create:user');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $em = DoctrinecacheDatabase::getEntityManager();

        $entity = new User();
        $entity->setName('zhangxinghe');

        $em->persist($entity);
        $em->flush();
    }
}
