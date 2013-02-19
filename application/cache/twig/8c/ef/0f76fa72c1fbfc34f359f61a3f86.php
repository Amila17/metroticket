<?php

/* layout.twig */
class __TwigTemplate_8cef0f76fa72c1fbfc34f359f61a3f86 extends Twig_Template
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
  \t";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 32
        echo "  </head>

  <body>

    <div class=\"navbar navbar-inverse navbar-fixed-top\">
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
              <li><a href=\"/auth\">Login</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class=\"container\">

    <div id=\"content\">";
        // line 59
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
\t
\t<div id=\"footer\">
\t";
        // line 62
        $this->displayBlock('footer', $context, $blocks);
        // line 64
        echo "</div>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"/assets/js/jquery.js\"></script>
    <script src=\"/assets/js/bootstrap-transition.js\"></script>
    <script src=\"/assets/js/bootstrap-alert.js\"></script>
    <script src=\"/assets/js/bootstrap-modal.js\"></script>
    <script src=\"/assets/js/bootstrap-dropdown.js\"></script>
    <script src=\"/assets/js/bootstrap-scrollspy.js\"></script>
    <script src=\"/assets/js/bootstrap-tab.js\"></script>
    <script src=\"/assets/js/bootstrap-tooltip.js\"></script>
    <script src=\"/assets/js/bootstrap-popover.js\"></script>
    <script src=\"/assets/js/bootstrap-button.js\"></script>
    <script src=\"/assets/js/bootstrap-collapse.js\"></script>
    <script src=\"/assets/js/bootstrap-carousel.js\"></script>
    <script src=\"/assets/js/bootstrap-typeahead.js\"></script>

  </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <meta charset=\"utf-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Le styles -->
    <link href=\"/assets/css/bootstrap.css\" rel=\"stylesheet\">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href=\"/assets/css/bootstrap-responsive.css\" rel=\"stylesheet\">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"/assets/js/html5shiv.js\"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"/assets/ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"/assets/ico/apple-touch-icon-114-precomposed.png\">
      <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"/assets/ico/apple-touch-icon-72-precomposed.png\">
                    <link rel=\"apple-touch-icon-precomposed\" href=\"/assets/ico/apple-touch-icon-57-precomposed.png\">
                                   <link rel=\"shortcut icon\" href=\"/assets/ico/favicon.png\">
  \t";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 59
    public function block_content($context, array $blocks = array())
    {
    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        // line 63
        echo "\t&copy; Copyright 2013 by <a href=\"http://localhost/metroticket/\">MetroTicket</a>.
\t";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 63,  138 => 62,  133 => 59,  99 => 6,  96 => 5,  93 => 4,  67 => 64,  65 => 62,  59 => 59,  30 => 32,  28 => 4,  23 => 1,);
    }
}
