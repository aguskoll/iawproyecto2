<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Description of Equipo
 *
 * @author Koll-Larrieu
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="equipo")
 * @UniqueEntity(fields="nombre", message="Ya existe un equipo con ese nombre")
 */
class Equipo {
   
     /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
   private $id; //para identificar al equipo en la bd
  
   /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Debe tener un nombre")
     */
   private $nombre; 
   
   /**
   * @ORM\ManyToMany(targetEntity="Partido", mappedBy="equipos")
   **/
     private $partidos;
     
   function getPartidos() {
        return $this->partidos;
    }

    function setPartidos($partidos) {
        $this->partidos = $partidos;
    }

    
    /**
     * @ORM\Column(type="string", length=100)
     */
   private $origen;//de donde es
   
    /**
     * @ORM\OneToMany(targetEntity="Jugador", mappedBy="equipo")
     */
    protected $jugadores;
   
    function getJugadores() {
        return $this->jugadores;
    }

    function setJugadores($jugadores) {
        $this->jugadores = $jugadores;
    }

       function getId() {
       return $this->id;
   }

   function getNombre() {
       return $this->nombre;
   }

   function getOrigen() {
       return $this->origen;
   }

   function setId($id) {
       $this->id = $id;
   }

   function setNombre($nombre) {
       $this->nombre = $nombre;
   }

   function setOrigen($origen) {
       $this->origen = $origen;
   }
/*
 * constructor publico
 * **/
   public function __construct()
    {
       $this->partidos = new \Doctrine\Common\Collections\ArrayCollection();
    
        $this->jugadores = new \Doctrine\Common\Collections\ArrayCollection();
    }
}
