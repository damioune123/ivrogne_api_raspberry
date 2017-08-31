<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_880071dcdcb7cd72c22aa7d0614538cac75374ec8fbdaa08c711da83ed8783e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8de24666d133c1afa91eea74d7ad1dc730ed3185bccdb8f803d617eb5cdfba6b = $this->env->getExtension("native_profiler");
        $__internal_8de24666d133c1afa91eea74d7ad1dc730ed3185bccdb8f803d617eb5cdfba6b->enter($__internal_8de24666d133c1afa91eea74d7ad1dc730ed3185bccdb8f803d617eb5cdfba6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8de24666d133c1afa91eea74d7ad1dc730ed3185bccdb8f803d617eb5cdfba6b->leave($__internal_8de24666d133c1afa91eea74d7ad1dc730ed3185bccdb8f803d617eb5cdfba6b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_617f27d43c3fb27fd3eecf93f9e17c66fb926d3d0bbfa2080d725d57644c0424 = $this->env->getExtension("native_profiler");
        $__internal_617f27d43c3fb27fd3eecf93f9e17c66fb926d3d0bbfa2080d725d57644c0424->enter($__internal_617f27d43c3fb27fd3eecf93f9e17c66fb926d3d0bbfa2080d725d57644c0424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_617f27d43c3fb27fd3eecf93f9e17c66fb926d3d0bbfa2080d725d57644c0424->leave($__internal_617f27d43c3fb27fd3eecf93f9e17c66fb926d3d0bbfa2080d725d57644c0424_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
