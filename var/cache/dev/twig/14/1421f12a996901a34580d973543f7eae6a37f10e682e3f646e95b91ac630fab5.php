<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_01abdbd5cd12048f052917ba5b6eced7b9504708ae5a436459c479b3cd90c162 extends Twig_Template
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
        $__internal_15f5a9065e202442af711f334d78fb27c6499f1cece3ec810e036ace13d240df = $this->env->getExtension("native_profiler");
        $__internal_15f5a9065e202442af711f334d78fb27c6499f1cece3ec810e036ace13d240df->enter($__internal_15f5a9065e202442af711f334d78fb27c6499f1cece3ec810e036ace13d240df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_15f5a9065e202442af711f334d78fb27c6499f1cece3ec810e036ace13d240df->leave($__internal_15f5a9065e202442af711f334d78fb27c6499f1cece3ec810e036ace13d240df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
