<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_90fa847df6759fd339ab0886827e5a8d0c0a6a5b32e6faba570fc9f66f4c7af1 extends Twig_Template
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
        $__internal_aceccc5f160aa579401a6b24bfd88d60376ec29e0c8fcc9725f734f183061dfd = $this->env->getExtension("native_profiler");
        $__internal_aceccc5f160aa579401a6b24bfd88d60376ec29e0c8fcc9725f734f183061dfd->enter($__internal_aceccc5f160aa579401a6b24bfd88d60376ec29e0c8fcc9725f734f183061dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_aceccc5f160aa579401a6b24bfd88d60376ec29e0c8fcc9725f734f183061dfd->leave($__internal_aceccc5f160aa579401a6b24bfd88d60376ec29e0c8fcc9725f734f183061dfd_prof);

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
