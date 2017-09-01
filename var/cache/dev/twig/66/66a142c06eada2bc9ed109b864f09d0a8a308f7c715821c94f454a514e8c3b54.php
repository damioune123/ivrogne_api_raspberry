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
        $__internal_a94368aab080d37f04f5ba8761fac170335026ad4d9f41f8402cdfa6902671ce = $this->env->getExtension("native_profiler");
        $__internal_a94368aab080d37f04f5ba8761fac170335026ad4d9f41f8402cdfa6902671ce->enter($__internal_a94368aab080d37f04f5ba8761fac170335026ad4d9f41f8402cdfa6902671ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a94368aab080d37f04f5ba8761fac170335026ad4d9f41f8402cdfa6902671ce->leave($__internal_a94368aab080d37f04f5ba8761fac170335026ad4d9f41f8402cdfa6902671ce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_423fc41a08739510fa014d2fbe7ba1143faa670514639a7497e90f1c80801755 = $this->env->getExtension("native_profiler");
        $__internal_423fc41a08739510fa014d2fbe7ba1143faa670514639a7497e90f1c80801755->enter($__internal_423fc41a08739510fa014d2fbe7ba1143faa670514639a7497e90f1c80801755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_423fc41a08739510fa014d2fbe7ba1143faa670514639a7497e90f1c80801755->leave($__internal_423fc41a08739510fa014d2fbe7ba1143faa670514639a7497e90f1c80801755_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b21d414ad4a38565d45aea6c54fb70f7fabf6f174c2494498f9b57d50f835f6 = $this->env->getExtension("native_profiler");
        $__internal_2b21d414ad4a38565d45aea6c54fb70f7fabf6f174c2494498f9b57d50f835f6->enter($__internal_2b21d414ad4a38565d45aea6c54fb70f7fabf6f174c2494498f9b57d50f835f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2b21d414ad4a38565d45aea6c54fb70f7fabf6f174c2494498f9b57d50f835f6->leave($__internal_2b21d414ad4a38565d45aea6c54fb70f7fabf6f174c2494498f9b57d50f835f6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c595ae7209250e15ada771091bf84b309705b2404edaa5d9d06d3edd2f4e4d15 = $this->env->getExtension("native_profiler");
        $__internal_c595ae7209250e15ada771091bf84b309705b2404edaa5d9d06d3edd2f4e4d15->enter($__internal_c595ae7209250e15ada771091bf84b309705b2404edaa5d9d06d3edd2f4e4d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c595ae7209250e15ada771091bf84b309705b2404edaa5d9d06d3edd2f4e4d15->leave($__internal_c595ae7209250e15ada771091bf84b309705b2404edaa5d9d06d3edd2f4e4d15_prof);

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
