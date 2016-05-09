<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Equipo;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use AppBundle\Form\TeamFormType;
use Symfony\Component\HttpFoundation\File\UploadedFile;

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

    // private function crearFixture{
    //     // If odd number of teams add a "ghost".
    // $ghost = false;
    // if ($teams % 2 == 1) {
    //     $teams++;
    //     $ghost = true;
    // }
    
    // // Generate the fixtures using the cyclic algorithm.
    // $totalRounds = $teams - 1;
    // $matchesPerRound = $teams / 2;
    // $rounds = array();
    // for ($i = 0; $i < $totalRounds; $i++) {
    //     $rounds[$i] = array();
    // }
   
    // for ($round = 0; $round < $totalRounds; $round++) {
    //     for ($match = 0; $match < $matchesPerRound; $match++) {
    //         $home = ($round + $match) % ($teams - 1);
    //         $away = ($teams - 1 - $match + $round) % ($teams - 1);
    //         // Last team stays in the same place while the others
    //         // rotate around it.
    //         if ($match == 0) {
    //             $away = $teams - 1;
    //         }
    //         $rounds[$round][$match] = team_name($home + 1, $names) 
    //             . " v " . team_name($away + 1, $names);
    //     }
    // }

    // // Interleave so that home and away games are fairly evenly dispersed.
    // $interleaved = array();
    // for ($i = 0; $i < $totalRounds; $i++) {
    //     $interleaved[$i] = array();
    // }
    
    // $evn = 0;
    // $odd = ($teams / 2);
    // for ($i = 0; $i < sizeof($rounds); $i++) {
    //     if ($i % 2 == 0) {
    //         $interleaved[$i] = $rounds[$evn++];
    //     } else {
    //         $interleaved[$i] = $rounds[$odd++];
    //     }
    // }

    // $rounds = $interleaved;

    // // Last team can't be away for every game so flip them
    // // to home on odd rounds.
    // for ($round = 0; $round < sizeof($rounds); $round++) {
    //     if ($round % 2 == 1) {
    //         $rounds[$round][0] = flip($rounds[$round][0]);
    //     }
    // }
    // }
}