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
 
  <form action \"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ShopShopBundle_contact"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " class=\"blogger\">
   
  ";
        // line 12
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "name"));
        echo "
  ";
        // line 13
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "email"));
        echo "
  ";
        // line 14
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "subject"));
        echo "
  ";
        // line 15
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, "form"), "body"));
        echo "
  ";
        // line 16
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
