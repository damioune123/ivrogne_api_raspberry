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
        $__internal_d0675f79baee61d512fb613ba2552c28b63433d7cc4002f47a054ea51ca1a578 = $this->env->getExtension("native_profiler");
        $__internal_d0675f79baee61d512fb613ba2552c28b63433d7cc4002f47a054ea51ca1a578->enter($__internal_d0675f79baee61d512fb613ba2552c28b63433d7cc4002f47a054ea51ca1a578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0675f79baee61d512fb613ba2552c28b63433d7cc4002f47a054ea51ca1a578->leave($__internal_d0675f79baee61d512fb613ba2552c28b63433d7cc4002f47a054ea51ca1a578_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2ec7def07cac297a62cb425cbbbac229acda8d71fcacc778e5f5088e2c14faf5 = $this->env->getExtension("native_profiler");
        $__internal_2ec7def07cac297a62cb425cbbbac229acda8d71fcacc778e5f5088e2c14faf5->enter($__internal_2ec7def07cac297a62cb425cbbbac229acda8d71fcacc778e5f5088e2c14faf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2ec7def07cac297a62cb425cbbbac229acda8d71fcacc778e5f5088e2c14faf5->leave($__internal_2ec7def07cac297a62cb425cbbbac229acda8d71fcacc778e5f5088e2c14faf5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0685c5890c38ebe3061d95dd7ea7931ddf75892e15ee09aa882430e72f765fa9 = $this->env->getExtension("native_profiler");
        $__internal_0685c5890c38ebe3061d95dd7ea7931ddf75892e15ee09aa882430e72f765fa9->enter($__internal_0685c5890c38ebe3061d95dd7ea7931ddf75892e15ee09aa882430e72f765fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0685c5890c38ebe3061d95dd7ea7931ddf75892e15ee09aa882430e72f765fa9->leave($__internal_0685c5890c38ebe3061d95dd7ea7931ddf75892e15ee09aa882430e72f765fa9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3050ed08dd2be4cd7cdc238167c3d49736a684aed9c283b11c1475174794b0de = $this->env->getExtension("native_profiler");
        $__internal_3050ed08dd2be4cd7cdc238167c3d49736a684aed9c283b11c1475174794b0de->enter($__internal_3050ed08dd2be4cd7cdc238167c3d49736a684aed9c283b11c1475174794b0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3050ed08dd2be4cd7cdc238167c3d49736a684aed9c283b11c1475174794b0de->leave($__internal_3050ed08dd2be4cd7cdc238167c3d49736a684aed9c283b11c1475174794b0de_prof);

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
