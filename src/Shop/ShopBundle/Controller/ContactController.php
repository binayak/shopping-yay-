<?php
// src/Shop/ShopBundle/Controller/ContactController.php

namespace Shop\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function contactAction()
    {
        return $this->render('ShopShopBundle:Contact:contact.html.twig');
    }
}
