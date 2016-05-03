<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Equipo;
use Symfony\Component\DependencyInjection\ContainerAware;

class LoadEquipos  extends ContainerAware implements FixtureInterface {
    //put your code here
    protected $container;
    
    public function load(ObjectManager $manager){
        $equipo1 = new Equipo();
        $equipo1->setNombre("cubb");
        $equipo1->setOrigen("Bahia Blanca");
        $manager->persist($equipo1);
     
        $equipo2 = new Equipo();
         $equipo2->setNombre("UTA");
         $equipo2 ->setOrigen("Tres arroyos");
        $manager->persist($equipo2);
         
        $manager->flush();
    }
 
   
 }


