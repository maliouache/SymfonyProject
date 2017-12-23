<?php

namespace IPS\SymfonyProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IPS\SymfonyProjectBundle\Controller\Entity\Project;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IPSSymfonyProjectBundle:Default:index.html.twig');
    }

    public function homeAction(){
        return $this->render('IPSSymfonyProjectBundle::home.html.twig');
    }

    public function newprojectAction(){
        return $this->render('IPSSymfonyProjectBundle::new_project.html.twig');
    }

    public function saveprojectAction(){
        include_once "Entity/start.php";
        include_once "Entity/class.Project.php";
        $project=new Project($BD);
        $project->init($_POST["name"],$_POST["importance"],$_POST["deadline"],$_POST["domain"],$_POST["comment"]);
        $project->save($BD);
        return $this->render('IPSSymfonyProjectBundle:Default:index.html.twig');
    }
}
