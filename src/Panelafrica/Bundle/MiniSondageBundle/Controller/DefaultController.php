<?php

namespace Panelafrica\Bundle\MiniSondageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MiniSondageBundle:Default:index.html.twig', array('name' => $name));
    }
}
