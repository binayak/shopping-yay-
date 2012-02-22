<?php

/* ShopShopBundle:Page:index.html.twig */
class __TwigTemplate_d4753a8f5ce7a5a7869ee53e588427b2 extends Twig_Template
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
        echo "    Shop homepage
\tblah
";
    }

    public function getTemplateName()
    {
        return "ShopShopBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
