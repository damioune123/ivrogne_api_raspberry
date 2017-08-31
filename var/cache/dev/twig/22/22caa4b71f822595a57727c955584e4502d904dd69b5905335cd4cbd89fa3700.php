<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d9b562d13c1cdeb22c60be755d4e36db2cf8408ac1f37f02d7a9ad5ebf18955d extends Twig_Template
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
        $__internal_0318fd96d5b7c66a3314f64a0203d5050bd568f748b11417b5a4fe23681b6eb8 = $this->env->getExtension("native_profiler");
        $__internal_0318fd96d5b7c66a3314f64a0203d5050bd568f748b11417b5a4fe23681b6eb8->enter($__internal_0318fd96d5b7c66a3314f64a0203d5050bd568f748b11417b5a4fe23681b6eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_0318fd96d5b7c66a3314f64a0203d5050bd568f748b11417b5a4fe23681b6eb8->leave($__internal_0318fd96d5b7c66a3314f64a0203d5050bd568f748b11417b5a4fe23681b6eb8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
