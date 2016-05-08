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
use AppBundle\Entity\Jugador;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;


class LoadJugadores extends  AbstractFixture implements OrderedFixtureInterface{
    
    protected $container;
    
    public function load(ObjectManager $manager){
        $jugador = new Jugador();
        $jugador->setEquipo($this->getReference('equipo1'));
        $jugador->setPuntos(5);
        $jugador->setDefensas(5);
        $jugador->setDefensas(3);
        $jugador->setNombre("Agus");
       
        
        $jugador2 = new Jugador();
        $jugador2->setEquipo($this->getReference('equipo2'));
        $jugador2->setPuntos(10);
        $jugador2->setDefensas(5);
        $jugador2->setDefensas(3);
        $jugador2->setNombre("Pepe");
        
        
        $manager->persist($jugador2);
        $manager->persist($jugador);
        $manager->flush();
         
    }
    public function getOrder()
    {
        // es el orden en que se cargan los fixtures, menor numero significa que carga primero
        //se carga tercera
        return 2;
    }
   
 }

