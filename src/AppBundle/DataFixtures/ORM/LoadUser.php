<?php
namespace AppBundle\Entity\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;
use Symfony\Component\DependencyInjection\ContainerAware;

class LoadUsers extends ContainerAware implements FixtureInterface{

	protected $container;

	public function load(ObjectManager $manager){
		$user = new User();
		$user->setUsername('darth');
		$user->setPassword($this->encodePassword($user, 'darthpass'));
		$user->setEmail('death@star.com');
		$manager->persist($user);

		$manager->flush();
	}

    private function encodePassword(User $user, $plainPassword){
	    $encoder = $this->container->get('security.encoder_factory')
	        ->getEncoder($user)
	    ;
	    return $encoder->encodePassword($plainPassword, $user->getSalt());
	}
}