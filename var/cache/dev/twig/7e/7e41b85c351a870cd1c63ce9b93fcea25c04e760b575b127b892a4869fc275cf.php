<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c5c105e71163420017e519595a0b1460b1f71d7e5728b4bf26735884d047231d extends Twig_Template
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
        $__internal_e277fe98c52e9b87939f1821e2ae77ec98f638a7c5dffcd9c0f1bd520b5bac07 = $this->env->getExtension("native_profiler");
        $__internal_e277fe98c52e9b87939f1821e2ae77ec98f638a7c5dffcd9c0f1bd520b5bac07->enter($__internal_e277fe98c52e9b87939f1821e2ae77ec98f638a7c5dffcd9c0f1bd520b5bac07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_e277fe98c52e9b87939f1821e2ae77ec98f638a7c5dffcd9c0f1bd520b5bac07->leave($__internal_e277fe98c52e9b87939f1821e2ae77ec98f638a7c5dffcd9c0f1bd520b5bac07_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
