<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // ShopShopBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ShopShopBundle_homepage;
            }
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ShopShopBundle_homepage');
            }
            return array (  '_controller' => 'Shop\\ShopBundle\\Controller\\PageController::indexAction',  '_route' => 'ShopShopBundle_homepage',);
        }
        not_ShopShopBundle_homepage:

        // ShopShopBundle_about
        if ($pathinfo === '/about') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ShopShopBundle_about;
            }
            return array (  '_controller' => 'Shop\\ShopBundle\\Controller\\PageController::aboutAction',  '_route' => 'ShopShopBundle_about',);
        }
        not_ShopShopBundle_about:

        // ShopShopBundle_checkout
        if ($pathinfo === '/checkout') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ShopShopBundle_checkout;
            }
            return array (  '_controller' => 'Shop\\ShopBundle\\Controller\\CheckoutController::checkoutAction',  '_route' => 'ShopShopBundle_checkout',);
        }
        not_ShopShopBundle_checkout:

        // ShopShopBundle_contact
        if ($pathinfo === '/contact') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_ShopShopBundle_contact;
            }
            return array (  '_controller' => 'Shop\\ShopBundle\\Controller\\ContactController::contactAction',  '_route' => 'ShopShopBundle_contact',);
        }
        not_ShopShopBundle_contact:

        // ShopShopBundle_addProduct
        if ($pathinfo === '/addProduct') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ShopShopBundle_addProduct;
            }
            return array (  '_controller' => 'Shop\\ShopBundle\\Controller\\ProductAdminController::addProductAction',  '_route' => 'ShopShopBundle_addProduct',);
        }
        not_ShopShopBundle_addProduct:

        // ShopShopBundle_editProduct
        if (0 === strpos($pathinfo, '/editProduct') && preg_match('#^/editProduct/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ShopShopBundle_editProduct;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Shop\\ShopBundle\\Controller\\ProductAdminController::editProductAction',)), array('_route' => 'ShopShopBundle_editProduct'));
        }
        not_ShopShopBundle_editProduct:

        // ShopShopBundle_category
        if ($pathinfo === '/category') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ShopShopBundle_category;
            }
            return array (  '_controller' => 'Shop\\ShopBundle\\Controller\\CategoryController::categoryAction',  '_route' => 'ShopShopBundle_category',);
        }
        not_ShopShopBundle_category:

        // ShopShopBundle_basket
        if ($pathinfo === '/basket') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ShopShopBundle_basket;
            }
            return array (  '_controller' => 'Shop\\ShopBundle\\Controller\\BasketController::basketAction',  '_route' => 'ShopShopBundle_basket',);
        }
        not_ShopShopBundle_basket:

        // ShopShopBundle_auth
        if ($pathinfo === '/auth') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_ShopShopBundle_auth;
            }
            return array (  '_controller' => 'Shop\\ShopBundle\\Controller\\AuthenticationController::loginAction',  '_route' => 'ShopShopBundle_auth',);
        }
        not_ShopShopBundle_auth:

        // ShopShopBundle_forgot
        if ($pathinfo === '/forgot') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_ShopShopBundle_forgot;
            }
            return array (  '_controller' => 'Shop\\ShopBundle\\Controller\\ForgotPasswordController::forgotAction',  '_route' => 'ShopShopBundle_forgot',);
        }
        not_ShopShopBundle_forgot:

        // ShopShopBundle_register
        if ($pathinfo === '/register') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_ShopShopBundle_register;
            }
            return array (  '_controller' => 'Shop\\ShopBundle\\Controller\\RegisterCustomerController::registerAction',  '_route' => 'ShopShopBundle_register',);
        }
        not_ShopShopBundle_register:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
