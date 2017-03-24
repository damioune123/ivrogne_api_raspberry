<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ee35b0af41517dbace197b465d734d381136f853ed961b751b88f9cda88a430f extends Twig_Template
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
        $__internal_fd9df2267a1ae0a463ff2ca51fd60a74f20084730da6eff10af377e1901ea0ba = $this->env->getExtension("native_profiler");
        $__internal_fd9df2267a1ae0a463ff2ca51fd60a74f20084730da6eff10af377e1901ea0ba->enter($__internal_fd9df2267a1ae0a463ff2ca51fd60a74f20084730da6eff10af377e1901ea0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_fd9df2267a1ae0a463ff2ca51fd60a74f20084730da6eff10af377e1901ea0ba->leave($__internal_fd9df2267a1ae0a463ff2ca51fd60a74f20084730da6eff10af377e1901ea0ba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
