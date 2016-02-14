<?php

namespace FlordiaCampus\InfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FlordiaCampusInfoBundle:Default:index.html.twig');
    }
    
    public function infoAction()
    {
        return $this->render('FlordiaCampusInfoBundle:Default:info.html.twig');
    }
}
