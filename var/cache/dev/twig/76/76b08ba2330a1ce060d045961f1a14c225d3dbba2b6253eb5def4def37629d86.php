<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_3945014620a8393c46ff82509ca9908ff8b2fd7f69aee4678eb77865aa4b6c44 extends Twig_Template
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
        $__internal_16ae59ad763241c59b76bece81bee61c5a39236b19129d8bf886d306e2c85eb0 = $this->env->getExtension("native_profiler");
        $__internal_16ae59ad763241c59b76bece81bee61c5a39236b19129d8bf886d306e2c85eb0->enter($__internal_16ae59ad763241c59b76bece81bee61c5a39236b19129d8bf886d306e2c85eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_16ae59ad763241c59b76bece81bee61c5a39236b19129d8bf886d306e2c85eb0->leave($__internal_16ae59ad763241c59b76bece81bee61c5a39236b19129d8bf886d306e2c85eb0_prof);

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
