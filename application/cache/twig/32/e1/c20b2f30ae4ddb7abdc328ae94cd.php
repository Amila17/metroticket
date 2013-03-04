<?php

/* Ticket/admin.twig */
class __TwigTemplate_32e1c20b2f30ae4ddb7abdc328ae94cd extends Twig_Template
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
\t<div class=\"btn-group\" data-toggle=\"buttons-radio\">
  \t\t<button type=\"button\" name=\"addButton\" class=\"btn btn-medium btn-primary\"
                  onclick=\"enableButtonClick();addAction('A');addValue();\">Add Ticket</button>
  \t\t<button type=\"button\" name=\"removeButton\" class=\"btn btn-medium btn-primary\"
                  onclick=\"enableButtonClick();addAction('R');removeValue();\">Remove Ticket</button>
  \t\t<button type=\"button\" name=\"editButton\" class=\"btn btn-medium btn-primary\"
                  onclick=\"enableButtonClick();addAction('E');amendValue();\">Edit Item</button>
\t</div> 
</h1>
  \t <form name=\"ticketManager\" method=\"post\" action=\"./ticketMaintenance\">
\t\t\t
\t\t\t<div class=\"control-group\" id=\"divTextTicket\">
\t\t \t\t<label class=\"control-label\" for=\"ticketType\">Ticket Type</label>
\t\t\t<div class=\"controls\">
\t\t\t\t<input class=\"input\" type=\"text\" id=\"ticketType\" name=\"txtTicketType\" required/>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"control-group\" id=\"cmbTicketType\">
\t\t \t\t<label class=\"control-label\" for=\"ticketType\">Ticket Type</label>
\t\t\t\t<div class=\"controls\">
\t\t\t\t\t<select name=\"cmbTicketType\" required>
\t\t\t\t\t";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 30
            echo "\t\t\t\t\t<option value=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "name"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "name"));
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 32
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"control-group\" id=\"txtTicketPrice\">
\t\t \t\t<label class=\"control-label\" for=\"ticketPrice\">Ticket Price</label>
\t\t\t\t<div class=\"controls\">
\t\t\t\t\t<input class=\"input\" type=\"text\" id=\"ticketPrice\" name=\"txtTicketPrice\" required/>
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
\t\tdisableField(document.forms[\"ticketManager\"].txtTicketType);
\t\tdisableField(document.forms[\"ticketManager\"].txtTicketPrice);
\t\thideControl(document.getElementById('cmbTicketType'));
\t}
\tfunction enableButtonClick()
\t{
\t\tenableField(document.forms[\"ticketManager\"].txtTicketType);
\t\tenableField(document.forms[\"ticketManager\"].txtTicketPrice);
\t}
\tfunction amendValue()
\t{
\t\thideControl(document.getElementById('divTextTicket'));
        unhideControl(document.getElementById('txtTicketPrice'));
\t\tunhideControl(document.getElementById('cmbTicketType'));
\t}
\tfunction addValue()
\t{
\t\thideControl(document.getElementById('cmbTicketType'));
        unhideControl(document.getElementById('txtTicketPrice'));
\t\tunhideControl(document.getElementById('divTextTicket'));
\t}
    function removeValue()
    {

        unhideControl(document.getElementById('cmbTicketType'));
        hideControl(document.getElementById('txtTicketPrice'));
        hideControl(document.getElementById('divTextTicket'));
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
        return "Ticket/admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 32,  61 => 30,  57 => 29,  31 => 5,  28 => 4,);
    }
}
