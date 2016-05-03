<?php

/*
 *Esta clase representa las estadisticas de un equipo
 *puntos, goles, partidos jugados. partidos ganados
 *
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="estadisticas")
 */
class Estadisticas {
     /**
     * @ORM\Column(type="string", length=100)
      * @ORM\Id
     */
   private $equipo; 
   
    /**
     * @ORM\Column(type="integer")
     */
   private $pj;
   
   /**
     * @ORM\Column(type="integer")
     */
   private $pg;
   
   /**
     * @ORM\Column(type="integer")
     */
   private $goles;
   function getEquipo() {
       return $this->equipo;
   }

   function getPj() {
       return $this->pj;
   }

   function getPg() {
       return $this->pg;
   }

   function getGoles() {
       return $this->goles;
   }

   function setEquipo($equipo) {
       $this->equipo = $equipo;
   }

   function setPj($pj) {
       $this->pj = $pj;
   }

   function setPg($pg) {
       $this->pg = $pg;
   }

   function setGoles($goles) {
       $this->goles = $goles;
   }
   
   function __construct() {
       
   }


}
