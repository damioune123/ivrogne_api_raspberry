<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_96c057aa2d71e578ea48c9b219575515a7cdd787e2d79e713c83cb2bfc5029ac extends Twig_Template
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
        $__internal_b11c00963d3504ad40151f7c82f62cca51befe7865578a2c93a495c68b645022 = $this->env->getExtension("native_profiler");
        $__internal_b11c00963d3504ad40151f7c82f62cca51befe7865578a2c93a495c68b645022->enter($__internal_b11c00963d3504ad40151f7c82f62cca51befe7865578a2c93a495c68b645022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_b11c00963d3504ad40151f7c82f62cca51befe7865578a2c93a495c68b645022->leave($__internal_b11c00963d3504ad40151f7c82f62cca51befe7865578a2c93a495c68b645022_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
