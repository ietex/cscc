<?php

namespace Cscc\DataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/data")
     */
    public function indexAction()
    {
        return $this->render('CsccDataBundle:Default:index.html.twig');
    }
}
