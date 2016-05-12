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
  
    /**
     * @ORM\Column(type="integer")
     */
   private $partidosJugados=0;
   
   /**
     * @ORM\Column(type="integer")
     */
   private $partidosGanados=0;
   
   /**
     * @ORM\Column(type="integer")
     */
   private $goles=0;
    /**
     * @ORM\Column(type="string", length=100)
     */
   private $origen;//de donde es
   
    /**
     * @ORM\OneToMany(targetEntity="Jugador", mappedBy="equipo")
     */
    protected $jugadores;
   
    
  function getPartidosJugados() {
      return $this->partidosJugados;
  }

  function getPartidosGanados() {
      return $this->partidosGanados;
  }

  function getGoles() {
      return $this->goles;
  }

  function setPartidosJugados($partidosJugados) {
      $this->partidosJugados = $partidosJugados;
  }

  function setPartidosGanados($partidosGanados) {
      $this->partidosGanados = $partidosGanados;
  }

  function setGoles($goles) {
      $this->goles = $goles;
  }
 
   function getPartidos() {
        return $this->partidos;
    }

    function setPartidos($partidos) {
        $this->partidos = $partidos;
    }

    
   
    /**
     * @ORM\Column(type="string", nullable=true)
     * @Assert\File(
     * mimeTypes={ "image/jpeg", "image/png", "image/gif" },
     * maxSize = "1024k")
     * @Assert\Image(
     *     minWidth = 300,
     *     maxWidth = 300,
     *     minHeight = 300,
     *     maxHeight = 300
     * )
     */
    private $logo;

    public function getLogo()
    {
        return $this->logo;
    }

    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

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
