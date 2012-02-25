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
        echo "
  <header>
    <h1>Contact Customer Support</h1>
  </header>
";
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "shop-notice"), "method")) {
            // line 10
            echo "\t<div class=\"shop-notice\">
\t  ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "shop-notice"), "method"), "html", null, true);
            echo "
\t</div>
";
        }
        // line 14
        echo "  <form action \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ShopShopBundle_contact"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " class=\"blogger\">
   
  ";
        // line 16
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "name"));
        echo "
  ";
        // line 17
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "email"));
        echo "
  ";
        // line 18
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "subject"));
        echo "
  ";
        // line 19
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "body"));
        echo "
  ";
        // line 20
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "

  <input type=\"submit\" value = \"Submit\" />
 </form>
 
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
