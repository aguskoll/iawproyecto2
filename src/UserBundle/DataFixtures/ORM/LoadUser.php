<?php
namespace UserBundle\DataFixtures\ORM;


use Doctrine\Common\Persistence\ObjectManager;
use UserBundle\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
//extends ContainerAware implements FixtureInterface
//AbstractFixture
class LoadUsers extends  ContainerAware implements  FixtureInterface{

	protected $container;

	public function load(ObjectManager $manager){
		$admin = new User();
		$admin->setUsername('bruce');
		$admin->setPassword($this->encodePassword($admin, 'batman'));
		$admin->setEmail('batman@gotham.com');
		$admin->setRoles(array('ROLE_ADMIN'));
		$manager->persist($admin);

	    $editor = new User();
	    $editor->setUsername('wayne');
	    $editor->setPassword($this->encodePassword($editor, 'chimichanga'));
	    $editor->setRoles(array('ROLE_EDITOR'));
	    $editor->setEsEditor(1);
	    $editor->setEmail('wayne@pool.com');
        $manager->persist($editor);

	    $editor = new User();
	    $editor->setUsername('francis');
	    $editor->setPassword($this->encodePassword($editor, 'ajax'));
	    $editor->setRoles(array('ROLE_EDITOR'));
	    $editor->setEsEditor(1);
	    $editor->setEmail('where@ami.com');
        $manager->persist($editor);
        $manager->flush();

	}

    private function encodePassword(User $user, $plainPassword){
	    $encoder = $this->container->get('security.encoder_factory')
	        ->getEncoder($user)
	    ;
	    return $encoder->encodePassword($plainPassword, $user->getSalt());
	}
    
    public function getOrder()
    {
        // es el orden en que se cargan los fixtures, menor numero significa que carga primero
        //se carga tercera
        return 3;
    }
}