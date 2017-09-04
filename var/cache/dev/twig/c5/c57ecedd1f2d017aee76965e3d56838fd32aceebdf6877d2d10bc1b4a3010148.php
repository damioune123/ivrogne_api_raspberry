<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_fb04d8f829ef7cb826a574d1c49b941828a42e7fa2cf496ae5e855207b1c9fa9 extends Twig_Template
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
        $__internal_7313658f6c9a2a5a1fb2213a0ca952a7263b3b3aa7c7c57a3e50d376b1c852f7 = $this->env->getExtension("native_profiler");
        $__internal_7313658f6c9a2a5a1fb2213a0ca952a7263b3b3aa7c7c57a3e50d376b1c852f7->enter($__internal_7313658f6c9a2a5a1fb2213a0ca952a7263b3b3aa7c7c57a3e50d376b1c852f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7313658f6c9a2a5a1fb2213a0ca952a7263b3b3aa7c7c57a3e50d376b1c852f7->leave($__internal_7313658f6c9a2a5a1fb2213a0ca952a7263b3b3aa7c7c57a3e50d376b1c852f7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b7623c54ae3cf8f3f2e2a2a37bbbf985051310f973986a138e97c0ff9e14a1bb = $this->env->getExtension("native_profiler");
        $__internal_b7623c54ae3cf8f3f2e2a2a37bbbf985051310f973986a138e97c0ff9e14a1bb->enter($__internal_b7623c54ae3cf8f3f2e2a2a37bbbf985051310f973986a138e97c0ff9e14a1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b7623c54ae3cf8f3f2e2a2a37bbbf985051310f973986a138e97c0ff9e14a1bb->leave($__internal_b7623c54ae3cf8f3f2e2a2a37bbbf985051310f973986a138e97c0ff9e14a1bb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_064d6dd44257b2e781214d2009e1441058c383b1ba81ddbb7ff6c7c8f036c445 = $this->env->getExtension("native_profiler");
        $__internal_064d6dd44257b2e781214d2009e1441058c383b1ba81ddbb7ff6c7c8f036c445->enter($__internal_064d6dd44257b2e781214d2009e1441058c383b1ba81ddbb7ff6c7c8f036c445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_064d6dd44257b2e781214d2009e1441058c383b1ba81ddbb7ff6c7c8f036c445->leave($__internal_064d6dd44257b2e781214d2009e1441058c383b1ba81ddbb7ff6c7c8f036c445_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1423e8b51644cbb94acdc5569e009adef8608a2bc006c71f8fbf17669d79b798 = $this->env->getExtension("native_profiler");
        $__internal_1423e8b51644cbb94acdc5569e009adef8608a2bc006c71f8fbf17669d79b798->enter($__internal_1423e8b51644cbb94acdc5569e009adef8608a2bc006c71f8fbf17669d79b798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1423e8b51644cbb94acdc5569e009adef8608a2bc006c71f8fbf17669d79b798->leave($__internal_1423e8b51644cbb94acdc5569e009adef8608a2bc006c71f8fbf17669d79b798_prof);

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
