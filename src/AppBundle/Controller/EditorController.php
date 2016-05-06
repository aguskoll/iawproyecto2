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
     * @Route("/editor/cargarResultados", name="cargarResultados")
     */
    public function cargarResultadosAction(Request $request)
    {   
        $partidos = $this->getDoctrine()
                ->getRepository('AppBundle:Partido')
                ->findAll();
   
        return 
        $this->render('vistasEditor/verPartidos.html.twig', array('partidos' => $partidos));
    
    }
    
    /**
     * @Route("/editor/updateResultados/{idPartido}", name="updateResultados")
     */
     public function updateResultadosAction($idPartido, Request $request)
    {  
     $em=$this->getDoctrine()->getManager();
     $partido = $em->getRepository('AppBundle:Partido')
                ->find($idPartido);
     if(!$partido){
         
         throw $this->createNotFoundException('partido no encontrado');
     }
     $form=$this->createFormBuilder($partido)
            ->add('puntosEquipo1', 'integer')
            ->add('puntosEquipo2', 'integer')
            ->add('guardar', 'submit')
            ->getForm();
      
       $form->handleRequest($request); 
 
        if ($form->isValid()&&$form->isSubmitted()) { 
            $this->addFlash('mensaje', 'El resultado se guardo correctamente');
            $em->flush(); 
            return $this->redirectToRoute('cargarResultados'); 
        } 
     
   return  $this->render('vistasEditor/editarResultado.html.twig', array('partidos' => $partido, 'form' => $form->createView()));
    }
    
    
}