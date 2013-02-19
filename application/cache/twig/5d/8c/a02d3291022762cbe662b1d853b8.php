<?php

/* navigationMenu.twig */
class __TwigTemplate_5d8ca02d3291022762cbe662b1d853b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout.twig");

        $this->blocks = array(
            'navContent' => array($this, 'block_navContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_navContent($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"navbar navbar-inverse navbar-fixed-top\">
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
";
    }

    public function getTemplateName()
    {
        return "navigationMenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
