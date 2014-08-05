<?php

namespace Panelafrica\PanelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PanelController extends Controller
{
    public function indexAction()
    {
        return $this->render('PanelBundle:Panel:index.html.twig');
    }


    public function accueilAction()
    {
        return $this->render('PanelBundle:Panel:accueil.html.twig');
    }


    public function cookieAction()
    {
        return $this->render('PanelBundle:Panel:cookie.html.twig');
    }


    public function mentionlegaleAction()
    {
        return $this->render('PanelBundle:Panel:mentionlegale.html.twig');
    }

    public function conditiondutlisationAction()
    {
        return $this->render('PanelBundle:Panel:conditiondutlisation.html.twig');
    }

}