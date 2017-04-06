<?php

/* base.html.twig */
class __TwigTemplate_53170615c7389d345fe18a8551ec7bdaf93f6f7331e3d0dac0dff0c41acfb4d2 extends Twig_Template
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
        $__internal_68f8bdc46c13035b6f6cfc820df84bc3dd44d25e75a1eca454c0b8cc34312869 = $this->env->getExtension("native_profiler");
        $__internal_68f8bdc46c13035b6f6cfc820df84bc3dd44d25e75a1eca454c0b8cc34312869->enter($__internal_68f8bdc46c13035b6f6cfc820df84bc3dd44d25e75a1eca454c0b8cc34312869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_68f8bdc46c13035b6f6cfc820df84bc3dd44d25e75a1eca454c0b8cc34312869->leave($__internal_68f8bdc46c13035b6f6cfc820df84bc3dd44d25e75a1eca454c0b8cc34312869_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_af4dfcb1cf62de840ebafd8e16b94573b5d7dacf7588fce6ae72e7c880ba1c17 = $this->env->getExtension("native_profiler");
        $__internal_af4dfcb1cf62de840ebafd8e16b94573b5d7dacf7588fce6ae72e7c880ba1c17->enter($__internal_af4dfcb1cf62de840ebafd8e16b94573b5d7dacf7588fce6ae72e7c880ba1c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_af4dfcb1cf62de840ebafd8e16b94573b5d7dacf7588fce6ae72e7c880ba1c17->leave($__internal_af4dfcb1cf62de840ebafd8e16b94573b5d7dacf7588fce6ae72e7c880ba1c17_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_265c3196ec736fda9240f2a1bd2cb90638afed2dde142cd214d0783c4687b185 = $this->env->getExtension("native_profiler");
        $__internal_265c3196ec736fda9240f2a1bd2cb90638afed2dde142cd214d0783c4687b185->enter($__internal_265c3196ec736fda9240f2a1bd2cb90638afed2dde142cd214d0783c4687b185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_265c3196ec736fda9240f2a1bd2cb90638afed2dde142cd214d0783c4687b185->leave($__internal_265c3196ec736fda9240f2a1bd2cb90638afed2dde142cd214d0783c4687b185_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_293a199d04aef16d802305e9d91966b782ebcf7c7ef1666d88f6ae754a82034b = $this->env->getExtension("native_profiler");
        $__internal_293a199d04aef16d802305e9d91966b782ebcf7c7ef1666d88f6ae754a82034b->enter($__internal_293a199d04aef16d802305e9d91966b782ebcf7c7ef1666d88f6ae754a82034b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_293a199d04aef16d802305e9d91966b782ebcf7c7ef1666d88f6ae754a82034b->leave($__internal_293a199d04aef16d802305e9d91966b782ebcf7c7ef1666d88f6ae754a82034b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bad92b6efa1e0cb9e346ab207adcd9735ee94c8c01ace0dac201ad392c2a3a55 = $this->env->getExtension("native_profiler");
        $__internal_bad92b6efa1e0cb9e346ab207adcd9735ee94c8c01ace0dac201ad392c2a3a55->enter($__internal_bad92b6efa1e0cb9e346ab207adcd9735ee94c8c01ace0dac201ad392c2a3a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bad92b6efa1e0cb9e346ab207adcd9735ee94c8c01ace0dac201ad392c2a3a55->leave($__internal_bad92b6efa1e0cb9e346ab207adcd9735ee94c8c01ace0dac201ad392c2a3a55_prof);

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
