<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Equipo;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Form\TeamFormType;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="adminPage")
     */
    public function adminAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/admin.html.twig');
        /*array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
        */
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
            $data = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($equipo);
            $em->flush();

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

        if (!$partidos) {
            throw $this->createNotFoundException('No se encontro ningun partido sin editores');
        }
        return
                $this->render('forms/asignarEditorForm.html.twig', array('partidos' => $partidos,
                                                                        'editores' => $editores));
    }

    /**
     * @Route("/admin/vincularEditor/{idPartido}/{idEditor}", name="vincularEditor")
     */
     public function vincularEditorAction($idPartido,$idEditor)
    {  }
}