<?php

/* ShopShopBundle:Page:about.html.twig */
class __TwigTemplate_caae2c119d9b886e29f64ae776cfca85 extends Twig_Template
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
        echo "    about page
";
    }

    public function getTemplateName()
    {
        return "ShopShopBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
