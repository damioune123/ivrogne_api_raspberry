<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_6e29fdbe2560db5a6749c610bbd04d4f8607ad32c198d3f56dff7177c1b0cc5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e72971046dc072c7a6ba86a74fa4bc1a8a1e70b46d6d28188a2b3bc26238d96c = $this->env->getExtension("native_profiler");
        $__internal_e72971046dc072c7a6ba86a74fa4bc1a8a1e70b46d6d28188a2b3bc26238d96c->enter($__internal_e72971046dc072c7a6ba86a74fa4bc1a8a1e70b46d6d28188a2b3bc26238d96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e72971046dc072c7a6ba86a74fa4bc1a8a1e70b46d6d28188a2b3bc26238d96c->leave($__internal_e72971046dc072c7a6ba86a74fa4bc1a8a1e70b46d6d28188a2b3bc26238d96c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_49dfcbe12b9b8bdb8bac4987e7ebffa37ef70ce7477e395245d4491f5f40e33a = $this->env->getExtension("native_profiler");
        $__internal_49dfcbe12b9b8bdb8bac4987e7ebffa37ef70ce7477e395245d4491f5f40e33a->enter($__internal_49dfcbe12b9b8bdb8bac4987e7ebffa37ef70ce7477e395245d4491f5f40e33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_49dfcbe12b9b8bdb8bac4987e7ebffa37ef70ce7477e395245d4491f5f40e33a->leave($__internal_49dfcbe12b9b8bdb8bac4987e7ebffa37ef70ce7477e395245d4491f5f40e33a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bf1b9bc921cc8b8168549cb23925e6645e101e3bf4b4ea90c4bcaa48780e7c72 = $this->env->getExtension("native_profiler");
        $__internal_bf1b9bc921cc8b8168549cb23925e6645e101e3bf4b4ea90c4bcaa48780e7c72->enter($__internal_bf1b9bc921cc8b8168549cb23925e6645e101e3bf4b4ea90c4bcaa48780e7c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_bf1b9bc921cc8b8168549cb23925e6645e101e3bf4b4ea90c4bcaa48780e7c72->leave($__internal_bf1b9bc921cc8b8168549cb23925e6645e101e3bf4b4ea90c4bcaa48780e7c72_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_06f5f34de3e474c804bc4e26f75ad0c95eb04cdafdc0fb10637466cc1dd1ab4b = $this->env->getExtension("native_profiler");
        $__internal_06f5f34de3e474c804bc4e26f75ad0c95eb04cdafdc0fb10637466cc1dd1ab4b->enter($__internal_06f5f34de3e474c804bc4e26f75ad0c95eb04cdafdc0fb10637466cc1dd1ab4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_06f5f34de3e474c804bc4e26f75ad0c95eb04cdafdc0fb10637466cc1dd1ab4b->leave($__internal_06f5f34de3e474c804bc4e26f75ad0c95eb04cdafdc0fb10637466cc1dd1ab4b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
