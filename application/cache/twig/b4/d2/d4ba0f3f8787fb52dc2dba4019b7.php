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
              <li><a href=\"index/aboutUs\">About</a></li>
              <li><a href=\"/contact\">Contact</a></li>
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
    <title>MetroTicket</title>
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
        return array (  216 => 67,  213 => 66,  208 => 62,  201 => 16,  198 => 15,  192 => 33,  188 => 32,  184 => 31,  180 => 30,  176 => 29,  169 => 25,  162 => 20,  160 => 15,  155 => 13,  146 => 6,  143 => 5,  134 => 94,  130 => 93,  126 => 92,  122 => 91,  118 => 90,  114 => 89,  110 => 88,  106 => 87,  102 => 86,  98 => 85,  94 => 84,  90 => 83,  86 => 82,  71 => 69,  69 => 66,  62 => 62,  33 => 35,  30 => 5,  28 => 4,  23 => 1,);
    }
}
