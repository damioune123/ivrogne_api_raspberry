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
        $__internal_11ea52564814210041b68ceea39743ae7a147f5fca94d37e557ad96fe59060f7 = $this->env->getExtension("native_profiler");
        $__internal_11ea52564814210041b68ceea39743ae7a147f5fca94d37e557ad96fe59060f7->enter($__internal_11ea52564814210041b68ceea39743ae7a147f5fca94d37e557ad96fe59060f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_11ea52564814210041b68ceea39743ae7a147f5fca94d37e557ad96fe59060f7->leave($__internal_11ea52564814210041b68ceea39743ae7a147f5fca94d37e557ad96fe59060f7_prof);

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
