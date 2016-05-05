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

        if (!$equipos) {
            throw $this->createNotFoundException('No se encontro ningun equipo ');
        }
//debug:
 //   echo '<html><body>cant equipos'.count($equipos).'</body></html>';
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

        if (!$partidos) {
            throw $this->createNotFoundException(
                    'No hay partidos '
            );
        }

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

        if (!$partidos) {
            throw $this->createNotFoundException(
                    'No hay partidos '
            );
        }

        //debug:
      //   echo '<html><body>cant partidos'.count($partidos).'</body></html>';

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
                ->findAll();

        if (!$jugadores) {
            throw $this->createNotFoundException(
                    'No hay partidos '
            );
        }
//debug:
      //   echo '<html><body>cant jug'.count($jugadores).'</body></html>';
        return
                $this->render('defaultUser/jugadores.html.twig', array('jugadores' => $jugadores));
    }
}
