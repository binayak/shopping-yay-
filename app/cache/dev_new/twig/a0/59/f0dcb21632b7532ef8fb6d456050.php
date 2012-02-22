<?php

/* ShopShopBundle:Basket:basket.html.twig */
class __TwigTemplate_a059f0dcb21632b7532ef8fb6d456050 extends Twig_Template
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
        echo "    your basket page
";
    }

    public function getTemplateName()
    {
        return "ShopShopBundle:Basket:basket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
