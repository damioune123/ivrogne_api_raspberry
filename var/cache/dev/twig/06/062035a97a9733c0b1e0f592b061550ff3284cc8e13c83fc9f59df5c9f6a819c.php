<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_9a89bf8a63d2ca40d21e80106d75db041bc36c4817109ea4ccbfce40760e005f extends Twig_Template
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
        $__internal_f737605b2ec214a7c530e4a3bb8d7682e241e45d51512f5c1c3ee3abb12ad698 = $this->env->getExtension("native_profiler");
        $__internal_f737605b2ec214a7c530e4a3bb8d7682e241e45d51512f5c1c3ee3abb12ad698->enter($__internal_f737605b2ec214a7c530e4a3bb8d7682e241e45d51512f5c1c3ee3abb12ad698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_f737605b2ec214a7c530e4a3bb8d7682e241e45d51512f5c1c3ee3abb12ad698->leave($__internal_f737605b2ec214a7c530e4a3bb8d7682e241e45d51512f5c1c3ee3abb12ad698_prof);

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
