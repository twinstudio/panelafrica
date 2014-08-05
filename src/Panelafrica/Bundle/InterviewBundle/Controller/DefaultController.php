<?php

namespace Panelafrica\Bundle\InterviewBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('InterviewBundle:Default:index.html.twig', array('name' => $name));
    }
}
