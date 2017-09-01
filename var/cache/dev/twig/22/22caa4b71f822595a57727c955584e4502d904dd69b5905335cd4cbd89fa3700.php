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
        $__internal_63db8c0ef3043cc28d074f65859add4c9c1c4145c5719ae45dc3369a1f8c0848 = $this->env->getExtension("native_profiler");
        $__internal_63db8c0ef3043cc28d074f65859add4c9c1c4145c5719ae45dc3369a1f8c0848->enter($__internal_63db8c0ef3043cc28d074f65859add4c9c1c4145c5719ae45dc3369a1f8c0848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_63db8c0ef3043cc28d074f65859add4c9c1c4145c5719ae45dc3369a1f8c0848->leave($__internal_63db8c0ef3043cc28d074f65859add4c9c1c4145c5719ae45dc3369a1f8c0848_prof);

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
