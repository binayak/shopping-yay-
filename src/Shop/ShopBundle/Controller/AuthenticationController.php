<?php
// src/Shop/ShopBundle/Controller/AuthenticationController.php

namespace Shop\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthenticationController extends Controller
{
    public function loginAction()
    {
        return $this->render('ShopShopBundle:Authentication:login.html.twig');
    }

    public function forgotPasswordAction()
    {
        return $this->render('ShopShopBundle:Authentication:forgotPassword.html.twig');
    }

    public function registerAction()
    {
        return $this->render('ShopShopBundle:Authentication:register.html.twig');
    }

}

