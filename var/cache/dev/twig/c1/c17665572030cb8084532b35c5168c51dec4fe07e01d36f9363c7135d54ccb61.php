<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_2c680997fe1ddb08d8542d05b1f4f105de971d65f487a5dae665411a46048bc9 extends Twig_Template
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
        $__internal_80e0fe0ff03766cf1f650151a342c5e0df2cc71b2feecbfcf0ed9215d61c8f74 = $this->env->getExtension("native_profiler");
        $__internal_80e0fe0ff03766cf1f650151a342c5e0df2cc71b2feecbfcf0ed9215d61c8f74->enter($__internal_80e0fe0ff03766cf1f650151a342c5e0df2cc71b2feecbfcf0ed9215d61c8f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_80e0fe0ff03766cf1f650151a342c5e0df2cc71b2feecbfcf0ed9215d61c8f74->leave($__internal_80e0fe0ff03766cf1f650151a342c5e0df2cc71b2feecbfcf0ed9215d61c8f74_prof);

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
