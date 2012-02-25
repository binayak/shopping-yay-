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
        echo "\t<header>
\t\t<h1>Register Yourself!</h1>
\t</header>

<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ShopShopBundle_register"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " class =\"#\">
\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "

\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "name"));
        echo "
\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "address"));
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
        // line 16
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "confirmPassword"));
        echo "

\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "

\t\t<input type = \"submit\" value=\"Register Me!\" />

\t</form>
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
