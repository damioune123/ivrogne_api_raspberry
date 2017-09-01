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
        $__internal_5720cb8dd74d3d99944ea71f300d4f0c4e584057495c4da6db5b371772f67e64 = $this->env->getExtension("native_profiler");
        $__internal_5720cb8dd74d3d99944ea71f300d4f0c4e584057495c4da6db5b371772f67e64->enter($__internal_5720cb8dd74d3d99944ea71f300d4f0c4e584057495c4da6db5b371772f67e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5720cb8dd74d3d99944ea71f300d4f0c4e584057495c4da6db5b371772f67e64->leave($__internal_5720cb8dd74d3d99944ea71f300d4f0c4e584057495c4da6db5b371772f67e64_prof);

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
