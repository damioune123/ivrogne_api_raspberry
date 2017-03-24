<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_8f904356d2778663396b0c410db99afa9ac9ab32726f7abff4e41dfae9e6a1b5 extends Twig_Template
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
        $__internal_a7ec067f9a103cbb5d76f3a787fd556e602727756d5c8877169e7e43853c5e0a = $this->env->getExtension("native_profiler");
        $__internal_a7ec067f9a103cbb5d76f3a787fd556e602727756d5c8877169e7e43853c5e0a->enter($__internal_a7ec067f9a103cbb5d76f3a787fd556e602727756d5c8877169e7e43853c5e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a7ec067f9a103cbb5d76f3a787fd556e602727756d5c8877169e7e43853c5e0a->leave($__internal_a7ec067f9a103cbb5d76f3a787fd556e602727756d5c8877169e7e43853c5e0a_prof);

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
