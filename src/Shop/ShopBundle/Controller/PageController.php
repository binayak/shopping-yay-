<?php
// src/Shop/ShopBundle/Controller/PageController.php

namespace Shop\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
}
