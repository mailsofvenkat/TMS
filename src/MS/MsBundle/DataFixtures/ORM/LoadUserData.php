<?php

namespace Ms\MsBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Ms\MsBundle\Entity\User;
 
class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
         $user = new User();
         $user->setUserType(1);
         $user->setNickName('Meera');
         $user->setFirstName('Archana');
         $user->setLastName('Sahoo');
         $user->setEmail('archana.s@etisbew.com');
         $user->setPassword('welcome');
         $user->setSalt('Test salt');
         $user->setStatus('Active');
         $user->setIdChatStatus(1);
         $user->setSex('Female');
         $user->setDescriptionMe('Description');
         $user->setCountry('India');
         $user->setCity('Hyd');
         $user->setDateOfBirth(new \DateTime('2005-12-01'));
		 $user->setDateReg(new \DateTime());
         $user->setDateLastLogin(new \DateTime());
         $user->setType('User');
         $user->setFacebookUrl('fb.com');
         $user->setTwitterUrl('tw.com');
         $user->setYoutubeUrl('you.com');
         $user->setMyspaceUrl('my.com');
         $user->setIdPaypal('id paypal');
         $user->setIdMedia(1);
         $user->setRecordLabel('record label');
		 $user->setIdMusicGenre(1);
         
 
         $em->persist($user);
         $em->flush();
    }
 
    public function getOrder()
    {
        return 3; // the order in which fixtures will be loaded
    }
}

?>