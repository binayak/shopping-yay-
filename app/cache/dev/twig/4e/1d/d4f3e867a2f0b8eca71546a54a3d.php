<?php

/* ShopShopBundle:Authentication:login.html.twig */
class __TwigTemplate_4e1dd4f3e867a2f0b8eca71546a54a3d extends Twig_Template
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Sign In";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<header>
\t\t<h1>Sign In</h1>
\t</header>

\t<form action=\"#\" method=\"post\" ";
        // line 11
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " class=\"#\">
\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "

\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "email"));
        echo "
\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "password"));
        echo "

\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "

\t\t<input type=\"submit\" value=\"Sign In\"/>

\t</form>

<hr />
<br />
<ul>
<li><u><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ShopShopBundle_forgot"), "html", null, true);
        echo "\">Forgot Your Password ?</a></u></li>
<br />
<li><u><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ShopShopBundle_register"), "html", null, true);
        echo "\">Register Now!</a></u></li>
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
