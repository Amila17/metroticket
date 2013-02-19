<?php

/* base_layout.twig */
class __TwigTemplate_b4d2d4ba0f3f8787fb52dc2dba4019b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'style' => array($this, 'block_style'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    ";
        // line 4
        $context["prefix"] = "/metroticket";
        // line 5
        echo "  \t";
        $this->displayBlock('head', $context, $blocks);
        // line 35
        echo "  </head>

  <body>
  \t
  \t <div class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container\">
          <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"brand\" href=\"/metroticket\">MetroTicket</a>
          <div class=\"nav-collapse collapse\">
            <ul class=\"nav\">
              <li class=\"active\"><a href=\"/metroticket\">Home</a></li>
              <li><a href=\"#about\">About</a></li>
              <li><a href=\"#contact\">Contact</a></li>
              <li><a href=\"auth/index\">Login</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    
    <div class=\"container\">
\t \t
    <div id=\"content\">";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
\t
\t<div class=\"footer\">
\t
\t";
        // line 66
        $this->displayBlock('footer', $context, $blocks);
        // line 69
        echo "\t
\t</div>
\t
\t
    </div> <!-- /container -->
    
    

\t
\t
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/jquery.js\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/bootstrap-transition.js\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/bootstrap-alert.js\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/bootstrap-modal.js\"></script>
    <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/bootstrap-dropdown.js\"></script>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/bootstrap-scrollspy.js\"></script>
    <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/bootstrap-tab.js\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/bootstrap-tooltip.js\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/bootstrap-popover.js\"></script>
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/bootstrap-button.js\"></script>
    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/bootstrap-collapse.js\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/bootstrap-carousel.js\"></script>
    <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/bootstrap-typeahead.js\"></script>

  </body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Le styles -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/css/bootstrap.css\" rel=\"stylesheet\">
    <style type=\"text/css\">
    ";
        // line 15
        $this->displayBlock('style', $context, $blocks);
        // line 20
        echo "    </style>
    <link href=\"/assets/css/bootstrap-responsive.css\" rel=\"stylesheet\">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/html5shiv.js\"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/ico/apple-touch-icon-114-precomposed.png\">
      <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/ico/apple-touch-icon-72-precomposed.png\">
                    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/ico/apple-touch-icon-57-precomposed.png\">
                                   <link rel=\"shortcut icon\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/ico/favicon.png\">
  \t";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 15
    public function block_style($context, array $blocks = array())
    {
        // line 16
        echo "      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
      ";
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
    }

    // line 66
    public function block_footer($context, array $blocks = array())
    {
        // line 67
        echo "\t<p>&copy; Copyright 2013 by <a href=\"http://localhost/metroticket/\">MetroTicket</a>.</p>
\t";
    }

    public function getTemplateName()
    {
        return "base_layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 67,  222 => 66,  217 => 62,  210 => 16,  207 => 15,  202 => 7,  196 => 33,  192 => 32,  188 => 31,  184 => 30,  180 => 29,  173 => 25,  166 => 20,  164 => 15,  159 => 13,  150 => 7,  147 => 6,  144 => 5,  135 => 94,  131 => 93,  127 => 92,  123 => 91,  119 => 90,  115 => 89,  111 => 88,  107 => 87,  103 => 86,  99 => 85,  95 => 84,  91 => 83,  87 => 82,  72 => 69,  70 => 66,  63 => 62,  34 => 35,  31 => 5,  29 => 4,  24 => 1,);
    }
}
