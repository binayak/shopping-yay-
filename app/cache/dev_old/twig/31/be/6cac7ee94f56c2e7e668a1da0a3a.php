<?php

/* ::base.html.twig */
class __TwigTemplate_31be6cac7ee94f56c2e7e668a1da0a3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 21
        $this->displayBlock('navigation', $context, $blocks);
        // line 34
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 37
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 38
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 46
        $this->displayBlock('sidebar', $context, $blocks);
        // line 47
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        // line 53
        echo "            </div>
        </section>

        ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome to My Shop!";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 21
    public function block_navigation($context, array $blocks = array())
    {
        // line 22
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ShopShopBundle_homepage"), "html", null, true);
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ShopShopBundle_about"), "html", null, true);
        echo "\">About</a></li>
                                <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ShopShopBundle_contact"), "html", null, true);
        echo "\">Contact</a></li>
                                <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ShopShopBundle_category"), "html", null, true);
        echo "\">Category</a></li>
                                <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ShopShopBundle_basket"), "html", null, true);
        echo "\">Basket</a></li>
\t\t\t\t<li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ShopShopBundle_auth"), "html", null, true);
        echo "\">Login/Register</a></li>

                            </ul>
                        </nav>
                    ";
    }

    // line 37
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"#\">Shopping Yay!</a>";
    }

    // line 38
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"#\">Welcome to the most simplest shopping experience!</a>";
    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
    }

    // line 46
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        // line 51
        echo "                    All Rights Reserved -<a href=\"http://en.wikipedia.org/wiki/Terms_of_service\">Terms & Conditions</a>
                ";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
