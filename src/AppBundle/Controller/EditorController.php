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
                     'equipo1'=>$equipo1,'equipo2'=>$equipo2,'partido'=>$partido));
      
    }
    
    /**
     * @Route("/editor/asignarEstadisticas/{idJugador}/{idPartido}", name="asignarEstadisticas")
     */
    public function asignarEstadisticasJugadoresAction($idJugador,$idPartido, Request $request){
         $em=$this->getDoctrine()->getManager();
         $jugador = $em->getRepository('AppBundle:Jugador')
                ->find($idJugador);
        
         if(!$jugador){
         
         throw $this->createNotFoundException('Error al editar jugador');
     }
      //   echo '<html><body>usuario nombre:'.$jugador->getNombre().'</body></html>';  
        
         
         $form=$this->createFormBuilder($jugador)
            ->add('puntos', 'integer')
            ->add('asistencias', 'integer')
            ->add('defensas', 'integer')
            ->add('guardar', 'submit')
            ->getForm();
      
       $form->handleRequest($request); 
       //TODO ACTUALIZAR LAS ESTADISTICAS SUMANDO LO ANTERIRO
        if ( $form->isValid()&& $form->isSubmitted()) { 
            $this->addFlash('mensaje', 'La estadistica se guardo correctamente');
         
            $puntos=$form->get('puntos')->getData();
            $defensas=$form->get('defensas')->getData();
            $asistencias=$form->get('asistencias')->getData();
            
            $jugador->setPuntos($jugador->getPuntos()+$puntos);
            $jugador->setAsistencias($jugador->getAsistencias()+$defensas);
            $jugador->setDefensas($jugador->getDefensas()+$asistencias);
            
           // $em->persist($jugador);
       
       
            $em->flush(); 
          //  $response = $this->redirectToRoute('editarJugadores', array('idPartido'  => $idPartido));
            return $this->redirectToRoute('cargarResultados'); 
         //return $response;
        } 
    
   return  $this->render('forms/estadisticasJugadorForm.html.twig', array('jugador' => $jugador, 'form' => $form->createView(),'idPartido'  => $idPartido));
      
    }
    //que diferencia hay entre un render y un redirectToRoute?
    
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
           
         $this-> setearEstadisticas($partido);
           
            
            $em->flush(); 
            return $this->redirectToRoute('cargarResultados'); 
        } 
     
   return  $this->render('vistasEditor/editarResultado.html.twig', array('partidos' => $partido, 'form' => $form->createView()));
    }
    
    /**
        funcion privada para setear las estadisticas de un partido
     *      */
     function setearEstadisticas($partido){
        
            $partido->setTermino(true);
            $pe1=$partido->getPuntosEquipo1();
            $pe2=$partido->getPuntosEquipo2();
           
            $equipo1= $partido->getEquipo1();
            $equipo2= $partido->getEquipo2();
           
            $equipo1->setGoles($equipo1->getGoles()+$pe1);
             $equipo2->setGoles($equipo2->getGoles()+$pe2);
           
            if($pe1>$pe2)
            {
                $equipo1->setPartidosGanados( $equipo1->getPartidosGanados()+1);
                
            }
            else {
                  $equipo2->setPartidosGanados( $equipo2->getPartidosGanados()+1);
                
            }
            
            $equipo1->setPartidosJugados($equipo1->getPartidosJugados()+1);
            $equipo2->setPartidosJugados($equipo2->getPartidosJugados()+1);
            
    }
}