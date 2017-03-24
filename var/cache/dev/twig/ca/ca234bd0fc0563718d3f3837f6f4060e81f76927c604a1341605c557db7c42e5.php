<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_0eaf413d854af4e6c8e2df239e10a0884419ad36cc43f19e1841f2b17788e68a extends Twig_Template
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
        $__internal_512ec27608a8f503a4fcfc147789470ba7a42e378654c4025d1274d3c910bfa3 = $this->env->getExtension("native_profiler");
        $__internal_512ec27608a8f503a4fcfc147789470ba7a42e378654c4025d1274d3c910bfa3->enter($__internal_512ec27608a8f503a4fcfc147789470ba7a42e378654c4025d1274d3c910bfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_512ec27608a8f503a4fcfc147789470ba7a42e378654c4025d1274d3c910bfa3->leave($__internal_512ec27608a8f503a4fcfc147789470ba7a42e378654c4025d1274d3c910bfa3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
