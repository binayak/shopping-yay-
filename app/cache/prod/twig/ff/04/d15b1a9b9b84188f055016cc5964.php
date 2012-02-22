<?php

/* ShopShopBundle:Contact:contact.html.twig */
class __TwigTemplate_ff04d15b1a9b9b84188f055016cc5964 extends Twig_Template
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
        echo "    Contact Page
";
    }

    public function getTemplateName()
    {
        return "ShopShopBundle:Contact:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
