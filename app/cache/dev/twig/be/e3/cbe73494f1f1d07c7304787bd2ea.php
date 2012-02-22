<?php

/* ShopShopBundle:ProductAdmin:editProduct.html.twig */
class __TwigTemplate_bee3cbe73494f1f1d07c7304787bd2ea extends Twig_Template
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
        echo "    Edit Product
";
    }

    public function getTemplateName()
    {
        return "ShopShopBundle:ProductAdmin:editProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
