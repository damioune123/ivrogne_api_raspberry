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
        $__internal_8b52cb8dfd8d52c787986a11d75edbdb7b6dfb97122c893bfbd8eb322c0236ce = $this->env->getExtension("native_profiler");
        $__internal_8b52cb8dfd8d52c787986a11d75edbdb7b6dfb97122c893bfbd8eb322c0236ce->enter($__internal_8b52cb8dfd8d52c787986a11d75edbdb7b6dfb97122c893bfbd8eb322c0236ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b52cb8dfd8d52c787986a11d75edbdb7b6dfb97122c893bfbd8eb322c0236ce->leave($__internal_8b52cb8dfd8d52c787986a11d75edbdb7b6dfb97122c893bfbd8eb322c0236ce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cdf63dd475f40979c4b4a5e5ccb0be9a89ce606122a4a043203450f6dd6dca12 = $this->env->getExtension("native_profiler");
        $__internal_cdf63dd475f40979c4b4a5e5ccb0be9a89ce606122a4a043203450f6dd6dca12->enter($__internal_cdf63dd475f40979c4b4a5e5ccb0be9a89ce606122a4a043203450f6dd6dca12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cdf63dd475f40979c4b4a5e5ccb0be9a89ce606122a4a043203450f6dd6dca12->leave($__internal_cdf63dd475f40979c4b4a5e5ccb0be9a89ce606122a4a043203450f6dd6dca12_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e85304e8e9a239f9f55a2ad6c8cea88eef71cd358b407e3d8d4a105f3c5d9232 = $this->env->getExtension("native_profiler");
        $__internal_e85304e8e9a239f9f55a2ad6c8cea88eef71cd358b407e3d8d4a105f3c5d9232->enter($__internal_e85304e8e9a239f9f55a2ad6c8cea88eef71cd358b407e3d8d4a105f3c5d9232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e85304e8e9a239f9f55a2ad6c8cea88eef71cd358b407e3d8d4a105f3c5d9232->leave($__internal_e85304e8e9a239f9f55a2ad6c8cea88eef71cd358b407e3d8d4a105f3c5d9232_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_becb289969a784529307323d98b34f40f605022534ae51131bfe92ddf94dec7c = $this->env->getExtension("native_profiler");
        $__internal_becb289969a784529307323d98b34f40f605022534ae51131bfe92ddf94dec7c->enter($__internal_becb289969a784529307323d98b34f40f605022534ae51131bfe92ddf94dec7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_becb289969a784529307323d98b34f40f605022534ae51131bfe92ddf94dec7c->leave($__internal_becb289969a784529307323d98b34f40f605022534ae51131bfe92ddf94dec7c_prof);

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
