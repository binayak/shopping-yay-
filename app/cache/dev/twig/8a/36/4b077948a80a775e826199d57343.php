<?php

/* ShopShopBundle:Page:verify.html.twig */
class __TwigTemplate_8a364b077948a80a775e826199d57343 extends Twig_Template
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
        echo "    Thank You, ";
        echo twig_escape_filter($this->env, $this->getContext($context, "customerName"), "html", null, true);
        echo " for verification!!
";
    }

    public function getTemplateName()
    {
        return "ShopShopBundle:Page:verify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
