<?php

namespace UserBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends EntityRepository implements UserProviderInterface{
	//Busca un usuario por username o email para la autenticacion
	public function findOneByUsernameOrEmail($username){
            return $this->createQueryBuilder('u')
        ->andWhere('u.username = :username OR u.email = :email')
        ->setParameter('username', $username)
        ->setParameter('email', $username)
        ->getQuery()
        ->getOneOrNullResult()
    ;
    }

    //Metodo que llama el framework para buscar un usuario
    public function loadUserByUsername($username){
        $user = $this->findOneByUsernameOrEmail($username);

        if (!$user) {
            throw new UsernameNotFoundException('No user found for username '.$username);
        }

        return $user;
    }

    //Metodos para implementar la interfaz
    public function refreshUser(UserInterface $user)
    {
        $class = get_class($user);
        if (!$this->supportsClass($class)) {
            throw new UnsupportedUserException(sprintf(
                'Instances of "%s" are not supported.',
                $class
            ));
        }

        if (!$refreshedUser = $this->find($user->getId())) {
            throw new UsernameNotFoundException(sprintf('User with id %s not found', json_encode($user->getId())));
        }

        return $refreshedUser;
    }

    public function supportsClass($class)
    {
        return $this->getEntityName() === $class
            || is_subclass_of($class, $this->getEntityName());
    }
}
