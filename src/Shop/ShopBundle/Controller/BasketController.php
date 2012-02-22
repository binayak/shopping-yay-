<?php
// src/Shop/ShopBundle/Controller/CategoryController.php

namespace Shop\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BasketController extends Controller
{
    public function basketAction()
    {
        return $this->render('ShopShopBundle:Basket:basket.html.twig');
    }
}

