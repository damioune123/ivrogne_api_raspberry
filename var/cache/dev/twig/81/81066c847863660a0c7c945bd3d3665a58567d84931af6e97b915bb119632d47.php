<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_bde28c42655925f65e4b537755e567b92506d8ecc528ce90785cd4cd369c581d extends Twig_Template
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
        $__internal_56a1813e42f39c6fc3ab70a0a1bb41c498bacb555dae1a9a6d8906d723edb616 = $this->env->getExtension("native_profiler");
        $__internal_56a1813e42f39c6fc3ab70a0a1bb41c498bacb555dae1a9a6d8906d723edb616->enter($__internal_56a1813e42f39c6fc3ab70a0a1bb41c498bacb555dae1a9a6d8906d723edb616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_56a1813e42f39c6fc3ab70a0a1bb41c498bacb555dae1a9a6d8906d723edb616->leave($__internal_56a1813e42f39c6fc3ab70a0a1bb41c498bacb555dae1a9a6d8906d723edb616_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c619a2e6f0e4235499df63797ee9b948d75cd9d567075e73293bd3bacd18543e = $this->env->getExtension("native_profiler");
        $__internal_c619a2e6f0e4235499df63797ee9b948d75cd9d567075e73293bd3bacd18543e->enter($__internal_c619a2e6f0e4235499df63797ee9b948d75cd9d567075e73293bd3bacd18543e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c619a2e6f0e4235499df63797ee9b948d75cd9d567075e73293bd3bacd18543e->leave($__internal_c619a2e6f0e4235499df63797ee9b948d75cd9d567075e73293bd3bacd18543e_prof);

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
