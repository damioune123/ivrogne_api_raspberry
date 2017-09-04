<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d937332e595c71a6f64a1ea7a3caab1e3fd6c81c0e4b69c251cccd1e5870fda0 extends Twig_Template
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
        $__internal_51649522b8479434b7078832d0d25dcd0006a363a68fde5424410448db073d92 = $this->env->getExtension("native_profiler");
        $__internal_51649522b8479434b7078832d0d25dcd0006a363a68fde5424410448db073d92->enter($__internal_51649522b8479434b7078832d0d25dcd0006a363a68fde5424410448db073d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_51649522b8479434b7078832d0d25dcd0006a363a68fde5424410448db073d92->leave($__internal_51649522b8479434b7078832d0d25dcd0006a363a68fde5424410448db073d92_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
