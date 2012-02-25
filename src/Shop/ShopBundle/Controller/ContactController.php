<?php
// src/Shop/ShopBundle/Controller/ContactController.php

namespace Shop\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Shop\ShopBundle\Entity\Enquiry;
use Shop\ShopBundle\Form\EnquiryType;
class ContactController extends Controller
{
   
    public function contactAction()
    {
	
	$enquiry = new Enquiry();
	$form = $this->createForm(new EnquiryType(), $enquiry);

   	$request = $this->getRequest();
    	if ($request->getMethod() == 'POST') {
        	$form->bindRequest($request);

			if ($form->isValid()) 
			{

            // Perform some action, such as sending an email
			$message = \Swift_Message::newInstance()
				->setSubject('Contact Enquiry from shop.com')
				->setFrom('rosh.pundit@gmail.com')
				->setTo($this->container->getParameter('shop_shop.emails.contact_email'))
				->setBody($this->renderView('ShopShopBundle:Contact:contactEmail.txt.twig', array('enquiry'=>$enquiry)));
			$this->get('mailer')->send($message);

			$this->get('session')->setFlash('shop-notice', 'Your Contact enquiry was successfully sent. Thank you!');

            // Redirect - This is important to prevent users re-posting
            // the form if they refresh the page
		
			return $this->redirect($this->generateUrl('ShopShopBundle_contact'));
        	}
    	}

    	return $this->render('ShopShopBundle:Contact:contact.html.twig', array('form' => $form->createView()));	
    }
}


