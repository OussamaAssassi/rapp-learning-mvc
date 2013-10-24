<?php

namespace Rapp\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PartBController extends Controller
{
    public function page1Action()
    {
        return $this->render('RappPageBundle:PartB:page1.html.twig', array());
    }

    public function page2Action()
    {
        return $this->render('RappPageBundle:PartB:page2.html.twig', array());
    }

    public function page3Action()
    {
        return $this->render('RappPageBundle:PartB:page3.html.twig', array());
    }

    public function page4Action()
    {
        return $this->render('RappPageBundle:PartB:page4.html.twig', array());
    }
}
