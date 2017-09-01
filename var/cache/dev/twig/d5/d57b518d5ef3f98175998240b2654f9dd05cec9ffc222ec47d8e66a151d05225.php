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
        $__internal_e8e97ef51ab94f3a29e5f1bb7d889916420d4d33910541d413a227f115394cca = $this->env->getExtension("native_profiler");
        $__internal_e8e97ef51ab94f3a29e5f1bb7d889916420d4d33910541d413a227f115394cca->enter($__internal_e8e97ef51ab94f3a29e5f1bb7d889916420d4d33910541d413a227f115394cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e8e97ef51ab94f3a29e5f1bb7d889916420d4d33910541d413a227f115394cca->leave($__internal_e8e97ef51ab94f3a29e5f1bb7d889916420d4d33910541d413a227f115394cca_prof);

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
