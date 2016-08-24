<?php
/**
 * Created by PhpStorm.
 * User: wangqi
 * Date: 2016/8/23
 * Time: 10:06
 */

namespace Cscc\DataBundle\DataFixtures\ODM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cscc\UserBundle\Document\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $plainPassword='admin';
        $encoder = $this->container->get('security.password_encoder');
        $encodedPassword = $encoder->encodePassword($userAdmin, $plainPassword);
        $userAdmin->setPassword($encodedPassword);
        $manager->persist($userAdmin);
        $manager->flush();

    }
}

