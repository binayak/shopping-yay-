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
				//Check if password and Confirm password are same
				if($register->getPassword() != $register->getConfirmPassword())
				{
					echo "Confirm password and password doesnt match!";
					return $this->render('ShopShopBundle:Authentication:registration.html.twig',
						array('form'=>$form->createView(),'error'=>'Your Passwords Dont Match!'));
				}

				//Create new user in the database.
				$em = $this->getDoctrine()->getEntityManager();
				$em->persist($register);
				$em->flush();

				//getting customer id
				$customerId = $register->getId();

				//Send registration verification email with url.
				$message = \Swift_Message::newInstance()
					->setSubject('Verification from shop.com')
					->setFrom('rosh.pundit@gmail.com')
					->setTo($register->getEmail())
					//->setTo($this->container->getParameter('shop_shop.emails.verify_email'))
					->setBody($this->renderView('ShopShopBundle:Authentication:verificationEmail.txt.twig',
						array('url'=>'http://shop.com'.($this->generateUrl('ShopShopBundle_thankyou')).'/'.$customerId)));
				$this->get('mailer')->send($message);


				return $this->redirect($this->generateUrl('ShopShopBundle_thankyou'));
			}
		}
		return $this->render('ShopShopBundle:Authentication:registration.html.twig', array('form'=>$form->createView()));

	}

}
