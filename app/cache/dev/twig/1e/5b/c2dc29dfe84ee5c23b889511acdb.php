<?php

/* ShopShopBundle:Authentication:forgotPassword.html.twig */
class __TwigTemplate_1e5bc2dc29dfe84ee5c23b889511acdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Forgot Password ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<header>
\t\t<h1>Email Your Password</h1>
\t</header>
\t
\t<form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ShopShopBundle_forgot"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " class=\"#'>
\t
\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "

\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "email"));
        echo "

\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
\t\t
\t\t<input type=\"submit\" value=\"Email my password\"/>

\t</form>

";
    }

    public function getTemplateName()
    {
        return "ShopShopBundle:Authentication:forgotPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
