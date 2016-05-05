<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Equipo;

class EditorController extends Controller
{
    /**
     * @Route("/editor", name="editorPage")
     */
    public function adminAction(Request $request)
    {
       
        return $this->render('default/editor.html.twig');//
        // array(    'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'), ));
    }
    
     /**
     * @Route("/editor/cargarEstadisticasJugadores", name="editarJugadores")
     */
    public function editarJugadoresAction(Request $request)
    {
       
        return $this->render('default/editor.html.twig');//
      
    }
    
     /**
     * @Route("/editor/cargarResultados", name="editarPartidos")
     */
    public function editarPartidosAction(Request $request)
    {   
        $partidos = $this->getDoctrine()
                ->getRepository('AppBundle:Partido')
                ->findAll();
               // ->findByTerminado($terminado);
        //despues se tiene q filtarr por los q puede editar
        $form = $this->createFormBuilder($partidos)
            ->add('puntosEquipo1', 'integer')
            ->add('puntosEquipo2', 'integer')
            ->add('idPartido', 'integer')
            ->add('guardar', 'submit')
            ->getForm();
      //  echo '<html><body>cant partidos'.count($partidos).'</body></html>';
       
         $form->handleRequest($request);
        
            $data=$form->getData();
         if ($form->isValid()) {
              
             $data2=$form->getData('idPartido');
               echo '<html><body>data'.count($data2).'data: '.$data2[2].'</body></html>';
               echo '<html><body>todo bien</body></html>';
       //   echo '<html><body>data'todo bien'</body></html>';
         //  return $this->redirect($this->generateUrl('task_success'));
    }
        return 
        $this->render('vistasEditor/editarPartidos.html.twig', array('partidos' => $partidos, 'form' => $form->createView()));
    
    }
    
    
}