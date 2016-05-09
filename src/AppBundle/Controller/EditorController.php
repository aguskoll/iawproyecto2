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
     * @Route("/editor/cargarEstadisticasJugadores/{idPartido}", name="editarJugadores")
     */
    public function editarJugadoresAction($idPartido)
    { 
        $em=$this->getDoctrine()->getManager();
         $partido = $em->getRepository('AppBundle:Partido')
                ->find($idPartido);
         $equipo1= $partido->getEquipo1();
         $equipo2= $partido->getEquipo2();
         
         $jugadoresEquipo1=$equipo1->getJugadores();
         $jugadoresEquipo2=$equipo2->getJugadores();
       
         
         return $this->render('vistasEditor/verJugadores.html.twig', 
                 array('jugadoresEquipo1' => $jugadoresEquipo1,'jugadoresEquipo2' => $jugadoresEquipo2,
                     'equipo1'=>$equipo1,'equipo2'=>$equipo2));
      
    }
    
    /**
     * @Route("/admin/asignarEstadisticas/{idJugador}", name="asignarEstadisticas")
     */
    public function asignarEstadisticasJugadores($idJugador){
         $em=$this->getDoctrine()->getManager();
         $jugador = $em->getRepository('AppBundle:Jugador')
                ->find($idJugador);
        
         $form=$this->createFormBuilder($jugador)
            ->add('puntos', 'integer')
            ->add('asistencias', 'integer')
            ->add('defensas', 'integer')
            ->add('guardar', 'submit')
            ->getForm();
      
       $form->handleRequest($request); 
       //TODO ACTUALIZAR LAS ESTADISTICAS SUMANDO LO ANTERIRO
        if ($form->isValid()&&$form->isSubmitted()) { 
            $this->addFlash('mensaje', 'La estadistica se guardo correctamente');
            $em->flush(); 
            return $this->redirectToRoute('cargarResultados'); 
        } 
        return $this->redirectToRoute('editarJugadores');
    }
    
     /**
      * cargarResultadosAction: muestra todos los partidos que el editor puede cargar resultados
     * @Route("/editor/cargarResultados", name="cargarResultados")
     */
    public function cargarResultadosAction(Request $request)
    {   
       
         if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
        {
             throw $this->createAccessDeniedException();
        }
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $userName=$user->getUsername();
        $userId = $user->getId();
      
       // echo '<html><body>usuario nombre:'.$userName.'</body></html>';
       // echo '<html><body>usuario id:'.$userId.'</body></html>';
        
        $partidos = $this->getDoctrine()
                ->getRepository('AppBundle:Partido')
                ->findByEditor($userId);
        
        return 
        $this->render('vistasEditor/verPartidos.html.twig', array('partidos' => $partidos));
    
    }
    
    /**
     * le asigna a un partido, el resultado 
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