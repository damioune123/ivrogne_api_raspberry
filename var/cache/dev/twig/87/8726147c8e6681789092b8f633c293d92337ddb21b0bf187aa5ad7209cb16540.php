<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c4dab7db323d7bba21d463809f67e6833d6e8bc900b0bafc7b78c5555ff50e75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f62aea7b7be56e9a5d05edc77249af500c2a1a3ad6da242ea26d279c2cc4099 = $this->env->getExtension("native_profiler");
        $__internal_6f62aea7b7be56e9a5d05edc77249af500c2a1a3ad6da242ea26d279c2cc4099->enter($__internal_6f62aea7b7be56e9a5d05edc77249af500c2a1a3ad6da242ea26d279c2cc4099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6f62aea7b7be56e9a5d05edc77249af500c2a1a3ad6da242ea26d279c2cc4099->leave($__internal_6f62aea7b7be56e9a5d05edc77249af500c2a1a3ad6da242ea26d279c2cc4099_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
