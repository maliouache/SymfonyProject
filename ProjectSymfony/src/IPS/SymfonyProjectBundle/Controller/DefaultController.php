<?php

namespace IPS\SymfonyProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IPS\SymfonyProjectBundle\Entity\Project;

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
        $project=new Project();
        $project->init($_POST["name"],$_POST["importance"],$_POST["deadline"],$_POST["domain"],$_POST["comment"]);
        $em=$this->getDoctrine()->getManager();
        $em->persist($project);
        $em->flush();
        return $this->showprojectsAction();
    }

    public function showprojectsAction(){
        $rep_proj=$this->getDoctrine()->getManager()->getRepository('IPSSymfonyProjectBundle:Project');
        $projects=$rep_proj->findAll();
        return $this->get('templating')->renderResponse(
            'IPSSymfonyProjectBundle::projects.html.twig',
            array('projects'  => $projects)
        );  
    }
}
