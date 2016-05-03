<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Equipo
 *
 * @author Koll-Larrieu
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="equipo")
 */
class Equipo {
   
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
   private $id; //para identificar al equipo en la bd
  
   /**
     * @ORM\Column(type="string", length=100)
     */
   private $nombre; 
   
    /**
     * @ORM\Column(type="string", length=100)
     */
   private $origen;//de donde es
   
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


}
