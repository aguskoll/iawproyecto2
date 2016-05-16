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


use UserBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="partido")
 */
class Partido {
    
    

    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $comentario="";

 
    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $horario;

      /**
   * @ORM\ManyToMany(targetEntity="Equipo", inversedBy="partidos")
   * @ORM\JoinTable(name="partidos_equipos")
   **/
    private $equipos;
 
   
     /**
     * OneToOne(targetEntity="Equipo")
     * JoinColumn(name="equipo2", referencedColumnName="id")
     */
   // private $equipo2;

    /**
     * @ORM\Column(type="boolean")
     */
    private $termino;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="partidos")
     * @ORM\JoinColumn(name="editor_id", referencedColumnName="id")
     */
    private $editor;
   
    /**
     * @ORM\Column(type="integer")
     * 
     */
    private $puntosEquipo1=0;
    
    /**
     * @ORM\Column(type="integer")
     * 
     */
   
    private $puntosEquipo2=0;

    
    function getEditor() {
        return $this->editor;
    }

    function setEditor($editor) {
        $this->editor = $editor;
    }

     

    function getId() {
        return $this->id;
    }

    function getEquipo1() {
        return $this->equipos[0];
    }

    function getEquipo2() {
        return $this->equipos[1];
    }

    function getTermino() {
        return $this->termino;
    }
/*
    function getEquipoGanador() {
        
        if( $this->getPuntosEquipo1() > $this->getPuntosEquipo2())
        {   
            return  $this->$equipo1;
        }
        else {
            return  $this->$equipo2;
            
        }
       
    }
*/

    /**
     * Set horario
     *
     * @param \DateTime $horario
     * @return Partido
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;

        return $this;
    }

    /**
     * Get horario
     *
     * @return \DateTime 
     */
    public function getHorario()
    {
        return $this->horario;
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
        $this->equipos[0] = $equipo1;
    }

    function setEquipo2($equipo2) {
        $this->equipos[1] = $equipo2;
    }

    function setTermino($termino) {
        $this->termino = $termino;
    }


    function setPuntosEquipo1($puntosEquipo1) {
        $this->puntosEquipo1 = $puntosEquipo1;
    }

    function setPuntosEquipo2($puntosEquipo2) {
        $this->puntosEquipo2 = $puntosEquipo2;
    }



    /**
     * Set comentario
     *
     * @param string $comentario
     * @return Partido
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }
    
    function __construct() {
         $this->equipos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add equipos
     *
     * @param \AppBundle\Entity\Equipo $equipos
     * @return Partido
     */
    public function addEquipo(\AppBundle\Entity\Equipo $equipos)
    {
        $this->equipos[] = $equipos;

        return $this;
    }

    /**
     * Remove equipos
     *
     * @param \AppBundle\Entity\Equipo $equipos
     */
    public function removeEquipo(\AppBundle\Entity\Equipo $equipos)
    {
        $this->equipos->removeElement($equipos);
    }

    /**
     * Get equipos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEquipos()
    {
        return $this->equipos;
    }
}
