<?php

namespace Panelafrica\Bundle\eventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EventBundle:Default:index.html.twig', array('name' => $name));
    }
}
