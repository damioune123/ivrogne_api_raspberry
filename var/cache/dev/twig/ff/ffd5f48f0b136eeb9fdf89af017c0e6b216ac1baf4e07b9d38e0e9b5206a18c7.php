<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_01006506eb519a4ceddcc4b685487041e1ccb1b87a48b0da12146afe0613e0af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_4d5f7915c8efdb8089baa8e36b7e399a2ce86dd461c1d9fed8e8e00a3a7e9cba = $this->env->getExtension("native_profiler");
        $__internal_4d5f7915c8efdb8089baa8e36b7e399a2ce86dd461c1d9fed8e8e00a3a7e9cba->enter($__internal_4d5f7915c8efdb8089baa8e36b7e399a2ce86dd461c1d9fed8e8e00a3a7e9cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d5f7915c8efdb8089baa8e36b7e399a2ce86dd461c1d9fed8e8e00a3a7e9cba->leave($__internal_4d5f7915c8efdb8089baa8e36b7e399a2ce86dd461c1d9fed8e8e00a3a7e9cba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4dcca634372c523415da712b39e1d630a2024032b52055e2b08f78b606f06b71 = $this->env->getExtension("native_profiler");
        $__internal_4dcca634372c523415da712b39e1d630a2024032b52055e2b08f78b606f06b71->enter($__internal_4dcca634372c523415da712b39e1d630a2024032b52055e2b08f78b606f06b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4dcca634372c523415da712b39e1d630a2024032b52055e2b08f78b606f06b71->leave($__internal_4dcca634372c523415da712b39e1d630a2024032b52055e2b08f78b606f06b71_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ae1d81567400799e03ff8fc554c0d5ff86f0c4906707d4bca414ab409c6a21a = $this->env->getExtension("native_profiler");
        $__internal_8ae1d81567400799e03ff8fc554c0d5ff86f0c4906707d4bca414ab409c6a21a->enter($__internal_8ae1d81567400799e03ff8fc554c0d5ff86f0c4906707d4bca414ab409c6a21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8ae1d81567400799e03ff8fc554c0d5ff86f0c4906707d4bca414ab409c6a21a->leave($__internal_8ae1d81567400799e03ff8fc554c0d5ff86f0c4906707d4bca414ab409c6a21a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e805ac9d4b50ace3838ec5e83ee7823ae59ca430dff980d0f306f42dd919ae22 = $this->env->getExtension("native_profiler");
        $__internal_e805ac9d4b50ace3838ec5e83ee7823ae59ca430dff980d0f306f42dd919ae22->enter($__internal_e805ac9d4b50ace3838ec5e83ee7823ae59ca430dff980d0f306f42dd919ae22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e805ac9d4b50ace3838ec5e83ee7823ae59ca430dff980d0f306f42dd919ae22->leave($__internal_e805ac9d4b50ace3838ec5e83ee7823ae59ca430dff980d0f306f42dd919ae22_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
