<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_89ee4f41d4ca53ea7d028bdc815f6144e24eff5bd29f79d1ac12baaa3c9ee2c1 extends Twig_Template
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
        $__internal_d334ea6f6ce301137b2be32831b9ee27302be80a65f2df46eeb9cd345a0ed447 = $this->env->getExtension("native_profiler");
        $__internal_d334ea6f6ce301137b2be32831b9ee27302be80a65f2df46eeb9cd345a0ed447->enter($__internal_d334ea6f6ce301137b2be32831b9ee27302be80a65f2df46eeb9cd345a0ed447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_d334ea6f6ce301137b2be32831b9ee27302be80a65f2df46eeb9cd345a0ed447->leave($__internal_d334ea6f6ce301137b2be32831b9ee27302be80a65f2df46eeb9cd345a0ed447_prof);

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
