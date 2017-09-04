<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9771c416eed2fbae2b724e675294ae1e9bd873c6b7e6f2a301f495bb3a7dde13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_d1b1248d5436c65bd2df4dd7b8ae39e6c908b2de37548e107bc8a464bb4aa490 = $this->env->getExtension("native_profiler");
        $__internal_d1b1248d5436c65bd2df4dd7b8ae39e6c908b2de37548e107bc8a464bb4aa490->enter($__internal_d1b1248d5436c65bd2df4dd7b8ae39e6c908b2de37548e107bc8a464bb4aa490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1b1248d5436c65bd2df4dd7b8ae39e6c908b2de37548e107bc8a464bb4aa490->leave($__internal_d1b1248d5436c65bd2df4dd7b8ae39e6c908b2de37548e107bc8a464bb4aa490_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1cc51a179e0eef50f4135862cbce0ad56be585e51da09244072c7bf826887494 = $this->env->getExtension("native_profiler");
        $__internal_1cc51a179e0eef50f4135862cbce0ad56be585e51da09244072c7bf826887494->enter($__internal_1cc51a179e0eef50f4135862cbce0ad56be585e51da09244072c7bf826887494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1cc51a179e0eef50f4135862cbce0ad56be585e51da09244072c7bf826887494->leave($__internal_1cc51a179e0eef50f4135862cbce0ad56be585e51da09244072c7bf826887494_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_512667420a0cef48f05b2ca771089edf6020db13a82853533afd473ca518e332 = $this->env->getExtension("native_profiler");
        $__internal_512667420a0cef48f05b2ca771089edf6020db13a82853533afd473ca518e332->enter($__internal_512667420a0cef48f05b2ca771089edf6020db13a82853533afd473ca518e332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_512667420a0cef48f05b2ca771089edf6020db13a82853533afd473ca518e332->leave($__internal_512667420a0cef48f05b2ca771089edf6020db13a82853533afd473ca518e332_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_83023b3305a01503c7e1147077d3800f78a3425b7ffe7150095600a5d74fa8af = $this->env->getExtension("native_profiler");
        $__internal_83023b3305a01503c7e1147077d3800f78a3425b7ffe7150095600a5d74fa8af->enter($__internal_83023b3305a01503c7e1147077d3800f78a3425b7ffe7150095600a5d74fa8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_83023b3305a01503c7e1147077d3800f78a3425b7ffe7150095600a5d74fa8af->leave($__internal_83023b3305a01503c7e1147077d3800f78a3425b7ffe7150095600a5d74fa8af_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
