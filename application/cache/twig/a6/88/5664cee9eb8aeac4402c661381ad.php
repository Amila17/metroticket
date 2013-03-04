<?php

/* Admin/index.twig */
class __TwigTemplate_a6885664cee9eb8aeac4402c661381ad extends Twig_Template
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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <style>
    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .span4 {
    text-align: center;
    }
    .marketing h2 {
    font-weight: normal;
    }
    .marketing .span4 p {
    margin-left: 10px;
    margin-right: 10px;
    }
    </style>

    <body>
    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing\">

        <!-- Three columns of text below the carousel -->
        <div class=\"row\">
            <div class=\"span4\">
                <img class=\"img-circle\" data-src=\"holder.js/140x140\">
                <h2>Ticket Management</h2>
                <p></p>
                <p><a class=\"btn\" href=\"../admin/ticket\">Ticket Management&raquo;</a></p>
            </div><!-- /.span4 -->
            <div class=\"span4\">
                <img class=\"img-circle\" data-src=\"holder.js/140x140\">
                <h2>Zone Management</h2>
                <p></p>
                <p><a class=\"btn\" href=\"../admin/zone\">Zone Management &raquo;</a></p>
            </div><!-- /.span4 -->
        </div><!-- /.row -->
    </div>
    </body>

";
    }

    public function getTemplateName()
    {
        return "Admin/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,);
    }
}
