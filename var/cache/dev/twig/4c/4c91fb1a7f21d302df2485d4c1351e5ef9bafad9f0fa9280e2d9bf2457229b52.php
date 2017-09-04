<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_f6ded0e7ac6072705ba98fef48e33efddca44e4684b4da7b004922d77b49150d extends Twig_Template
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
        $__internal_13ecc8daf9a0d81b692b91cc37ce2d18bebba33ec41a9411f97b63a58f5e02ea = $this->env->getExtension("native_profiler");
        $__internal_13ecc8daf9a0d81b692b91cc37ce2d18bebba33ec41a9411f97b63a58f5e02ea->enter($__internal_13ecc8daf9a0d81b692b91cc37ce2d18bebba33ec41a9411f97b63a58f5e02ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_13ecc8daf9a0d81b692b91cc37ce2d18bebba33ec41a9411f97b63a58f5e02ea->leave($__internal_13ecc8daf9a0d81b692b91cc37ce2d18bebba33ec41a9411f97b63a58f5e02ea_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
