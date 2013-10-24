<?php

namespace Rapp\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return new Response('<html><body>Hello World !</body></html>');
    }

    public function page1Action()
    {
        return $this->render('RappPageBundle:Default:page1.html.twig', array());
    }

    public function page2Action($name)
    {
        return $this->render('RappPageBundle:Default:page2.html.twig', array('name' => $name));
    }
}
