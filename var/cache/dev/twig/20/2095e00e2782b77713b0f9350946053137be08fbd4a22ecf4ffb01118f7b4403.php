<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_34d37af82a14528b1161ae0f3001c9bcb1a97fdaf6137b24595e1e1b55fb5450 extends Twig_Template
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
        $__internal_4999f8b07151040ea9d178722707b29275df1882d7a1376b2c32650cdee15e6e = $this->env->getExtension("native_profiler");
        $__internal_4999f8b07151040ea9d178722707b29275df1882d7a1376b2c32650cdee15e6e->enter($__internal_4999f8b07151040ea9d178722707b29275df1882d7a1376b2c32650cdee15e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4999f8b07151040ea9d178722707b29275df1882d7a1376b2c32650cdee15e6e->leave($__internal_4999f8b07151040ea9d178722707b29275df1882d7a1376b2c32650cdee15e6e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
