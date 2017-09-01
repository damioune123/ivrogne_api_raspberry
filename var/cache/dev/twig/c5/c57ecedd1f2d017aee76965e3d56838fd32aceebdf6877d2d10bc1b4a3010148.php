<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fb04d8f829ef7cb826a574d1c49b941828a42e7fa2cf496ae5e855207b1c9fa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1c2bdec070cd543c7300de76a5b30feb101d15263832d7283a56bb3c2b7e9b8 = $this->env->getExtension("native_profiler");
        $__internal_b1c2bdec070cd543c7300de76a5b30feb101d15263832d7283a56bb3c2b7e9b8->enter($__internal_b1c2bdec070cd543c7300de76a5b30feb101d15263832d7283a56bb3c2b7e9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1c2bdec070cd543c7300de76a5b30feb101d15263832d7283a56bb3c2b7e9b8->leave($__internal_b1c2bdec070cd543c7300de76a5b30feb101d15263832d7283a56bb3c2b7e9b8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3364dae723150ba6016d5a9c491f02e3237f399aabaf61478ce6a246b572adcf = $this->env->getExtension("native_profiler");
        $__internal_3364dae723150ba6016d5a9c491f02e3237f399aabaf61478ce6a246b572adcf->enter($__internal_3364dae723150ba6016d5a9c491f02e3237f399aabaf61478ce6a246b572adcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3364dae723150ba6016d5a9c491f02e3237f399aabaf61478ce6a246b572adcf->leave($__internal_3364dae723150ba6016d5a9c491f02e3237f399aabaf61478ce6a246b572adcf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2b40eaead55e31309f3fd85722970f62c9aa3833b105d028ce4c055ae90d219b = $this->env->getExtension("native_profiler");
        $__internal_2b40eaead55e31309f3fd85722970f62c9aa3833b105d028ce4c055ae90d219b->enter($__internal_2b40eaead55e31309f3fd85722970f62c9aa3833b105d028ce4c055ae90d219b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2b40eaead55e31309f3fd85722970f62c9aa3833b105d028ce4c055ae90d219b->leave($__internal_2b40eaead55e31309f3fd85722970f62c9aa3833b105d028ce4c055ae90d219b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b016b9614a8b20bc46d2d75d132b71ae93e1c0b222eaa710ec9d382dbc0f1b80 = $this->env->getExtension("native_profiler");
        $__internal_b016b9614a8b20bc46d2d75d132b71ae93e1c0b222eaa710ec9d382dbc0f1b80->enter($__internal_b016b9614a8b20bc46d2d75d132b71ae93e1c0b222eaa710ec9d382dbc0f1b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b016b9614a8b20bc46d2d75d132b71ae93e1c0b222eaa710ec9d382dbc0f1b80->leave($__internal_b016b9614a8b20bc46d2d75d132b71ae93e1c0b222eaa710ec9d382dbc0f1b80_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
