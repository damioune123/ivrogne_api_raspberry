<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d249a277ce64ef85d2fd672aa87faaa251237e649476edc20ac65aa2a9aee640 extends Twig_Template
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
        $__internal_285e380dd78a5088ec6893384f5dc0b27e903411e982f29dd0cf27be156a7dc1 = $this->env->getExtension("native_profiler");
        $__internal_285e380dd78a5088ec6893384f5dc0b27e903411e982f29dd0cf27be156a7dc1->enter($__internal_285e380dd78a5088ec6893384f5dc0b27e903411e982f29dd0cf27be156a7dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_285e380dd78a5088ec6893384f5dc0b27e903411e982f29dd0cf27be156a7dc1->leave($__internal_285e380dd78a5088ec6893384f5dc0b27e903411e982f29dd0cf27be156a7dc1_prof);

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
