<?php
// src/Shop/ShopBundle/Controller/PageController.php

namespace Shop\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Shop\ShopBundle\Entity\RegisterCustomerEntity;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('ShopShopBundle:Page:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('ShopShopBundle:Page:about.html.twig');
	}

	public function thankyouAction($page)
	{
		if ($page == 0)
			return $this->render('ShopShopBundle:Page:thanks.html.twig');
		else 
		{
			$customer = new RegisterCustomerEntity();

			$em = $this->getDoctrine()->getEntityManager();
			$customer = $em->getRepository('ShopShopBundle:RegisterCustomerEntity')->find($page);
			$customer->setValidated(1);
			$em->flush();

			if (!$customer)
			{
				throw $this->createNotFoundException('No Customer Found with id = '.$page);
			}
			return $this->render('ShopShopBundle:Page:verify.html.twig',array ('customerName'=>($customer->getName())));

		}

	}

}
