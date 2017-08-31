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
        $__internal_38bd6755683f722977b3789b1b79cac7f4745ac7a1f55009b6d08e9ec46757ad = $this->env->getExtension("native_profiler");
        $__internal_38bd6755683f722977b3789b1b79cac7f4745ac7a1f55009b6d08e9ec46757ad->enter($__internal_38bd6755683f722977b3789b1b79cac7f4745ac7a1f55009b6d08e9ec46757ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_38bd6755683f722977b3789b1b79cac7f4745ac7a1f55009b6d08e9ec46757ad->leave($__internal_38bd6755683f722977b3789b1b79cac7f4745ac7a1f55009b6d08e9ec46757ad_prof);

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
