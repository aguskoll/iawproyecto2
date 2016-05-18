<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

/**
 * Description of DefaultUserController
 *
 * @author tino
 */
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Doctrine\ORM\EntityRepository;

class DefaultUserController extends Controller {
    /**
     *  Accion que busca un equipo con id dada en la bd y lo retorna
     * @param $equipoId: id del equipo 
     */

    /**
     * @Route("/mostrarEquipos", name="mostrarEquipos")
     * 
     */
    public function mostrarEquiposAction() {
        $equipos = $this->getDoctrine()
                ->getRepository('AppBundle:Equipo')
                ->findAll();

       

        return
                $this->render('defaultUser/equipos.html.twig', array('equipos' => $equipos));
    }

    /**
      Retorna los partidos, si terminado=true retorna los terminados
     * Si terminado=false retorna los futuros
     */
    public function mostrarPartidosAction($terminado) {
        $partidos = $this->getDoctrine()
                ->getRepository('AppBundle:Partido')
                ->findByTerminado($terminado);

       
        

        // Se le debe pasar el objeto a un template
        return $this->render(
                        'defaultUser/partidos.html.twig', array('partidos' => $partidos)
        );
    }

    /**
      muestra partidos terminados y no terminados
     */

    /**
     * @Route("/mostrarPartidos", name="mostrarTodos")
     * 
     */
    public function mostrarTodosPartidosAction() {
        $partidos = $this->getDoctrine()
                ->getRepository('AppBundle:Partido')
                ->findAll();

  

        return
                $this->render('defaultUser/partidos.html.twig', array('partidos' => $partidos));
    }
   
    /**
     * Muestra todos los jugadores participantes del torneo 
     * @Route("/mostrarJugadores", name="mostrarJugadores")
     */
    public function mostrarJugadoresAction() {
        $jugadores= $this->getDoctrine()
                ->getRepository('AppBundle:Jugador')
                ->findBy(array(), array('puntos' => 'DESC'));

      
        
//debug:
      //   echo '<html><body>cant jug'.count($jugadores).'</body></html>';
        return $this->render('defaultUser/jugadores.html.twig', array('jugadores' => $jugadores));
    }
    
    /**
     * Muestrala tabla de posiciones del torneo 
     * @Route("/tablaPosiciones", name="tablaPosiciones")
     */
    public function tablaPosicionesAction() {
    
         $equipos = $this->getDoctrine()
                ->getRepository('AppBundle:Equipo')
                ->findBy(array(), array('partidosGanados' => 'DESC'));
          
        

         return $this->render('defaultUser/tablaPosiciones.html.twig', array('equipos' => $equipos));
    }
  
    /**
     * Muestrala tabla de jugadores correspondientes a un equipo
     * @Route("/jugadores/{idEquipo}", name="jugadoresPorEquipo")
     */
    public  function obtenerJugadoresPorEquipoAction($idEquipo){
       
        $jugadores= $this->getDoctrine()
                ->getRepository('AppBundle:Jugador')
                ->findByEquipo($idEquipo);

       

        return $this->render('defaultUser/jugadores.html.twig', array('jugadores' => $jugadores));
   }
   
   /**
     * Muestrala el readme de la pagina
     * @Route("/readme", name="readme")
     */
   public function readmeAction()
    {
        
        return $this->render('defaultUser/readme.html.twig');
        
    }
}
