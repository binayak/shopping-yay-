<?php

/* ShopShopBundle:Authentication:registration.html.twig */
class __TwigTemplate_2ee43471779fc014f143a4ac18415ca9 extends Twig_Template
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
        echo "    registration
";
    }

    public function getTemplateName()
    {
        return "ShopShopBundle:Authentication:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
