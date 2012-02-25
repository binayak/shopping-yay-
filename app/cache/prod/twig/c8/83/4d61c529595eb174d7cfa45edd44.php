<?php

/* ShopShopBundle:Page:thanks.html.twig */
class __TwigTemplate_c8834d61c529595eb174d7cfa45edd44 extends Twig_Template
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
        echo "    Thank You!!
";
    }

    public function getTemplateName()
    {
        return "ShopShopBundle:Page:thanks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
