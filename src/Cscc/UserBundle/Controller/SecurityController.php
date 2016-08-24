<?php
/**
 * Created by PhpStorm.
 * User: wangqi
 * Date: 2016/8/23
 * Time: 13:57
 */
namespace Cscc\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Cscc\UserBundle\Entity\User;
/**
 * @Route("/")
 */
class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('UiBundle:Security:login.html.twig',[
            'title'=>'Login',
            'username'=>$lastUsername,
            'error'=>$error,
        ]);

    }

    /**
     * @Route("/logout",name="logout")
     * @return Response
     */
    public function logoutAction()
    {
    }


}