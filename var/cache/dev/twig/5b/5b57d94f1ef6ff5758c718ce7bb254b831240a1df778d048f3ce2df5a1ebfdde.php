<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d86ecc159982df1f12c46083563ec4729be14b0985e08dd2f06eb79fb37a9d5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ca233d374222e99963d73dc0686b09b4e99c3ba7457bfea00ca75ae66ede002 = $this->env->getExtension("native_profiler");
        $__internal_3ca233d374222e99963d73dc0686b09b4e99c3ba7457bfea00ca75ae66ede002->enter($__internal_3ca233d374222e99963d73dc0686b09b4e99c3ba7457bfea00ca75ae66ede002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3ca233d374222e99963d73dc0686b09b4e99c3ba7457bfea00ca75ae66ede002->leave($__internal_3ca233d374222e99963d73dc0686b09b4e99c3ba7457bfea00ca75ae66ede002_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
