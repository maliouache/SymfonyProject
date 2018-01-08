<?php

namespace IPS\SymfonyProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use IPS\SymfonyProjectBundle\Entity\Project;
use IPS\SymfonyProjectBundle\Entity\Section;
use IPS\SymfonyProjectBundle\Entity\Reference;
use IPS\SymfonyProjectBundle\Entity\Work;
use IPS\SymfonyProjectBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
use IPS\SymfonyProjectBundle\Form\ReferenceType;
use IPS\SymfonyProjectBundle\Form\WorkType;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $user = $this->getUser();
        if (is_object($user) and $user instanceof UserInterface){
            return $this->homeAction();
        }
        return $this->render('IPSSymfonyProjectBundle:Default:index.html.twig');
    }

    public function checkLogin(){
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
    }

    public function homeAction(){
        $this->checkLogin();
        return $this->render('IPSSymfonyProjectBundle::home.html.twig');
    }

    public function newprojectAction(){
        $this->checkLogin();
        return $this->render('IPSSymfonyProjectBundle::new_project.html.twig');
    }

    public function saveprojectAction(){
        $this->checkLogin();
        $project=new Project();
        $project->init($_POST["name"],$_POST["importance"],$_POST["deadline"],$_POST["domain"],$_POST["comment"]);
        $em=$this->getDoctrine()->getManager();
        $em->persist($project);
        $em->flush();
        return $this->showprojectsAction();
    }

    public function showprojectsAction(){
        $this->checkLogin();
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
        $this->checkLogin();
        $rep_proj=$this->getDoctrine()->getManager()->getRepository('IPSSymfonyProjectBundle:Project');
        $projects=$rep_proj->findAll();
        return $this->get('templating')->renderResponse(
            'IPSSymfonyProjectBundle::edit_projects.html.twig',
            array('projects'  => $projects)
        );  
    }
    public function editprojectAction($id){
        $this->checkLogin();
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
        $this->checkLogin();
        $em=$this->getDoctrine()->getManager();
        $project=$em->getRepository('IPSSymfonyProjectBundle:Project')->find($id);
        $project->init($_POST["name"],$_POST["importance"],$_POST["deadline"],$_POST["domain"],$_POST["comment"]);
        $em->flush();
        return $this->editprojectsAction();
    }

    public function deleteprojectAction($id){
        $this->checkLogin();
        $em=$this->getDoctrine()->getManager();
        $project=$em->getRepository('IPSSymfonyProjectBundle:Project')->find($id);
        $em->remove($project);
        $em->flush();
        return $this->editprojectsAction();
    }

    public function addsectionAction($proj,$crea_msg=""){
        $this->checkLogin();
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
        $this->checkLogin();
        $section=new Section();
        $em=$this->getDoctrine()->getManager();
        $project=$em->getRepository('IPSSymfonyProjectBundle:Project')->find($_POST['proj']);
        $section->init($_POST["name"],$_POST["importance"],$_POST["comment"],$project);
        $em->persist($section);
        $em->flush();
        return $this->addsectionAction($project->getId(),"OK");
    }

    public function showprojectAction($id){
        $this->checkLogin();
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
        $this->checkLogin();
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
        $this->checkLogin();
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
        $this->checkLogin();
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
        $this->checkLogin();
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

    public function addworkAction($task_id,Request $request){
        $this->checkLogin();
        $msg="";
        $work=new Work();
        $form_ref = $this->get('form.factory')->create(WorkType::class, $work);
        if ($request->isMethod('POST') && $form_ref->handleRequest($request)->isValid()) {
            // Ajoutez cette ligne :
            // c'est elle qui déplace l'image là où on veut les stocker
            $work->setTYPE("html");
            $em = $this->getDoctrine()->getManager();
            $task=$em->getRepository('IPSSymfonyProjectBundle:Task')->find($task_id);
            // $task=$em->getRepository('IPSSymfonyProjectBundle:Project')->find($task->getSECTION()->get);
            $work->upload($task->getSECTION()->getPROJECT()->getNAME(),$task->getSECTION()->getNAME(),$task->getNAME());
            // print_r($reference);
            // Le reste de la méthode reste inchangé
            // print_r($task);
            $work->setTASK($task);
            $work->setSEEN(0);
            if ($work->getCONTENT()!=null){
                // $work->setCONTENT(htmlspecialchars($work->getCONTENT()));
            }
            
            $work->setADDDATE(new \DateTime());
            $em->persist($work);
            $em->flush();
            $msg='The new reference has been added successfully!';
            // ...
        }
        return $this->get('templating')->renderResponse(
            'IPSSymfonyProjectBundle::new_work.html.twig',
            array('form_ref'  => $form_ref->createView(),
                  'task_parent' => $task_id,
                  'msg' => $msg)
        ); 
    }

    public function showtaskAction($id){
        $this->checkLogin();
        $em=$this->getDoctrine()->getManager();
        $task=$em->getRepository('IPSSymfonyProjectBundle:Task')->find($id);
        $references=$em->getRepository('IPSSymfonyProjectBundle:Reference')->findBy(array('TASK'=>$task));
        $works=$em->getRepository('IPSSymfonyProjectBundle:Work')->findBy(array('TASK'=>$task));

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
                  'works' => $works,
                  'section' => $task->getSECTION(),
                  'project' => $task->getSECTION()->getPROJECT(),
                  'ADDDATE'=>$add,
                  'ENDDATE'=>$end)
        ); 
    }

    public function showsectionAction($id){
        $this->checkLogin();
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
        $this->checkLogin();
        $em=$this->getDoctrine()->getManager();
        $task=$em->getRepository('IPSSymfonyProjectBundle:Task')->find($id);
        $task->setSTATUT(100);
        $task->setENDDATE(new \DateTime());
        $em->flush();
        $this->updatestatut($task->getSECTION());
        return $this->showtaskAction($id);
    }

    public function showworkAction($id){
        $this->checkLogin();
        $em=$this->getDoctrine()->getManager();
        $work=$em->getRepository('IPSSymfonyProjectBundle:Work')->find($id);
        // $work->setCONTENT(htmlspecialchars($work->getCONTENT()));
        return $this->get('templating')->renderResponse(
            'IPSSymfonyProjectBundle::work.html.twig',
            array('work'  => $work)
        ); 
    }

    public function mytasksAction(){
        $this->checkLogin();
        $user=$this->getUser();
        $em = $this->getDoctrine()->getManager();
        $mytasks=$em->getRepository('IPSSymfonyProjectBundle:Task')->findBy(array('iNCHARGE'=>$user->getUsername()));
        return $this->render('IPSSymfonyProjectBundle::my_tasks.html.twig',array(
            'mytasks'=>$mytasks
        ));
    }

    public function staffAction(){
        $this->checkLogin();
        $user=$this->getUser();
        $em = $this->getDoctrine()->getManager();
        $staff=$em->getRepository('ResearchLabUserBundle:User')->findAll();
        return $this->render('IPSSymfonyProjectBundle::staff.html.twig',array(
            'staff'=>$staff
        ));
    }

    public function deletestaffAction($username) {
        $userManager = $this->get('fos_user.user_manager');
        /* @var $userManager UserManager */
      
        $user = $userManager->findUserByUsername($username);
        if(\is_null($user)) {
          // user not found, generate $notFoundResponse
          return $notFoundResponse;
        }
      
        \assert(!\is_null($user));
        $userManager->deleteUser($user);
      
        // okay, generate $okayResponse
        return $this->staffAction();
      }
}
