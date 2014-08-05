<?php

namespace Panelafrica\Bundle\PromoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PromoBundle:Default:index.html.twig', array('name' => $name));
    }
}
