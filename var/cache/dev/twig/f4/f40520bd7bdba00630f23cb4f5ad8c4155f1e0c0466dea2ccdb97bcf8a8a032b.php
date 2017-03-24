<?php

/* base.html.twig */
class __TwigTemplate_95283e39e937724ec8104129f67bcd531ff4a2233c086fd131da99f5bc22b823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_386ad19becef066b9597887e5f65f5ae538192b21e17963a367ebc97e734fcfe = $this->env->getExtension("native_profiler");
        $__internal_386ad19becef066b9597887e5f65f5ae538192b21e17963a367ebc97e734fcfe->enter($__internal_386ad19becef066b9597887e5f65f5ae538192b21e17963a367ebc97e734fcfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_386ad19becef066b9597887e5f65f5ae538192b21e17963a367ebc97e734fcfe->leave($__internal_386ad19becef066b9597887e5f65f5ae538192b21e17963a367ebc97e734fcfe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb2789f7b4920d2b2cdcd48b83b77d4263cb5cc387c15d86fc46e506ffd4bcf2 = $this->env->getExtension("native_profiler");
        $__internal_cb2789f7b4920d2b2cdcd48b83b77d4263cb5cc387c15d86fc46e506ffd4bcf2->enter($__internal_cb2789f7b4920d2b2cdcd48b83b77d4263cb5cc387c15d86fc46e506ffd4bcf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cb2789f7b4920d2b2cdcd48b83b77d4263cb5cc387c15d86fc46e506ffd4bcf2->leave($__internal_cb2789f7b4920d2b2cdcd48b83b77d4263cb5cc387c15d86fc46e506ffd4bcf2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5879e8488941cfcb70f626fc086177f3242d4cdbce54e8c894a300e3f091ac69 = $this->env->getExtension("native_profiler");
        $__internal_5879e8488941cfcb70f626fc086177f3242d4cdbce54e8c894a300e3f091ac69->enter($__internal_5879e8488941cfcb70f626fc086177f3242d4cdbce54e8c894a300e3f091ac69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5879e8488941cfcb70f626fc086177f3242d4cdbce54e8c894a300e3f091ac69->leave($__internal_5879e8488941cfcb70f626fc086177f3242d4cdbce54e8c894a300e3f091ac69_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_da30ff0a5db9b2e5764421f04d31573d130eb896e10ff7eeed5cfc94f8ca7be1 = $this->env->getExtension("native_profiler");
        $__internal_da30ff0a5db9b2e5764421f04d31573d130eb896e10ff7eeed5cfc94f8ca7be1->enter($__internal_da30ff0a5db9b2e5764421f04d31573d130eb896e10ff7eeed5cfc94f8ca7be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_da30ff0a5db9b2e5764421f04d31573d130eb896e10ff7eeed5cfc94f8ca7be1->leave($__internal_da30ff0a5db9b2e5764421f04d31573d130eb896e10ff7eeed5cfc94f8ca7be1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e07696b6bff2a01117dd547269d42ad705fa58122185ba3e2be8f34536b3b91 = $this->env->getExtension("native_profiler");
        $__internal_2e07696b6bff2a01117dd547269d42ad705fa58122185ba3e2be8f34536b3b91->enter($__internal_2e07696b6bff2a01117dd547269d42ad705fa58122185ba3e2be8f34536b3b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2e07696b6bff2a01117dd547269d42ad705fa58122185ba3e2be8f34536b3b91->leave($__internal_2e07696b6bff2a01117dd547269d42ad705fa58122185ba3e2be8f34536b3b91_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
