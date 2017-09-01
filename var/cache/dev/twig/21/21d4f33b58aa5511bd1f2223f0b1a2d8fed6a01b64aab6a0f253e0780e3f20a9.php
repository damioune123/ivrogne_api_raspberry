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
        $__internal_2b3dd266baca05a7fecc2973aada8302ce803a0de8656217dab8376cbbc87e98 = $this->env->getExtension("native_profiler");
        $__internal_2b3dd266baca05a7fecc2973aada8302ce803a0de8656217dab8376cbbc87e98->enter($__internal_2b3dd266baca05a7fecc2973aada8302ce803a0de8656217dab8376cbbc87e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2b3dd266baca05a7fecc2973aada8302ce803a0de8656217dab8376cbbc87e98->leave($__internal_2b3dd266baca05a7fecc2973aada8302ce803a0de8656217dab8376cbbc87e98_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e7ba43ad8b4f323210893d49e38e4dd58803b454d2b8a4d55ab7f6208e05833 = $this->env->getExtension("native_profiler");
        $__internal_7e7ba43ad8b4f323210893d49e38e4dd58803b454d2b8a4d55ab7f6208e05833->enter($__internal_7e7ba43ad8b4f323210893d49e38e4dd58803b454d2b8a4d55ab7f6208e05833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7e7ba43ad8b4f323210893d49e38e4dd58803b454d2b8a4d55ab7f6208e05833->leave($__internal_7e7ba43ad8b4f323210893d49e38e4dd58803b454d2b8a4d55ab7f6208e05833_prof);

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
