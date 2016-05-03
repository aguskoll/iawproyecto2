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
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Partido;
use Symfony\Component\DependencyInjection\ContainerAware;

class LoadPartidos  extends ContainerAware implements FixtureInterface {
    //put your code here
    protected $container;
    
    public function load(ObjectManager $manager){
        $partido = new Partido();
        $partido->setEquipo1("CUBB");
        $partido->setEquipo2("UTA");
        $partido->setEquipoGanador("cubb");
        $partido->setPuntosEquipo1(15);
        $partido->setPuntosEquipo2(10);
        $partido->setTermino(true);
        $manager->persist($partido);
         
    }
 
   
 }

