<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_6e0c9b2a44622bdea53d865a29a653d7c0870a54aba24539f6bc7ae63edfe9b8 extends Twig_Template
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
        $__internal_adbe5755ee598d0cda1c7a61f26f18ac57b22dd6ec960da9b049dd263c385a9e = $this->env->getExtension("native_profiler");
        $__internal_adbe5755ee598d0cda1c7a61f26f18ac57b22dd6ec960da9b049dd263c385a9e->enter($__internal_adbe5755ee598d0cda1c7a61f26f18ac57b22dd6ec960da9b049dd263c385a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_adbe5755ee598d0cda1c7a61f26f18ac57b22dd6ec960da9b049dd263c385a9e->leave($__internal_adbe5755ee598d0cda1c7a61f26f18ac57b22dd6ec960da9b049dd263c385a9e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
