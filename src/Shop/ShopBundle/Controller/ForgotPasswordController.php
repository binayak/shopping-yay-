<?php
//src/Shop/ShopBundle/Controller/ForgotPasswordController.php

namespace Shop\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Shop\ShopBundle\Form\ForgotPassword;
use Shop\ShopBundle\Entity\ForgotPasswordEntity;

Class ForgotPasswordController extends Controller
{
	public function forgotAction()
	{
		$forgot = new ForgotPasswordEntity;
		$forgotForm = $this->createForm(new ForgotPassword(), $forgot);

		$request = $this->getRequest();
		if ($request->getMethod()=='POST')
		{
			$forgotForm->bindRequest($request);

			if ($forgotForm->isValid())
			{
				//Perfom actions
				//Define what you want to do if it is submitted
				//Define what you want to do if the form is refreshed.

				return $this->redirect($this->generateUrl('ShopShopBundle_forgot'));
			}
		}

		return $this->render('ShopShopBundle:Authentication:forgotPassword.html.twig',array('form' => $forgotForm->createView()));
	}
}


