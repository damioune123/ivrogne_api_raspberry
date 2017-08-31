<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_d3b56e45fb61f2446efaea1aec2e75000db077bdba39bba38ddf59d047a2737d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resource.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebf949d6a1b961042c663ae1f60645640193cbe525f0dc092b115486dc9c1865 = $this->env->getExtension("native_profiler");
        $__internal_ebf949d6a1b961042c663ae1f60645640193cbe525f0dc092b115486dc9c1865->enter($__internal_ebf949d6a1b961042c663ae1f60645640193cbe525f0dc092b115486dc9c1865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebf949d6a1b961042c663ae1f60645640193cbe525f0dc092b115486dc9c1865->leave($__internal_ebf949d6a1b961042c663ae1f60645640193cbe525f0dc092b115486dc9c1865_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d5182aa90923e5da5efda5b0aae0845b4a1476c6dc0c0bb0337c550622525962 = $this->env->getExtension("native_profiler");
        $__internal_d5182aa90923e5da5efda5b0aae0845b4a1476c6dc0c0bb0337c550622525962->enter($__internal_d5182aa90923e5da5efda5b0aae0845b4a1476c6dc0c0bb0337c550622525962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_d5182aa90923e5da5efda5b0aae0845b4a1476c6dc0c0bb0337c550622525962->leave($__internal_d5182aa90923e5da5efda5b0aae0845b4a1476c6dc0c0bb0337c550622525962_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "NelmioApiDocBundle::layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <li class="resource">*/
/*         <ul class="endpoints">*/
/*             <li class="endpoint">*/
/*                 <ul class="operations">*/
/*                     {% include 'NelmioApiDocBundle::method.html.twig' %}*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </li>*/
/* {% endblock content %}*/
/* */
