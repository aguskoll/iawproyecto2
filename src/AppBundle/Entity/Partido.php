<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Partido
 *
 * @authors Larrieu-Koll
 */
namespace AppBundle\Entity;



use Doctrine\ORM\Mapping as ORM;
 /**
 * @ORM\Entity
 * @ORM\Table(name="partido")
 */

class Partido {
    
    function __construct() {
        
    }

    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $equipo1;

     /**
     * @ORM\Column(type="string")
     */
    private $equipo2;

    /**
     * @ORM\Column(type="boolean")
     */
    private $termino;
    
    /**
     * @ORM\Column(type="string")
     * 
     */
    private $equipoGanador;
   
    /**
     * @ORM\Column(type="integer")
     * 
     */
    private $puntosEquipo1;
    
    /**
     * @ORM\Column(type="integer")
     * 
     */
    private $puntosEquipo2;
    
    
    function getId() {
        return $this->id;
    }

    function getEquipo1() {
        return $this->equipo1;
    }

    function getEquipo2() {
        return $this->equipo2;
    }

    function getTermino() {
        return $this->termino;
    }

    function getEquipoGanador() {
        return $this->equipoGanador;
    }

    function getPuntosEquipo1() {
        return $this->puntosEquipo1;
    }

    function getPuntosEquipo2() {
        return $this->puntosEquipo2;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEquipo1($equipo1) {
        $this->equipo1 = $equipo1;
    }

    function setEquipo2($equipo2) {
        $this->equipo2 = $equipo2;
    }

    function setTermino($termino) {
        $this->termino = $termino;
    }

    function setEquipoGanador($equipoGanador) {
        $this->equipoGanador = $equipoGanador;
    }

    function setPuntosEquipo1($puntosEquipo1) {
        $this->puntosEquipo1 = $puntosEquipo1;
    }

    function setPuntosEquipo2($puntosEquipo2) {
        $this->puntosEquipo2 = $puntosEquipo2;
    }


}    

