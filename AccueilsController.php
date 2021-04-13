<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;


class AccueilsController extends AbstractController {
        public function formToConnect(){
            $form = $this->createFormBuilder()
                    ->add('login', TextType::class)
                    ->add('motDePasse', PasswordType::class)
                    ->add('Valider', SubmitType::class)
                    ->add('annuler', ResetType::class)
                    ->getForm();
            
            $request = Request::createFromGlobals();
            $form->handleRequest($request);
            
            if ($form->isSubmitted() && $form->isValid()) {
                    $data = $form->getData();
                    
                    return $this->render('accueils/form_to_connect_submit.html.twig',
                                array('data'=>$data));
                    
            }
            
            return $this->render('accueils/form_to_connect.html.twig',
                        ['form'=>$form->createView()]);
            
            }
            
}