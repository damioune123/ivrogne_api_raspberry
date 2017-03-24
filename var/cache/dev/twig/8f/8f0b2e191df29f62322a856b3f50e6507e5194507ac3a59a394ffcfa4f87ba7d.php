<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6d6b84d93df287d4ce5b15e2cde9d6bb9186939f1dfccc806f71160154b3fcaa extends Twig_Template
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
        $__internal_8e7d2cf39cfbf7c4bf10543c46deb38faa33a64409ca2c21c0612e50d3d0de8a = $this->env->getExtension("native_profiler");
        $__internal_8e7d2cf39cfbf7c4bf10543c46deb38faa33a64409ca2c21c0612e50d3d0de8a->enter($__internal_8e7d2cf39cfbf7c4bf10543c46deb38faa33a64409ca2c21c0612e50d3d0de8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e7d2cf39cfbf7c4bf10543c46deb38faa33a64409ca2c21c0612e50d3d0de8a->leave($__internal_8e7d2cf39cfbf7c4bf10543c46deb38faa33a64409ca2c21c0612e50d3d0de8a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_72ee2e5137aa1790e889b417a1e1aadcbf9b045f7deefa283552fb4cf26dad08 = $this->env->getExtension("native_profiler");
        $__internal_72ee2e5137aa1790e889b417a1e1aadcbf9b045f7deefa283552fb4cf26dad08->enter($__internal_72ee2e5137aa1790e889b417a1e1aadcbf9b045f7deefa283552fb4cf26dad08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_72ee2e5137aa1790e889b417a1e1aadcbf9b045f7deefa283552fb4cf26dad08->leave($__internal_72ee2e5137aa1790e889b417a1e1aadcbf9b045f7deefa283552fb4cf26dad08_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea3cd5d5143c68f4606ff37193adcff43d2a990120d1a70ab6b438fd75ba1e59 = $this->env->getExtension("native_profiler");
        $__internal_ea3cd5d5143c68f4606ff37193adcff43d2a990120d1a70ab6b438fd75ba1e59->enter($__internal_ea3cd5d5143c68f4606ff37193adcff43d2a990120d1a70ab6b438fd75ba1e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ea3cd5d5143c68f4606ff37193adcff43d2a990120d1a70ab6b438fd75ba1e59->leave($__internal_ea3cd5d5143c68f4606ff37193adcff43d2a990120d1a70ab6b438fd75ba1e59_prof);

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
