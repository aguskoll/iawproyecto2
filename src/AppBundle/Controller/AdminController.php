<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Equipo;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="adminPage")
     */
    public function adminAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/admin.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
    
    public function crearEquipo($nombre, $origen){
        
    $equipo= new Equipo();
    $equipo->setName($nombre);
    $equipo->setOrigen($origen);
    

    $em = $this->getDoctrine()->getManager();

    // tells Doctrine you want to (eventually) save the Product (no queries yet)
    $em->persist($equipo);

    // actually executes the queries (i.e. the INSERT query)
    $em->flush();

    return new Response('Se guardo un nuevo equipo con Id '.$equipo->getId());
    }
}