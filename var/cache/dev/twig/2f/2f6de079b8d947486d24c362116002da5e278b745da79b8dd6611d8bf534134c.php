<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_8b7e655b78550bfd1ba9fc5b6beab4a2405404d21f106c4a5b2e52d289d21d1b extends Twig_Template
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
        $__internal_82b63582257fae91dfb79f423bb205f7244f1ec5a5ec82798441468bced558f4 = $this->env->getExtension("native_profiler");
        $__internal_82b63582257fae91dfb79f423bb205f7244f1ec5a5ec82798441468bced558f4->enter($__internal_82b63582257fae91dfb79f423bb205f7244f1ec5a5ec82798441468bced558f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_82b63582257fae91dfb79f423bb205f7244f1ec5a5ec82798441468bced558f4->leave($__internal_82b63582257fae91dfb79f423bb205f7244f1ec5a5ec82798441468bced558f4_prof);

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
