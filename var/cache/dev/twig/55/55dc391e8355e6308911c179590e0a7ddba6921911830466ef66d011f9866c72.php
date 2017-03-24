<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_3d9d5a7d70abbf01249b66c7622a609e5c9f792eb70708a1d2606b9bab3aa205 extends Twig_Template
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
        $__internal_f8b763bf14ce3a7ffc9a1970b57cca84006be6197aa6a7c1f2a3042facaf3aaa = $this->env->getExtension("native_profiler");
        $__internal_f8b763bf14ce3a7ffc9a1970b57cca84006be6197aa6a7c1f2a3042facaf3aaa->enter($__internal_f8b763bf14ce3a7ffc9a1970b57cca84006be6197aa6a7c1f2a3042facaf3aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f8b763bf14ce3a7ffc9a1970b57cca84006be6197aa6a7c1f2a3042facaf3aaa->leave($__internal_f8b763bf14ce3a7ffc9a1970b57cca84006be6197aa6a7c1f2a3042facaf3aaa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
