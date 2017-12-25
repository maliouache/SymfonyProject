<?php

namespace IPS\SymfonyProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IPS\SymfonyProjectBundle\Entity\Project;
use IPS\SymfonyProjectBundle\Entity\Section;
use IPS\SymfonyProjectBundle\Entity\Reference;
use IPS\SymfonyProjectBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
use IPS\SymfonyProjectBundle\Form\ReferenceType;

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
        $j=0;
        foreach ($sections as $section){
            $tasks=$em->getRepository('IPSSymfonyProjectBundle:Task')->findBy(array('SECTION'=>$section));
            $sections[$j]->tasks=$tasks;
            $j=$j+1;
        }
        return $this->get('templating')->renderResponse(
            'IPSSymfonyProjectBundle::project.html.twig',
            array('project'  => $project,
                  'sections' => $sections)
        ); 
    }

    public function addtaskAction($sect,$crea_msg=""){
        $msg="";
        if ($crea_msg=="OK"){
            $msg='A new task has been added successfully!';
        }
        return $this->get('templating')->renderResponse(
            'IPSSymfonyProjectBundle::new_task.html.twig',
            array('sect'  => $sect,
                  'msg' => $msg)
        ); 
    }

    public function savetaskAction(){
        $task=new Task();
        $em=$this->getDoctrine()->getManager();
        $section=$em->getRepository('IPSSymfonyProjectBundle:Section')->find($_POST['sect']);
        $task->init($_POST["name"],$_POST["importance"],$_POST["incharge"],$_POST["comment"],$section);
        $em->persist($task);
        $em->flush();
        $this->updatestatut($section);
        return $this->addtaskAction($section->getId(),"OK");
    }

    public function updatestatut(Section $section){
        $em=$this->getDoctrine()->getManager();
        $tasks=$em->getRepository('IPSSymfonyProjectBundle:Task')->findBy(array('SECTION'=>$section));
        $i=0;$cumul=0;
        foreach ($tasks as $task){
            $cumul=$cumul+$task->getSTATUT();
            $i=$i+1;
        }
        if ($i==0){
            $i=1;
        }
        $section->setSTATUT(floor($cumul/$i));
        $em->flush();
    }

    public function addreferenceAction($task_id,Request $request){
        $msg="";
        $reference=new Reference();
        $form_ref = $this->get('form.factory')->create(ReferenceType::class, $reference);
        if ($request->isMethod('POST') && $form_ref->handleRequest($request)->isValid()) {
            // Ajoutez cette ligne :
            // c'est elle qui déplace l'image là où on veut les stocker
            $reference->setTYPE("link");
            $em = $this->getDoctrine()->getManager();
            $task=$em->getRepository('IPSSymfonyProjectBundle:Task')->find($task_id);
            // $task=$em->getRepository('IPSSymfonyProjectBundle:Project')->find($task->getSECTION()->get);
            $reference->upload($task->getSECTION()->getPROJECT()->getNAME(),$task->getSECTION()->getNAME(),$task->getNAME());
            // print_r($reference);
            // Le reste de la méthode reste inchangé
            // print_r($task);
            $reference->setTASK($task);
            $em->persist($reference);
            $em->flush();
            $msg='The new reference has been added successfully!';
            // ...
        }
        return $this->get('templating')->renderResponse(
            'IPSSymfonyProjectBundle::new_reference.html.twig',
            array('form_ref'  => $form_ref->createView(),
                  'task_parent' => $task_id,
                  'msg' => $msg)
        ); 
    }

    public function showtaskAction($id){
        $em=$this->getDoctrine()->getManager();
        $task=$em->getRepository('IPSSymfonyProjectBundle:Task')->find($id);
        $references=$em->getRepository('IPSSymfonyProjectBundle:Reference')->findBy(array('TASK'=>$task));
        $add="";$end="";
        if ($task->getADDDATE()!=null){
            $add=$task->getADDDATE()->format("m-d-Y");
        }
        if ($task->getENDDATE()!=null) {
            $end=$task->getENDDATE()->format("m-d-Y");
        }
        return $this->get('templating')->renderResponse(
            'IPSSymfonyProjectBundle::task.html.twig',
            array('task'  => $task,
                  'references' => $references,
                  'section' => $task->getSECTION(),
                  'project' => $task->getSECTION()->getPROJECT(),
                  'ADDDATE'=>$add,
                  'ENDDATE'=>$end)
        ); 
    }

    public function showsectionAction($id){
        $em=$this->getDoctrine()->getManager();
        $section=$em->getRepository('IPSSymfonyProjectBundle:Section')->find($id);
        $tasks=$em->getRepository('IPSSymfonyProjectBundle:Task')->findBy(array('SECTION'=>$section));
        $add="";$end="";$i=0;
        foreach ($tasks as $task){
            if ($task->getADDDATE()!=null){
                $add=$task->getADDDATE()->format("m-d-Y");
            }
            if ($task->getENDDATE()!=null) {
                $end=$task->getENDDATE()->format("m-d-Y");
            }
            $tasks[$i]->end=$end;
            $tasks[$i]->add=$add;
            $i=$i+1;
        }
        $add="";$end="";
        if ($section->getADDDATE()!=null){
            $add=$section->getADDDATE()->format("m-d-Y");
        }
        if ($section->getENDDATE()!=null) {
            $end=$section->getENDDATE()->format("m-d-Y");
        }
        return $this->get('templating')->renderResponse(
            'IPSSymfonyProjectBundle::section.html.twig',
            array('tasks'  => $tasks,
                  'section' => $section,
                  'project' => $section->getPROJECT(),
                  'add' => $add,
                  'end' => $end)
        ); 
    }

    public function endtaskAction($id){
        $em=$this->getDoctrine()->getManager();
        $task=$em->getRepository('IPSSymfonyProjectBundle:Task')->find($id);
        $task->setSTATUT(100);
        $task->setENDDATE(new \DateTime());
        $em->flush();
        $this->updatestatut($task->getSECTION());
        return $this->showtaskAction($id);
    }
}
