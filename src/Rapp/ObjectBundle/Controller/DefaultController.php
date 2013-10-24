<?php

namespace Rapp\ObjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/{name}",
     *     name="learning_twig_home",
     *     defaults={
     *         "name" = "Rapp",
     *     }
     * )
     * @Template()
     */
    public function indexAction($name)
    {
        $tableau = array('john', 'miles', 'frank');

        return array(
            'name' => $name,
            'tableau' => $tableau,
        );
    }
}
