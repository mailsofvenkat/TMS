<?php
namespace MS\MsBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use MS\MsBundle\Entity\UserType;
 
class LoadUserTypeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $design = new UserType();
        $design->setName('Admin');
 
        $em->persist($design);
        $em->flush();
    }
 
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}

?>