<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_7e124f980bc7914fe54e6e9267fb7844895ee952c9161404bbf006bc7487cf07 extends Twig_Template
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
        $__internal_fa4ffe7651b790711ddd0c048fa59c4386e5f1ff0ab803f412d9b023861e40be = $this->env->getExtension("native_profiler");
        $__internal_fa4ffe7651b790711ddd0c048fa59c4386e5f1ff0ab803f412d9b023861e40be->enter($__internal_fa4ffe7651b790711ddd0c048fa59c4386e5f1ff0ab803f412d9b023861e40be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fa4ffe7651b790711ddd0c048fa59c4386e5f1ff0ab803f412d9b023861e40be->leave($__internal_fa4ffe7651b790711ddd0c048fa59c4386e5f1ff0ab803f412d9b023861e40be_prof);

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
