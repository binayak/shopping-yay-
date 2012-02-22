<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'ShopShopBundle_homepage' => true,
       'ShopShopBundle_about' => true,
       'ShopShopBundle_checkout' => true,
       'ShopShopBundle_contact' => true,
       'ShopShopBundle_addProduct' => true,
       'ShopShopBundle_editProduct' => true,
       'ShopShopBundle_category' => true,
       'ShopShopBundle_basket' => true,
       'ShopShopBundle_auth' => true,
       'ShopShopBundle_forgot' => true,
       'ShopShopBundle_register' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getShopShopBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Shop\\ShopBundle\\Controller\\PageController::indexAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getShopShopBundle_aboutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Shop\\ShopBundle\\Controller\\PageController::aboutAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/about',  ),));
    }

    private function getShopShopBundle_checkoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Shop\\ShopBundle\\Controller\\CheckoutController::checkoutAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/checkout',  ),));
    }

    private function getShopShopBundle_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Shop\\ShopBundle\\Controller\\ContactController::contactAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/contact',  ),));
    }

    private function getShopShopBundle_addProductRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Shop\\ShopBundle\\Controller\\ProductAdminController::addProductAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/addProduct',  ),));
    }

    private function getShopShopBundle_editProductRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Shop\\ShopBundle\\Controller\\ProductAdminController::editProductAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/editProduct',  ),));
    }

    private function getShopShopBundle_categoryRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Shop\\ShopBundle\\Controller\\CategoryController::categoryAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/category',  ),));
    }

    private function getShopShopBundle_basketRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Shop\\ShopBundle\\Controller\\BasketController::basketAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/basket',  ),));
    }

    private function getShopShopBundle_authRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Shop\\ShopBundle\\Controller\\AuthenticationController::loginAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/auth',  ),));
    }

    private function getShopShopBundle_forgotRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Shop\\ShopBundle\\Controller\\AuthenticationController::forgotPasswordAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/forgot',  ),));
    }

    private function getShopShopBundle_registerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Shop\\ShopBundle\\Controller\\AuthenticationController::registerAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register',  ),));
    }
}
