<?php

/* ShopShopBundle:Authentication:verificationEmail.txt.twig */
class __TwigTemplate_ac464bf74509c0755f7b58dcd0b574c0 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "Please verify your email address by clicking on the following link:
";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
        echo "


";
    }

    public function getTemplateName()
    {
        return "ShopShopBundle:Authentication:verificationEmail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
