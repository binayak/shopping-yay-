<?php
//src/Shop/ShopBundle/Controller/RegisterCustomerController.php

namespace Shop\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Shop\ShopBundle\Entity\RegisterCustomerEntity;
use Shop\ShopBundle\Form\RegisterCustomer;

class RegisterCustomerController extends Controller 
{

	public function registerAction()
	{

		$register = new RegisterCustomerEntity();
		$form = $this->createForm(new RegisterCustomer(), $register);
	
		$request = $this->getRequest();
		//echo $request;
		if ($request->getMethod()=='POST')
		{
			$form->bindRequest($request);

			if ($form->isValid())
			{
				return $this->redirect($this->generateUrl('ShopShopBundle_register'));
			}
		}
		return $this->render('ShopShopBundle:Authentication:registration.html.twig', array('form'=>$form->createView()));

	}

}
