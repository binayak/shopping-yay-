<?php

/* ShopShopBundle:Authentication:login.html.twig */
class __TwigTemplate_4e1dd4f3e867a2f0b8eca71546a54a3d extends Twig_Template
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
        echo "    Login Page and Form
<hr />
<ul>
<li>Links to Registration and Forgot Password</li>
<hr />
<li><a href=\"ShopShopBundle_register\">Forgot Your Password ?</a></li>
<li><a href=\"#\">Register Now!</a></li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "ShopShopBundle:Authentication:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
