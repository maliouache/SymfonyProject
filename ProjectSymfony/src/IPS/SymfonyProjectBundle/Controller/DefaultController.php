<?php

namespace IPS\SymfonyProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IPSSymfonyProjectBundle:Default:index.html.twig');
    }
}
