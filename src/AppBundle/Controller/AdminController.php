<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Equipo;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Form\TeamFormType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use AppBundle\Entity\Partido;

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
        $equipo = new Equipo();
        $form = $this->createForm(TeamFormType::class, $equipo);

        //Si es un post proceso los datos
        $form->handleRequest($request);
        if ($form->isValid()) {
            $logo = $equipo->getLogo();
            $data = $form->getData();
            // Generate a unique name for the file before saving it
            $logoName = md5(uniqid()).'.'.$logo->guessExtension();

            // Move the file to the directory where logos are stored
            $logoDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/logos';
            $logo->move($logoDir, $logoName);

            // Update the 'logo' property to store the PDF file name
            // instead of its contents
            $equipo->setLogo($logoName);
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
     * @Route("/admin/asignarEditor", name="asignarEditor")
     *
     */
    public function mostrarPartidosEditores() {
        $partidos = $this->getDoctrine()
                        ->getRepository('AppBundle:Partido')
                        ->findByEditor(NULL);

                $editores = $this->getDoctrine()
                ->getRepository('UserBundle:User')
                ->findByEsEditor(1);
        return
                $this->render('forms/asignarEditorForm.html.twig', array('partidos' => $partidos,
                                                                        'editores' => $editores));
    }

    /**
     * @Route("/admin/vincularEditor/{idPartido}/{idEditor}", name="vincularEditor")
     */
     public function vincularEditorAction($idPartido,$idEditor)
    {
         $em = $this->getDoctrine()->getManager();
        $partido = $em->getRepository('AppBundle:Partido')->find($idPartido);
        $editor = $em->getRepository('UserBundle:User')->find($idEditor);
        if (!$partido||!$editor) {
            throw $this->createNotFoundException(
                'No existe el partido o editor seleccionado' );
        }

        $partido->setEditor($editor);
        $em->flush();

        return $this->redirectToRoute('asignarEditor');
         }

     /**
      *@Route("/admin/crearFixture", name="crearFixture")
      */
     public function crearFixture(Request $request){
        $em=$this->getDoctrine()->getManager();
        $equipos = $em->getRepository('AppBundle:Equipo')
                ->findAll();
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