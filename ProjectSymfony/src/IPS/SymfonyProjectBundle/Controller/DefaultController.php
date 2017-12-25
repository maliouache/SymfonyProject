<?php

namespace IPS\SymfonyProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IPS\SymfonyProjectBundle\Entity\Project;
use IPS\SymfonyProjectBundle\Entity\Section;

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
        $em=$this->getDoctrine()->getManager();
        $projects=$em->getRepository('IPSSymfonyProjectBundle:Project')->findAll();
        $j=0;
        foreach ($projects as $project){
            $sections=$em->getRepository('IPSSymfonyProjectBundle:Section')->findBy(array('PROJECT'=>$project));
            $i=0;$cumul=0;
            foreach ($sections as $section){
                $cumul=$cumul+$section->getSTATUT();
                $i=$i+1;
            }
            if ($i==0){
                $i=1;
            }
            $projects[$j]->progress=$cumul/$i;
            $j=$j+1;
        }
        // print_r($projects[0]);
        return $this->get('templating')->renderResponse(
            'IPSSymfonyProjectBundle::projects.html.twig',
            array('projects'  => $projects)
        );  
    }

    public function editprojectsAction(){
        $rep_proj=$this->getDoctrine()->getManager()->getRepository('IPSSymfonyProjectBundle:Project');
        $projects=$rep_proj->findAll();
        return $this->get('templating')->renderResponse(
            'IPSSymfonyProjectBundle::edit_projects.html.twig',
            array('projects'  => $projects)
        );  
    }
    public function editprojectAction($id){
        $rep_proj=$this->getDoctrine()->getManager()->getRepository('IPSSymfonyProjectBundle:Project');
        $project=$rep_proj->find($id);
        $fm=$e=$g=$m=$p=$c=$vhigh=$high=$medium=$low=$vlow="";
        //pour la preselection de l'importance
        if ($project->getIMPORTANCE()=="very-high"){
            $vhigh="selected";
        }
        if ($project->getIMPORTANCE()=="high"){
            $high="selected";
        }
        if ($project->getIMPORTANCE()=="medium"){
            $medium="selected";
        }
        if ($project->getIMPORTANCE()=="very-low"){
            $vlow="selected";
        }
        if ($project->getIMPORTANCE()=="low"){
            $low="selected";
        }
        //pour la selection du domaine
        if ($project->getDOMAIN()=="fluid-mechanics"){
            $fm="selected";
        }
        if ($project->getDOMAIN()=="geology"){
            $g="selected";
        }
        if ($project->getDOMAIN()=="mathematics"){
            $m="selected";
        }
        if ($project->getDOMAIN()=="physics"){
            $p="selected";
        }
        if ($project->getDOMAIN()=="chemistry"){
            $c="selected";
        }
        if ($project->getDOMAIN()=="environment"){
            $e="selected";
        }
        return $this->get('templating')->renderResponse(
            'IPSSymfonyProjectBundle::edit_project.html.twig',
            array('project'  => $project,
                  'DEADLINE'=>$project->getDEADLINE()->format("m-d-Y"),
                  'fm'=>$fm,
                  'e'=>$e,
                  'm'=>$m,
                  'g'=>$g,
                  'p'=>$p,
                  'c'=>$c,
                  'high'=>$high,
                  'vhigh'=>$vhigh,
                  'medium'=>$medium,
                  'low'=>$low,
                  'vlow'=>$vlow,)
        ); 
    }

    public function updateprojectAction($id){
        $em=$this->getDoctrine()->getManager();
        $project=$em->getRepository('IPSSymfonyProjectBundle:Project')->find($id);
        $project->init($_POST["name"],$_POST["importance"],$_POST["deadline"],$_POST["domain"],$_POST["comment"]);
        $em->flush();
        return $this->editprojectsAction();
    }

    public function deleteprojectAction($id){
        $em=$this->getDoctrine()->getManager();
        $project=$em->getRepository('IPSSymfonyProjectBundle:Project')->find($id);
        $em->remove($project);
        $em->flush();
        return $this->editprojectsAction();
    }

    public function addsectionAction($proj,$crea_msg=""){
        $msg="";
        if ($crea_msg=="OK"){
            $msg='A new section has been added successfully!';
        }
        return $this->get('templating')->renderResponse(
            'IPSSymfonyProjectBundle::new_section.html.twig',
            array('proj'  => $proj,
                  'msg' => $msg)
        ); 
    }

    public function savesectionAction(){
        $section=new Section();
        $em=$this->getDoctrine()->getManager();
        $project=$em->getRepository('IPSSymfonyProjectBundle:Project')->find($_POST['proj']);
        $section->init($_POST["name"],$_POST["importance"],$_POST["comment"],$project);
        $em->persist($section);
        $em->flush();
        return $this->addsectionAction($project->getId(),"OK");
    }

    public function showprojectAction($id){
        $em=$this->getDoctrine()->getManager();
        $project=$em->getRepository('IPSSymfonyProjectBundle:Project')->find($id);
        $sections=$em->getRepository('IPSSymfonyProjectBundle:Section')->findBy(array('PROJECT'=>$project));
        return $this->get('templating')->renderResponse(
            'IPSSymfonyProjectBundle::project.html.twig',
            array('project'  => $project,
                  'sections' => $sections)
        ); 
    }
}
