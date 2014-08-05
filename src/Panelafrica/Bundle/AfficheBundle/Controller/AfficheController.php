<?php

namespace Panelafrica\Bundle\AfficheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AfficheController extends Controller
{
    public function indexAction()
    {
        return $this->render('AfficheBundle:Default:index.html.twig');
    }
}
