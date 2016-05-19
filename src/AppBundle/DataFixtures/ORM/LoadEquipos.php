<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\DataFixtures\ORM;


use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Equipo;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadEquipos extends AbstractFixture implements OrderedFixtureInterface{
    //put your code here
    protected $container;
    
    public function load(ObjectManager $manager){
        $equipo1 = new Equipo();
        $equipo1->setNombre("cubb");
        $equipo1->setOrigen("Bahia Blanca");
        $this->addReference('equipo1', $equipo1);
        $manager->persist($equipo1);
     
         $equipo2 = new Equipo();
         $equipo2->setNombre("UTA");
         $equipo2 ->setOrigen("Tres arroyos");
         $this->addReference('equipo2', $equipo2);
         $manager->persist($equipo2);
        
         $equipo3 = new Equipo();
         $equipo3->setNombre("ULP");
         $equipo3 ->setOrigen("La plata");
         $this->addReference('equipo3', $equipo3);
         $manager->persist($equipo3);
       
         $equipo4 = new Equipo();
         $equipo4->setNombre("UTT");
         $equipo4 ->setOrigen("Mendoza");
         $this->addReference('equipo4', $equipo4);
         $manager->persist($equipo4);
         
        $equipo5 = new Equipo();
         $equipo5->setNombre("ULM");
         $equipo5 ->setOrigen("La plata");
         $this->addReference('equipo5', $equipo5);
         $manager->persist($equipo5);
       
         $equipo6 = new Equipo();
         $equipo6->setNombre("UTS");
         $equipo6 ->setOrigen("Mendoza");
         $this->addReference('equipo6', $equipo6);
         $manager->persist($equipo6);

        $manager->flush();
    }
   public function getOrder()
    {
        // es el orden en que se cargan los fixtures, menor numero significa que carga primero
       //se carga primera
       return 1;
    }
   
 }


