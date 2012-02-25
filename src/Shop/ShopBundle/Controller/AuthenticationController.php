<?php
// src/Shop/ShopBundle/Controller/AuthenticationController.php

namespace Shop\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Shop\ShopBundle\Form\SignIn;
use Shop\ShopBundle\Entity\SignInEntity;
use Shop\ShopBundle\Form\ForgotPassword;
use Shop\ShopBundle\Entity\ForgotPasswordEntity;

class AuthenticationController extends Controller
{
  
	//Action for login

	public function loginAction()
    {
		//return $this->render('ShopShopBundle:Authentication:login.html.twig');
		$signin = new SignInEntity();
		$form = $this->createForm(new SignIn(), $signin);

		$request = $this->getRequest();
		//echo $request;
		if($request->getMethod()=='POST')
		{
			$form->bindRequest($request);
			
			if ($form->isValid())
			{
				//perform any action as desired. Eg. send email.
				//Redirection action
				//Refresh action
				return $this->redirect($this->generateUrl('ShopShopBundle_auth'));
			}

		}

		return $this->render('ShopShopBundle:Authentication:login.html.twig', array('form' => $form->createView() ));

    }




	//Registration Action
    public function registerAction()
    {
        return $this->render('ShopShopBundle:Authentication:registration.html.twig');
    }

}

