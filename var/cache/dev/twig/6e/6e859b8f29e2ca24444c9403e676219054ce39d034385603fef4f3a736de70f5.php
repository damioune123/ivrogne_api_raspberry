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
        $__internal_8eaa1f861ad82b59550330114028ca6f0df1bf007f5b9752fa8c08bfb25297b7 = $this->env->getExtension("native_profiler");
        $__internal_8eaa1f861ad82b59550330114028ca6f0df1bf007f5b9752fa8c08bfb25297b7->enter($__internal_8eaa1f861ad82b59550330114028ca6f0df1bf007f5b9752fa8c08bfb25297b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8eaa1f861ad82b59550330114028ca6f0df1bf007f5b9752fa8c08bfb25297b7->leave($__internal_8eaa1f861ad82b59550330114028ca6f0df1bf007f5b9752fa8c08bfb25297b7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8ff6eacdf2be58d85552f79027b5ab9d3d48ae209419e5e9c67025c90849524 = $this->env->getExtension("native_profiler");
        $__internal_a8ff6eacdf2be58d85552f79027b5ab9d3d48ae209419e5e9c67025c90849524->enter($__internal_a8ff6eacdf2be58d85552f79027b5ab9d3d48ae209419e5e9c67025c90849524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a8ff6eacdf2be58d85552f79027b5ab9d3d48ae209419e5e9c67025c90849524->leave($__internal_a8ff6eacdf2be58d85552f79027b5ab9d3d48ae209419e5e9c67025c90849524_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_09dfcc648d4606d9df72d5668b2ed82d8fbe5253144a3b6ee49a4282055dde57 = $this->env->getExtension("native_profiler");
        $__internal_09dfcc648d4606d9df72d5668b2ed82d8fbe5253144a3b6ee49a4282055dde57->enter($__internal_09dfcc648d4606d9df72d5668b2ed82d8fbe5253144a3b6ee49a4282055dde57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_09dfcc648d4606d9df72d5668b2ed82d8fbe5253144a3b6ee49a4282055dde57->leave($__internal_09dfcc648d4606d9df72d5668b2ed82d8fbe5253144a3b6ee49a4282055dde57_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2e86940d14d27d3e0abdec447c8dcf045d73d334756fd4e89e3679abb34fc29 = $this->env->getExtension("native_profiler");
        $__internal_b2e86940d14d27d3e0abdec447c8dcf045d73d334756fd4e89e3679abb34fc29->enter($__internal_b2e86940d14d27d3e0abdec447c8dcf045d73d334756fd4e89e3679abb34fc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b2e86940d14d27d3e0abdec447c8dcf045d73d334756fd4e89e3679abb34fc29->leave($__internal_b2e86940d14d27d3e0abdec447c8dcf045d73d334756fd4e89e3679abb34fc29_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ca737759d29945b26ad56c799a31ee83599f1842fda707a2beaaf5ed13a5b197 = $this->env->getExtension("native_profiler");
        $__internal_ca737759d29945b26ad56c799a31ee83599f1842fda707a2beaaf5ed13a5b197->enter($__internal_ca737759d29945b26ad56c799a31ee83599f1842fda707a2beaaf5ed13a5b197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ca737759d29945b26ad56c799a31ee83599f1842fda707a2beaaf5ed13a5b197->leave($__internal_ca737759d29945b26ad56c799a31ee83599f1842fda707a2beaaf5ed13a5b197_prof);

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
