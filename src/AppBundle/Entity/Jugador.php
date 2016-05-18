<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
 /**
 * @ORM\Entity
 * @ORM\Table(name="jugador")
 */

class Jugador {
   
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
   private $id;
    
   /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Debe tener un nombre")
     */
   private  $nombre;
   
   /**
     * @ORM\Column(type="integer")
     * 
     */
   private $puntos=0;
       /**
     * @ORM\Column(type="integer")
     * 
     */
   private $asistencias=0;
  
   /**
     * @ORM\ManyToOne(targetEntity="Equipo",inversedBy="jugadores" )
     * @ORM\JoinColumn(name="jugadores_equipo", referencedColumnName="id")
     * @Assert\NotBlank(message="Debe tener un Equipo")
     */
   private $equipo;
    
   
   /**
     * @ORM\Column(type="integer")
     * 
     */
   private $defensas=0;
   
   function getId() {
       return $this->id;
   }

   function getNombre() {
       return $this->nombre;
   }

   function getPuntos() {
       return $this->puntos;
   }

   function getAsistencias() {
       return $this->asistencias;
   }

   function getEquipo() {
       return $this->equipo;
   }

   function getDefensas() {
       return $this->defensas;
   }

   function setId($id) {
       $this->id = $id;
   }

   function setNombre($nombre) {
       $this->nombre = $nombre;
   }

   function setPuntos($puntos) {
       $this->puntos = $puntos;
   }

   function setAsistencias($asistencias) {
       $this->asistencias = $asistencias;
   }

   function setEquipo($equipo) {
       $this->equipo = $equipo;
   }

   function setDefensas($defensas) {
       $this->defensas = $defensas;
   }

   
   
   function __construct() {
        
    }
}
