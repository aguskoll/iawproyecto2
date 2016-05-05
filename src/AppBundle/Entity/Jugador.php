<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

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
     */
   private  $nombre;
   
   /**
     * @ORM\Column(type="integer")
     * 
     */
   private $puntos=0;
   
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

       /**
     * @ORM\Column(type="integer")
     * 
     */
   private $asistencias=0;
  
   /**
     * @ORM\OneToOne(targetEntity="Equipo")
     * @ORM\JoinColumn(name="equipo", referencedColumnName="id")
     */
   private $equipo;
    
   /**
     * @ORM\Column(type="integer")
     * 
     */
   private $defensas=0;
   
   function __construct() {
        
    }
}
