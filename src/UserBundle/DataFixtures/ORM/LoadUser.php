<?php
namespace UserBundle\Entity\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use UserBundle\Entity\User;
use Symfony\Component\DependencyInjection\ContainerAware;

class LoadUsers extends ContainerAware implements FixtureInterface{

	protected $container;

	public function load(ObjectManager $manager){
		$admin = new User();
		$admin->setUsername('darth');
		$admin->setPassword($this->encodePassword($admin, 'darthpass'));
		$admin->setEmail('death@star.com');
		$admin->setRoles(array('ROLE_ADMIN'));
		$manager->persist($admin);

	    $editor = new User();
	    $editor->setUsername('wayne');
	    $editor->setPassword($this->encodePassword($editor, 'waynepass'));
	    $editor->setRoles(array('ROLE_EDITOR'));
	    $editor->setEmail('wayne@star.com');
	    $manager->persist($editor);

	    $manager->flush();

	}

    private function encodePassword(User $user, $plainPassword){
	    $encoder = $this->container->get('security.encoder_factory')
	        ->getEncoder($user)
	    ;
	    return $encoder->encodePassword($plainPassword, $user->getSalt());
	}
}