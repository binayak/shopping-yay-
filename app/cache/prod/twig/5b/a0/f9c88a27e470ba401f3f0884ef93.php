<?php

/* ShopShopBundle:Page:orderConfirmation.html.twig */
class __TwigTemplate_5ba0f9c88a27e470ba401f3f0884ef93 extends Twig_Template
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
        echo "    Order Confirmation Page
";
    }

    public function getTemplateName()
    {
        return "ShopShopBundle:Page:orderConfirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
