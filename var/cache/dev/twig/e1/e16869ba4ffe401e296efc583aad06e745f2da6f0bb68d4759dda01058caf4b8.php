<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e9f8167b43ea1cdc588e3d8c784ff1c87635946fc703e25c31d25100d07b1ac2 extends Twig_Template
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
        $__internal_f2a4bd68026c5ac4da21d6f75439947d12502720481987fcbdff215ddfee0979 = $this->env->getExtension("native_profiler");
        $__internal_f2a4bd68026c5ac4da21d6f75439947d12502720481987fcbdff215ddfee0979->enter($__internal_f2a4bd68026c5ac4da21d6f75439947d12502720481987fcbdff215ddfee0979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f2a4bd68026c5ac4da21d6f75439947d12502720481987fcbdff215ddfee0979->leave($__internal_f2a4bd68026c5ac4da21d6f75439947d12502720481987fcbdff215ddfee0979_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
