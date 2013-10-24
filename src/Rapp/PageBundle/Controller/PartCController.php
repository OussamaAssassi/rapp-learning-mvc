<?php

namespace Rapp\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PartCController extends Controller
{
    public function page1Action()
    {
        return $this->render('RappPageBundle:PartC:page1.html.twig', array());
    }

}
