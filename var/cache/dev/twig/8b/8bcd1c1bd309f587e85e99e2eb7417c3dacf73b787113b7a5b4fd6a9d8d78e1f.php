<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d822e4e982ea8a0879ad77e619faef31723ee9597602f1716fb263b91e49bf35 extends Twig_Template
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
        $__internal_abdd3ae0cc958e290e3509bdf47d9cbbfcc3d74b84be06e703332ca562f6a74f = $this->env->getExtension("native_profiler");
        $__internal_abdd3ae0cc958e290e3509bdf47d9cbbfcc3d74b84be06e703332ca562f6a74f->enter($__internal_abdd3ae0cc958e290e3509bdf47d9cbbfcc3d74b84be06e703332ca562f6a74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_abdd3ae0cc958e290e3509bdf47d9cbbfcc3d74b84be06e703332ca562f6a74f->leave($__internal_abdd3ae0cc958e290e3509bdf47d9cbbfcc3d74b84be06e703332ca562f6a74f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
