<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoadPartidos
 *
 * @author tino
 */
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Partido;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;


class LoadPartidos extends  AbstractFixture implements OrderedFixtureInterface{
    
    protected $container;
    
    public function load(ObjectManager $manager){
        $partido = new Partido();
      
        $equipo1=$this->getReference('equipo1');
        $partido->setEquipo1($this->getReference('equipo1'));
        $partido->setEquipo2($this->getReference('equipo2'));
        $partido->setPuntosEquipo1(15);
        $partido->setPuntosEquipo2(10);
        $partido->setTermino(true);
        $manager->persist($partido);
          $manager->flush();
         
    }
    public function getOrder()
    {
        // es el orden en que se cargan los fixtures, menor numero significa que carga primero
        //se carga segunda
        return 2;
    }
   
 }

