<?php

/* Index/index.twig */
class __TwigTemplate_571b72dfe7cf498f1d66b3fd9e970256 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base_layout.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base_layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h3> ";
        echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : null), "html", null, true);
        echo " </h3>
<body>Welcome to metroticket website. This is the best website to purchase tickets.</body>
<br>
<br>
";
    }

    public function getTemplateName()
    {
        return "Index/index.twig";
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
