<?php

namespace Panelafrica\Bundle\TombolaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TombolaBundle:Default:index.html.twig', array('name' => $name));
    }
}
