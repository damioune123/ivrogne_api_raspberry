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
        $__internal_a3e342aca9bb10145e8abd9d19dc0e9d9e833ccd565c228bff0e0389082cbc0a = $this->env->getExtension("native_profiler");
        $__internal_a3e342aca9bb10145e8abd9d19dc0e9d9e833ccd565c228bff0e0389082cbc0a->enter($__internal_a3e342aca9bb10145e8abd9d19dc0e9d9e833ccd565c228bff0e0389082cbc0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a3e342aca9bb10145e8abd9d19dc0e9d9e833ccd565c228bff0e0389082cbc0a->leave($__internal_a3e342aca9bb10145e8abd9d19dc0e9d9e833ccd565c228bff0e0389082cbc0a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_085ae16b7b9366dfaafa65af17306f88c00f3a91d762f4be508615f8840cd4cc = $this->env->getExtension("native_profiler");
        $__internal_085ae16b7b9366dfaafa65af17306f88c00f3a91d762f4be508615f8840cd4cc->enter($__internal_085ae16b7b9366dfaafa65af17306f88c00f3a91d762f4be508615f8840cd4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_085ae16b7b9366dfaafa65af17306f88c00f3a91d762f4be508615f8840cd4cc->leave($__internal_085ae16b7b9366dfaafa65af17306f88c00f3a91d762f4be508615f8840cd4cc_prof);

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
