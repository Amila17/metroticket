<?php

/* layout.twig */
class __TwigTemplate_eb2fb725804a70ef5fe686f53c01f5fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
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
        // line 33
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
        // line 60
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
\t
\t<div id=\"footer\">
\t";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        // line 65
        echo "</div>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/jquery.js\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/bootstrap-transition.js\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/bootstrap-alert.js\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/bootstrap-modal.js\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/bootstrap-dropdown.js\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/bootstrap-scrollspy.js\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/bootstrap-tab.js\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/bootstrap-tooltip.js\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/bootstrap-popover.js\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/bootstrap-button.js\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/bootstrap-collapse.js\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/bootstrap-carousel.js\"></script>
    <script src=\"";
        // line 83
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
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href=\"/assets/css/bootstrap-responsive.css\" rel=\"stylesheet\">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/js/html5shiv.js\"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/ico/apple-touch-icon-114-precomposed.png\">
      <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/ico/apple-touch-icon-72-precomposed.png\">
                    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/ico/apple-touch-icon-57-precomposed.png\">
                                   <link rel=\"shortcut icon\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
        echo "/assets/ico/favicon.png\">
  \t";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 60
    public function block_content($context, array $blocks = array())
    {
    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        // line 64
        echo "\t&copy; Copyright 2013 by <a href=\"http://localhost/metroticket/\">MetroTicket</a>.
\t";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 64,  202 => 63,  197 => 60,  192 => 7,  186 => 31,  182 => 30,  178 => 29,  174 => 28,  170 => 27,  163 => 23,  150 => 13,  141 => 7,  138 => 6,  135 => 5,  126 => 83,  122 => 82,  118 => 81,  114 => 80,  110 => 79,  106 => 78,  102 => 77,  98 => 76,  94 => 75,  90 => 74,  86 => 73,  82 => 72,  78 => 71,  70 => 65,  68 => 63,  62 => 60,  33 => 33,  30 => 5,  28 => 4,  23 => 1,);
    }
}
