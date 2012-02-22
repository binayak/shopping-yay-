<?php
// src/Shop/ShopBundle/Controller/ProductAdminController.php

namespace Shop\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductAdminController extends Controller
{
    public function addProductAction()
    {
        return $this->render('ShopShopBundle:ProductAdmin:addProduct.html.twig');
    }

    public function editProductAction()
    {
        return $this->render('ShopShopBundle:ProductAdmin:editProduct.html.twig');
    }

}

