<?php

/* ::base.html.twig */
class __TwigTemplate_ffa4c2974662aca1db719754573a422382d68f59a11dc81a2a00662bbc5e3cc1 extends Twig_Template
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
        $__internal_8f0d933a0fecf86108752a8663a75bf62c7b4a8f9ec4ec3abb994f43c3173ad4 = $this->env->getExtension("native_profiler");
        $__internal_8f0d933a0fecf86108752a8663a75bf62c7b4a8f9ec4ec3abb994f43c3173ad4->enter($__internal_8f0d933a0fecf86108752a8663a75bf62c7b4a8f9ec4ec3abb994f43c3173ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8f0d933a0fecf86108752a8663a75bf62c7b4a8f9ec4ec3abb994f43c3173ad4->leave($__internal_8f0d933a0fecf86108752a8663a75bf62c7b4a8f9ec4ec3abb994f43c3173ad4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d90fc3405c52f95d30152bffb5cabe8013f4be74c4dad57906e70bb343212ec0 = $this->env->getExtension("native_profiler");
        $__internal_d90fc3405c52f95d30152bffb5cabe8013f4be74c4dad57906e70bb343212ec0->enter($__internal_d90fc3405c52f95d30152bffb5cabe8013f4be74c4dad57906e70bb343212ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d90fc3405c52f95d30152bffb5cabe8013f4be74c4dad57906e70bb343212ec0->leave($__internal_d90fc3405c52f95d30152bffb5cabe8013f4be74c4dad57906e70bb343212ec0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dec52c9a9449c40c13d8474aae45b62ff32c30ecfb69c3e8048c3db8ac43d3ec = $this->env->getExtension("native_profiler");
        $__internal_dec52c9a9449c40c13d8474aae45b62ff32c30ecfb69c3e8048c3db8ac43d3ec->enter($__internal_dec52c9a9449c40c13d8474aae45b62ff32c30ecfb69c3e8048c3db8ac43d3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dec52c9a9449c40c13d8474aae45b62ff32c30ecfb69c3e8048c3db8ac43d3ec->leave($__internal_dec52c9a9449c40c13d8474aae45b62ff32c30ecfb69c3e8048c3db8ac43d3ec_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d26a5e72735260498ca14bb6b6dff0bfae7434285f4ab3df1ff7631f8851d88 = $this->env->getExtension("native_profiler");
        $__internal_4d26a5e72735260498ca14bb6b6dff0bfae7434285f4ab3df1ff7631f8851d88->enter($__internal_4d26a5e72735260498ca14bb6b6dff0bfae7434285f4ab3df1ff7631f8851d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4d26a5e72735260498ca14bb6b6dff0bfae7434285f4ab3df1ff7631f8851d88->leave($__internal_4d26a5e72735260498ca14bb6b6dff0bfae7434285f4ab3df1ff7631f8851d88_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_44edb91a2e1d97bb055ad21e6ddc856162f014ecdb27a989a5fc4a71af4aeed0 = $this->env->getExtension("native_profiler");
        $__internal_44edb91a2e1d97bb055ad21e6ddc856162f014ecdb27a989a5fc4a71af4aeed0->enter($__internal_44edb91a2e1d97bb055ad21e6ddc856162f014ecdb27a989a5fc4a71af4aeed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_44edb91a2e1d97bb055ad21e6ddc856162f014ecdb27a989a5fc4a71af4aeed0->leave($__internal_44edb91a2e1d97bb055ad21e6ddc856162f014ecdb27a989a5fc4a71af4aeed0_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
