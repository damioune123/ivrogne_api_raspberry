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
        $__internal_d52d5256d31e06823e60186ebd9253f384803c7c511ae48eebc85b5fc6ce93a9 = $this->env->getExtension("native_profiler");
        $__internal_d52d5256d31e06823e60186ebd9253f384803c7c511ae48eebc85b5fc6ce93a9->enter($__internal_d52d5256d31e06823e60186ebd9253f384803c7c511ae48eebc85b5fc6ce93a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d52d5256d31e06823e60186ebd9253f384803c7c511ae48eebc85b5fc6ce93a9->leave($__internal_d52d5256d31e06823e60186ebd9253f384803c7c511ae48eebc85b5fc6ce93a9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1fc4c566347aa6e33404ed95cc206a3a75ea932f46366c41ebfd152766a9dc6e = $this->env->getExtension("native_profiler");
        $__internal_1fc4c566347aa6e33404ed95cc206a3a75ea932f46366c41ebfd152766a9dc6e->enter($__internal_1fc4c566347aa6e33404ed95cc206a3a75ea932f46366c41ebfd152766a9dc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_1fc4c566347aa6e33404ed95cc206a3a75ea932f46366c41ebfd152766a9dc6e->leave($__internal_1fc4c566347aa6e33404ed95cc206a3a75ea932f46366c41ebfd152766a9dc6e_prof);

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
