<?php

/* ShopShopBundle:Authentication:forgotPassword.html.twig */
class __TwigTemplate_1e5bc2dc29dfe84ee5c23b889511acdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ShopShopBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    Forgot Password Page
";
    }

    public function getTemplateName()
    {
        return "ShopShopBundle:Authentication:forgotPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
