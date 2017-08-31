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
        $__internal_7d4bce3c1ba3814f6101bd2767c3f7bd6a51e83ceec11b3fc9df40861cc4d5d3 = $this->env->getExtension("native_profiler");
        $__internal_7d4bce3c1ba3814f6101bd2767c3f7bd6a51e83ceec11b3fc9df40861cc4d5d3->enter($__internal_7d4bce3c1ba3814f6101bd2767c3f7bd6a51e83ceec11b3fc9df40861cc4d5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7d4bce3c1ba3814f6101bd2767c3f7bd6a51e83ceec11b3fc9df40861cc4d5d3->leave($__internal_7d4bce3c1ba3814f6101bd2767c3f7bd6a51e83ceec11b3fc9df40861cc4d5d3_prof);

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
