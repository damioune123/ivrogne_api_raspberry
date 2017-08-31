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
        $__internal_397ee964f10865f17263385e86bb42b2427575de01418ac527fa9a54af462c7d = $this->env->getExtension("native_profiler");
        $__internal_397ee964f10865f17263385e86bb42b2427575de01418ac527fa9a54af462c7d->enter($__internal_397ee964f10865f17263385e86bb42b2427575de01418ac527fa9a54af462c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_397ee964f10865f17263385e86bb42b2427575de01418ac527fa9a54af462c7d->leave($__internal_397ee964f10865f17263385e86bb42b2427575de01418ac527fa9a54af462c7d_prof);

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
