<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller{
    /**
     * @Route("/login", name="loginForm")
     */
    public function loginAction(Request $request){
        $session = $request->getSession();

        // get the login error if there is one
        $error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
        $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);

        return $this->render(
            'login/login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $session->get(SecurityContextInterface::LAST_USERNAME),
                'error'         => $error,
            )
        );
    }

    /**
    * @Route("/login_check", name="loginCheck")
    */
    public function loginCheckAction(){
        //No ejecuta
    }

    /**
	 * @Route("/logout", name="logout")
 	*/
	public function logoutAction(){
		//No ejecuta
	}
}