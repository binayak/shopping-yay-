<?php
// src/Shop/ShopBundle/Controller/CategoryController.php

namespace Shop\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryController extends Controller
{
    public function categoryAction()
    {
        return $this->render('ShopShopBundle:Category:category.html.twig');
    }
}
