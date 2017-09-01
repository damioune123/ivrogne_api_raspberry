<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_2ccc0230db5719fcad1468955b094fbf56184ecbc392ccbb4d48bed18dde675c extends Twig_Template
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
        $__internal_417307fb90c409edbc0d09941f003224ccd1be1e3881f0db64546be375ff78c9 = $this->env->getExtension("native_profiler");
        $__internal_417307fb90c409edbc0d09941f003224ccd1be1e3881f0db64546be375ff78c9->enter($__internal_417307fb90c409edbc0d09941f003224ccd1be1e3881f0db64546be375ff78c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_417307fb90c409edbc0d09941f003224ccd1be1e3881f0db64546be375ff78c9->leave($__internal_417307fb90c409edbc0d09941f003224ccd1be1e3881f0db64546be375ff78c9_prof);

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
