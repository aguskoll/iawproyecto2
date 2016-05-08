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
        $partido->setEquipo1($this->getReference('equipo1'));
        $partido->setEquipo2($this->getReference('equipo2'));
        
        $partido->setEditor($this->getReference('editor1'));
        
        $partido->setPuntosEquipo1(15);
        $partido->setPuntosEquipo2(10);
        $partido->setTermino(true);
        $manager->persist($partido);
        
        $partido2 = new Partido();
        $partido2->setEquipo1($this->getReference('equipo1'));
        $partido2->setEquipo2($this->getReference('equipo3'));
        $partido2->setPuntosEquipo1(5);
        $partido2->setPuntosEquipo2(13);
        $partido2->setTermino(true);
        $partido2->setEditor($this->getReference('editor1'));
        $manager->persist($partido2);
        
        
        $partido3 = new Partido();
        $partido3->setEquipo1($this->getReference('equipo1'));
        $partido3->setEquipo2($this->getReference('equipo4'));
        $partido3->setPuntosEquipo1(5);
        $partido3->setPuntosEquipo2(13);
        $partido3->setTermino(true);
          $partido3->setEditor($this->getReference('editor1'));
        $manager->persist($partido3);
        
        $partido4 = new Partido();
        $partido4->setEquipo1($this->getReference('equipo2'));
        $partido4->setEquipo2($this->getReference('equipo1'));
        $partido4->setPuntosEquipo1(5);
        $partido4->setPuntosEquipo2(13);
        $partido4->setTermino(true);
        $partido4->setEditor($this->getReference('editor2'));
        $manager->persist($partido4);
        
        $partido5 = new Partido();
        $partido5->setEquipo1($this->getReference('equipo2'));
        $partido5->setEquipo2($this->getReference('equipo4'));
        $partido5->setPuntosEquipo1(5);
        $partido5->setPuntosEquipo2(13);
        $partido5->setTermino(true);
        $manager->persist($partido5);
        
        $manager->flush();
         
    }
    public function getOrder()
    {
        // es el orden en que se cargan los fixtures, menor numero significa que carga primero
        //se carga segunda
        return 4;
    }
   
 }

