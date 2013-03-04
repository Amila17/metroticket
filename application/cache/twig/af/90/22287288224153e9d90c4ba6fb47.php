<?php

/* Zone/index.twig */
class __TwigTemplate_af9022287288224153e9d90c4ba6fb47 extends Twig_Template
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
        echo "<body onload=\"formOnload()\">
<h1>
<div class=\"btn-group\" data-toggle=\"buttons-radio\">
  \t\t<button type=\"button\" name=\"addButton\" class=\"btn btn-medium btn-primary\"
                  onclick=\"enableButtonClick();addAction('A');addValue();\">Add Zone</button>
  \t\t<button type=\"button\" name=\"removeButton\" class=\"btn btn-medium btn-primary\"
                  onclick=\"enableButtonClick();addAction('R');removeValue();\">Remove Zone</button>
  \t\t<button type=\"button\" name=\"editButton\" class=\"btn btn-medium btn-primary\"
                  onclick=\"enableButtonClick();addAction('E');amendValue();\">Edit Zone</button>
\t</div>
</h1>
  \t <form name=\"zoneManager\" method=\"post\" action=\"./zoneMaintenance\">
\t\t\t
\t\t\t<div class=\"control-group\" id=\"divTextZone\">
\t\t \t\t<label class=\"control-label\" for=\"zoneType\">Zone Type</label>
\t\t\t<div class=\"controls\">
\t\t\t\t<input class=\"input\" type=\"text\" id=\"zoneType\" name=\"txtZoneType\" required/>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"control-group\" id=\"cmbZoneType\">
\t\t \t\t<label class=\"control-label\" for=\"zoneType\">Zone Type</label>
\t\t\t\t<div class=\"controls\">
\t\t\t\t\t<select name=\"cmbZoneType\" required>
\t\t\t\t\t";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["zones"]) ? $context["zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
            // line 30
            echo "\t\t\t\t\t<option>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["zone"]) ? $context["zone"] : null), "type"));
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 32
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"control-group\" id=\"txtZonePrice\">
\t\t \t\t<label class=\"control-label\" for=\"zonePrice\">Zone Price</label>
\t\t\t\t<div class=\"controls\">
\t\t\t\t\t<input class=\"input\" type=\"text\" id=\"zonePrice\" name=\"txtZonePrice\" required/>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
    \t\t<div class=\"form-actions\">
   \t\t\t\t\t<button type=\"submit\" class=\"btn btn-large btn-primary\">Confirm</button>
   \t\t\t</div>

 \t\t\t\t <input type=\"hidden\" id=\"txtAction\" name=\"txtAction\">
\t\t\t</form>
</body>
<script type=\"text/javascript\">
function addAction(actionType)
{
\tvar elem = document.getElementById(\"txtAction\");
\telem.value = actionType;
}
</script>
<script>
\tfunction formOnload()
\t{
\t\tdisableField(document.forms[\"zoneManager\"].txtZoneType);
\t\tdisableField(document.forms[\"zoneManager\"].txtZonePrice);
\t\thideControl(document.getElementById('cmbZoneType'));
\t}
\tfunction enableButtonClick()
\t{
\t\tenableField(document.forms[\"zoneManager\"].txtZoneType);
\t\tenableField(document.forms[\"zoneManager\"].txtZonePrice);
\t}
\tfunction amendValue()
\t{
\t\thideControl(document.getElementById('divZoneTicket'));
        unhideControl(document.getElementById('txtZonePrice'));
\t\tunhideControl(document.getElementById('cmbZoneType'));
\t}
\tfunction addValue()
\t{
\t\thideControl(document.getElementById('cmbZoneType'));
        unhideControl(document.getElementById('txtZonePrice'));
\t\tunhideControl(document.getElementById('divZoneTicket'));
\t}
    function removeValue()
    {

        unhideControl(document.getElementById('cmbZoneType'));
        hideControl(document.getElementById('txtZonePrice'));
        hideControl(document.getElementById('divZoneTicket'));
    }
\t
\tfunction disableField(myField)
\t{
\t\tmyField.disabled = true;
\t\treturn true;
\t}
\tfunction enableField(myField)
\t{
\t\tmyField.disabled = false;
\t\treturn true;
\t}
\tfunction hideControl(myControl)
\t{
\t\tmyControl.style.display=\"none\";
\t\treturn true;
\t}
\tfunction unhideControl(myControl)
\t{
        myControl.style.display= \"\";
\t\treturn true;
\t}
</script>

";
    }

    public function getTemplateName()
    {
        return "Zone/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 32,  61 => 30,  57 => 29,  31 => 5,  28 => 4,);
    }
}
