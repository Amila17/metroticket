<?php

/* Auth/index.twig */
class __TwigTemplate_d863fbc51be313578329ca7174d75d6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base_login.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base_login.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<!-- <div class=\"container\">
 -->
      <form class=\"form-signin\" method=\"POST\" action=\"auth/login\">
        <h2 class=\"form-signin-heading\">Please login in</h2>
        <input type=\"text\" class=\"input-block-level\" placeholder=\"Username\">
        <input type=\"password\" class=\"input-block-level\" placeholder=\"Password\">
        <label class=\"checkbox\">
          <input type=\"checkbox\" value=\"remember-me\"> Remember me
        </label>
        <button class=\"btn btn-large btn-primary\" type=\"submit\">Sign in</button>
      </form>

<!-- </div> --> <!-- /container -->

";
    }

    public function getTemplateName()
    {
        return "Auth/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
