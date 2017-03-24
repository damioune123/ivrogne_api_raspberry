<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_8d81b79929d065c77d8e6e8587b88df4642a377d076021ee79636d1a808698db extends Twig_Template
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
        $__internal_821c75dac672aa1390c82333275ace6bd6a063e4a24f9845accf9cb4fbc08d63 = $this->env->getExtension("native_profiler");
        $__internal_821c75dac672aa1390c82333275ace6bd6a063e4a24f9845accf9cb4fbc08d63->enter($__internal_821c75dac672aa1390c82333275ace6bd6a063e4a24f9845accf9cb4fbc08d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_821c75dac672aa1390c82333275ace6bd6a063e4a24f9845accf9cb4fbc08d63->leave($__internal_821c75dac672aa1390c82333275ace6bd6a063e4a24f9845accf9cb4fbc08d63_prof);

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
