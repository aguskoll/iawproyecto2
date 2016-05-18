<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Equipo;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Form\TeamFormType;
use AppBundle\Form\MatchFormType;
use AppBundle\Form\PlayerFormType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use AppBundle\Entity\Partido;
use AppBundle\Entity\Jugador;
use UserBundle\Entity\User;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="adminPage")
     */
    public function adminAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $partidos = $em->getRepository('AppBundle:Partido')
                ->findAll();
        $tamaño=sizeof($partidos);
        // replace this example code with whatever you need
        return $this->render('default/admin.html.twig',array('fixture'=>$tamaño));
    }


    /**
     * @Route("/admin/teamForm", name="createTeam")
     */
    public function crearEquipo(Request $request){
        $em=$this->getDoctrine()->getManager();
        $partidos = $em->getRepository('AppBundle:Partido')
                ->findAll();
        $tamaño=sizeof($partidos);
        $equipo = new Equipo();
        $form = $this->createForm(TeamFormType::class, $equipo);

        //Si es un post proceso los datos
        $form->handleRequest($request);
        if ($form->isValid()) {
                   if($tamaño > 0){
            $request->getSession()
                    ->getFlashBag()
                    ->add('fallo', 'No es posible crear equipos en un torneo iniciado')
                ;
            return $this->redirectToRoute('adminPage');
        }
            $logo = $equipo->getLogo();
            if(! is_null($logo)){
                // Generate a unique name for the file before saving it
                $logoName = md5(uniqid()).'.'.$logo->guessExtension();

                // Move the file to the directory where logos are stored
                $logoDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/logos';
                $logo->move($logoDir, $logoName);

                // Update the 'logo' property to store the PDF file name
                // instead of its contents
                $equipo->setLogo($logoName);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($equipo);
            $em->flush();
            $request->getSession()
                    ->getFlashBag()
                    ->add('success', 'Equipo creado')
                ;
            return $this->redirectToRoute('adminPage');

        }

        return $this->render('forms/teamForm.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'form'=> $form->createView(),
        ));

    }

    /**
     * @Route("/admin/editarPartidos", name="editarPartidos")
     *
     */
    public function mostrarPartidosAction() {
        $partidos = $this->getDoctrine()
                        ->getRepository('AppBundle:Partido')
                        ->findAll();
        return
                $this->render('forms/editarPartidos.html.twig', array('partidos' => $partidos));
    }

    /**
     * @Route("/admin/editarEquipos", name="editarEquipos")
     *
     */
    public function mostrarEquiposAction() {
        $equipos = $this->getDoctrine()
                        ->getRepository('AppBundle:Equipo')
                        ->findAll();
        return
                $this->render('forms/editarEquipos.html.twig', array('equipos' => $equipos));
    }

    /**
     * @Route("/admin/editarEquipo/{idEquipo}", name="editarEquipo")
     *
     */
    public function editarEquipoAction(Request $request, $idEquipo) {
        $equipo = $this->getDoctrine()
                        ->getRepository('AppBundle:Equipo')
                        ->find($idEquipo);
        $equipos = $this->getDoctrine()
                         ->getRepository('AppBundle:Equipo')
                         ->findAll();

        $form = $this->createForm(TeamFormType::class, $equipo);
        //Si es un post proceso los datos
        $form->handleRequest($request);
        if ($form->isValid()) {
           $logo = $equipo->getLogo();
            if(! is_null($logo)){
                // Generate a unique name for the file before saving it
                $logoName = md5(uniqid()).'.'.$logo->guessExtension();

                // Move the file to the directory where logos are stored
                $logoDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/logos';
                $logo->move($logoDir, $logoName);

                // Update the 'logo' property to store the PDF file name
                // instead of its contents
                $equipo->setLogo($logoName);
            }
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $request->getSession()
                    ->getFlashBag()
                    ->add('success', 'Equipo editado')
                ;
            return $this->redirectToRoute('adminPage');

        }


        return $this->render('forms/editarEquipo.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'form'=> $form->createView(),'idEquipo' => $idEquipo, 'equipos' => $equipos,
        ));

    }

    /**
     * @Route("/admin/editarPartido/{idPartido}", name="editarPartido")
     *
     */
    public function editarPartidoAction(Request $request, $idPartido) {
        $partido = $this->getDoctrine()
                        ->getRepository('AppBundle:Partido')
                        ->find($idPartido);
        $partidos = $this->getDoctrine()
                         ->getRepository('AppBundle:Partido')
                         ->findAll();

        $form = $this->createForm(MatchFormType::class, $partido);
        //Si es un post proceso los datos
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $request->getSession()
                    ->getFlashBag()
                    ->add('success', 'Partido editado')
                ;
            return $this->redirectToRoute('editarPartidos');

        }

        return $this->render('forms/editarPartido.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'form'=> $form->createView(),'idPartido' => $idPartido, 'partidos' => $partidos,
        ));

    }

     /**
      *@Route("/admin/crearFixture", name="crearFixture")
      */
     public function crearFixture(Request $request){
        $em=$this->getDoctrine()->getManager();
        $equipos = $em->getRepository('AppBundle:Equipo')
                ->findAll();
        if($equipos == null){
            $request->getSession()
                    ->getFlashBag()
                    ->add('success', 'No hay equipos en el torneo');
            return $this->redirectToRoute('adminPage');
        }else{
            $partidos = $em->getRepository('AppBundle:Partido')
                ->findAll();
            if($partidos != null){
                $request->getSession()
                ->getFlashBag()
                ->add('success', 'El fixture ya esta creado');
                return $this->redirectToRoute('adminPage');
            }else{
        
                $tamaño=sizeof($equipos);
                $partido;
                for ($i = 0; $i < $tamaño - 1; $i++) {
                    for ($j = $i + 1; $j < $tamaño; $j++) {
                        $partido=new Partido();
                        $partido->setEquipo1($equipos[$i]);
                        $partido->setEquipo2($equipos[$j]);
                        $partido->setTermino(0);
                        $em->persist($partido);
                        $em->flush();
                     }
                }
                $request->getSession()
                            ->getFlashBag()
                            ->add('success', 'Fixture creado')
                        ;
                return $this->redirectToRoute('adminPage');
            }
        }
     }
     
     /**
      *@Route("/admin/agregarJugador", name="agregarJugador")
      */
     public function agregarJugador(Request $request){
        $jugador = new Jugador();
        $form = $this->createForm(PlayerFormType::class, $jugador);

        //Si es un post proceso los datos
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($jugador);
            $em->flush();
            $request->getSession()
                    ->getFlashBag()
                    ->add('success', 'Jugador creado')
                ;
            return $this->redirectToRoute('adminPage');

        }

        return $this->render('forms/agregarJugador.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
            'form'=> $form->createView(),
        ));

        }
        
         /**
     * @Route("/admin/home", name="homeAdmin")
     */
   /* public function homeAdminAction(Request $request)
    {
      
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
    */
}