<?php

namespace Cscc\UiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/",name="main")
     */
    public function indexAction()
    {
        return $this->render('UiBundle:Default:index.html.twig',['title'=>'cscc']);
    }
}
