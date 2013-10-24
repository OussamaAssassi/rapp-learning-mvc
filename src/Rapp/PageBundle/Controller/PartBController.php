<?php

namespace Rapp\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PartBController extends Controller
{
    public function page1Action()
    {
        return $this->render('RappPageBundle:PartB:page1.html.twig', array());
    }
}
