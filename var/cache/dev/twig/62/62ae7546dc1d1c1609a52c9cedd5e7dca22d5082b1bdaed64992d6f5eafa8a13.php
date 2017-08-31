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
        $__internal_3791e245ce0857b7a5a8c2d858d877d22f2e3d47bf0314a8e8c557ffd1c52259 = $this->env->getExtension("native_profiler");
        $__internal_3791e245ce0857b7a5a8c2d858d877d22f2e3d47bf0314a8e8c557ffd1c52259->enter($__internal_3791e245ce0857b7a5a8c2d858d877d22f2e3d47bf0314a8e8c557ffd1c52259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3791e245ce0857b7a5a8c2d858d877d22f2e3d47bf0314a8e8c557ffd1c52259->leave($__internal_3791e245ce0857b7a5a8c2d858d877d22f2e3d47bf0314a8e8c557ffd1c52259_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6ea5f0bb4bdf16247d44c5cc6e4acda205d0b3dd1f45f8cb111cac64a4d95b9 = $this->env->getExtension("native_profiler");
        $__internal_d6ea5f0bb4bdf16247d44c5cc6e4acda205d0b3dd1f45f8cb111cac64a4d95b9->enter($__internal_d6ea5f0bb4bdf16247d44c5cc6e4acda205d0b3dd1f45f8cb111cac64a4d95b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d6ea5f0bb4bdf16247d44c5cc6e4acda205d0b3dd1f45f8cb111cac64a4d95b9->leave($__internal_d6ea5f0bb4bdf16247d44c5cc6e4acda205d0b3dd1f45f8cb111cac64a4d95b9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3962210e13193ac6a065bb2d0d34f88d0f14ca4f39bb567f961f0d7d9525c7af = $this->env->getExtension("native_profiler");
        $__internal_3962210e13193ac6a065bb2d0d34f88d0f14ca4f39bb567f961f0d7d9525c7af->enter($__internal_3962210e13193ac6a065bb2d0d34f88d0f14ca4f39bb567f961f0d7d9525c7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3962210e13193ac6a065bb2d0d34f88d0f14ca4f39bb567f961f0d7d9525c7af->leave($__internal_3962210e13193ac6a065bb2d0d34f88d0f14ca4f39bb567f961f0d7d9525c7af_prof);

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
