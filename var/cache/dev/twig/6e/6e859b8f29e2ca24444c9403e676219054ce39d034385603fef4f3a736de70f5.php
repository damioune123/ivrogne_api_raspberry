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
        $__internal_ef35893692aa81764f1385b1e83d513b8d8885596c730d78f90648a87aa02b14 = $this->env->getExtension("native_profiler");
        $__internal_ef35893692aa81764f1385b1e83d513b8d8885596c730d78f90648a87aa02b14->enter($__internal_ef35893692aa81764f1385b1e83d513b8d8885596c730d78f90648a87aa02b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_ef35893692aa81764f1385b1e83d513b8d8885596c730d78f90648a87aa02b14->leave($__internal_ef35893692aa81764f1385b1e83d513b8d8885596c730d78f90648a87aa02b14_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9cf9ba1489b53247efc4e4b725362b14e7b200262153aebd112f7ff357716d48 = $this->env->getExtension("native_profiler");
        $__internal_9cf9ba1489b53247efc4e4b725362b14e7b200262153aebd112f7ff357716d48->enter($__internal_9cf9ba1489b53247efc4e4b725362b14e7b200262153aebd112f7ff357716d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9cf9ba1489b53247efc4e4b725362b14e7b200262153aebd112f7ff357716d48->leave($__internal_9cf9ba1489b53247efc4e4b725362b14e7b200262153aebd112f7ff357716d48_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_26c2e51dbd96efab24e63a6cad989baa778dfdc7898f5b4634dbeb6dadba228a = $this->env->getExtension("native_profiler");
        $__internal_26c2e51dbd96efab24e63a6cad989baa778dfdc7898f5b4634dbeb6dadba228a->enter($__internal_26c2e51dbd96efab24e63a6cad989baa778dfdc7898f5b4634dbeb6dadba228a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_26c2e51dbd96efab24e63a6cad989baa778dfdc7898f5b4634dbeb6dadba228a->leave($__internal_26c2e51dbd96efab24e63a6cad989baa778dfdc7898f5b4634dbeb6dadba228a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e40f53956e8e9b8c3ea4a1e6b700a67f401f5e021e3d648120a56bed32a36ee = $this->env->getExtension("native_profiler");
        $__internal_3e40f53956e8e9b8c3ea4a1e6b700a67f401f5e021e3d648120a56bed32a36ee->enter($__internal_3e40f53956e8e9b8c3ea4a1e6b700a67f401f5e021e3d648120a56bed32a36ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3e40f53956e8e9b8c3ea4a1e6b700a67f401f5e021e3d648120a56bed32a36ee->leave($__internal_3e40f53956e8e9b8c3ea4a1e6b700a67f401f5e021e3d648120a56bed32a36ee_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f4d219293cc93affb657436fc961c8dd04f65dd29145ccdc9b0e8ca5d683c145 = $this->env->getExtension("native_profiler");
        $__internal_f4d219293cc93affb657436fc961c8dd04f65dd29145ccdc9b0e8ca5d683c145->enter($__internal_f4d219293cc93affb657436fc961c8dd04f65dd29145ccdc9b0e8ca5d683c145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f4d219293cc93affb657436fc961c8dd04f65dd29145ccdc9b0e8ca5d683c145->leave($__internal_f4d219293cc93affb657436fc961c8dd04f65dd29145ccdc9b0e8ca5d683c145_prof);

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
