<?php
// src/OC/UserBundle/Controller/CustomSecurityController.php;

namespace ResearchLabUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ResearchLabUserBundle\Entity\User;
use ResearchLabUserBundle\Form\UserType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class CustomSecurityController extends Controller
{
  // public function loginAction(Request $request)
  // {
  //   // Si le visiteur est déjà identifié, on le redirige vers l'accueil
  //   if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
  //     return $this->redirectToRoute('/');
  //   }

  //   // Le service authentication_utils permet de récupérer le nom d'utilisateur
  //   // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
  //   // (mauvais mot de passe par exemple)
  //   $authenticationUtils = $this->get('security.authentication_utils');

  //   return $this->render('ResearchLabUserBundle::login.html.twig', array(
  //     'last_username' => $authenticationUtils->getLastUsername(),
  //     'error'         => $authenticationUtils->getLastAuthenticationError(),
  //   ));
  // }

  public function addUserAction(Request $request)
  {
    $msg="";
    $user=new User();
    $form_usr= $this->get('form.factory')->create(UserType::class, $user)->add('Register',SubmitType::class);
    if ($request->isMethod('POST') && $form_usr->handleRequest($request)->isValid()) {
      // Ajoutez cette ligne :
      // c'est elle qui déplace l'image là où on veut les stocker
      
      $em = $this->getDoctrine()->getManager();

      $em->persist($user);
      $em->flush();
      $msg='The new user has been added successfully!';
      // ...
  }
    return $this->render('ResearchLabUserBundle::addUserForm.html.twig',array(
      'form_usr' => $form_usr->createView(),
      'msg' => $msg
    ));
  }

  public function profileoptionsAction(){
    return $this->render('IPSSymfonyProjectBundle::profile.html.twig');
  }
}
