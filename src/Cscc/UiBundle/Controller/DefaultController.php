<?php

namespace Cscc\UiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/",name="main")
     */
    public function indexAction()
    {
        return $this->render('UiBundle:Default:index.html.twig',['title'=>'cscc']);
    }

    /**
     * @Route("/default",name="default")
     */
    public function defaultAction()
    {
        return new Response('Default page');
    }

    /**
     * @Route("/foo",name="foo")
     */
    public function fooAction()
    {
        return new Response('Foo page');
    }

    /**
     * @Route("/bar",name="bar")
     */
    public function barAction()
    {
        return new Response('Bar page');
    }


}
