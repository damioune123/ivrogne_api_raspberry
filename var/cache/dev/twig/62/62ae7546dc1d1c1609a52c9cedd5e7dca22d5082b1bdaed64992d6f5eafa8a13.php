<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_cc6e7c894636430abf81d5cbf1da4a5fe693348701ab12aaca62a922be5b1612 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a63c7896fc6199676b1b487e42952acad4c953909a6ee1ceeebc517f7a1058cd = $this->env->getExtension("native_profiler");
        $__internal_a63c7896fc6199676b1b487e42952acad4c953909a6ee1ceeebc517f7a1058cd->enter($__internal_a63c7896fc6199676b1b487e42952acad4c953909a6ee1ceeebc517f7a1058cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a63c7896fc6199676b1b487e42952acad4c953909a6ee1ceeebc517f7a1058cd->leave($__internal_a63c7896fc6199676b1b487e42952acad4c953909a6ee1ceeebc517f7a1058cd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3496584240ab827bf9ed3de4ffbc010aaf94d25e2565cfb0a76536f3ec1d5a0 = $this->env->getExtension("native_profiler");
        $__internal_d3496584240ab827bf9ed3de4ffbc010aaf94d25e2565cfb0a76536f3ec1d5a0->enter($__internal_d3496584240ab827bf9ed3de4ffbc010aaf94d25e2565cfb0a76536f3ec1d5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d3496584240ab827bf9ed3de4ffbc010aaf94d25e2565cfb0a76536f3ec1d5a0->leave($__internal_d3496584240ab827bf9ed3de4ffbc010aaf94d25e2565cfb0a76536f3ec1d5a0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_34a2d39b607bf7a239ed78afe982d2fcbadb95b4c4b6ec8c55a0621df1361df1 = $this->env->getExtension("native_profiler");
        $__internal_34a2d39b607bf7a239ed78afe982d2fcbadb95b4c4b6ec8c55a0621df1361df1->enter($__internal_34a2d39b607bf7a239ed78afe982d2fcbadb95b4c4b6ec8c55a0621df1361df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_34a2d39b607bf7a239ed78afe982d2fcbadb95b4c4b6ec8c55a0621df1361df1->leave($__internal_34a2d39b607bf7a239ed78afe982d2fcbadb95b4c4b6ec8c55a0621df1361df1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
