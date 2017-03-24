<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9d688631cb7cbe1fec701247f152821f710018adf7ea63b654e7424b790ed7f1 extends Twig_Template
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
        $__internal_760e123c96d0cd5c9bbbbe9fb4e84b4a547e8c6bd4b0277eade7911271e3e994 = $this->env->getExtension("native_profiler");
        $__internal_760e123c96d0cd5c9bbbbe9fb4e84b4a547e8c6bd4b0277eade7911271e3e994->enter($__internal_760e123c96d0cd5c9bbbbe9fb4e84b4a547e8c6bd4b0277eade7911271e3e994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_760e123c96d0cd5c9bbbbe9fb4e84b4a547e8c6bd4b0277eade7911271e3e994->leave($__internal_760e123c96d0cd5c9bbbbe9fb4e84b4a547e8c6bd4b0277eade7911271e3e994_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
