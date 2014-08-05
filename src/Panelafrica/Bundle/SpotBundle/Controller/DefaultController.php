<?php

namespace Panelafrica\Bundle\SpotBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SpotBundle:Default:index.html.twig', array('name' => $name));
    }
}
