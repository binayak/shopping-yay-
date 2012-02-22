<?php
// src/Shop/ShopBundle/Controller/CheckoutController.php

namespace Shop\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CheckoutController extends Controller
{
    public function checkoutAction()
    {
        return $this->render('ShopShopBundle:Checkout:checkout.html.twig');
    }
}
