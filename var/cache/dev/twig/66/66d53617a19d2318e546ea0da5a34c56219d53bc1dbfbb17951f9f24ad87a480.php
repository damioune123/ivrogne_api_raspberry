<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_56bb4fa8c196281a82d493a8da1e81c7e40d27320396c1c75120894391857d64 extends Twig_Template
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
        $__internal_da8d031ce35f53b00cbe4e027bb5b88cac273f95f8cd45e9c2bf61cfe5b0618d = $this->env->getExtension("native_profiler");
        $__internal_da8d031ce35f53b00cbe4e027bb5b88cac273f95f8cd45e9c2bf61cfe5b0618d->enter($__internal_da8d031ce35f53b00cbe4e027bb5b88cac273f95f8cd45e9c2bf61cfe5b0618d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_da8d031ce35f53b00cbe4e027bb5b88cac273f95f8cd45e9c2bf61cfe5b0618d->leave($__internal_da8d031ce35f53b00cbe4e027bb5b88cac273f95f8cd45e9c2bf61cfe5b0618d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
