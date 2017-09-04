<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_115aa2f7833842554f5a9497e78e022644718fed79d1bd655843d9c5a2f9132f extends Twig_Template
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
        $__internal_931214529c9449db18a8949d9d718fc7a0ec019ba202276e40f5ae48df1b9ccd = $this->env->getExtension("native_profiler");
        $__internal_931214529c9449db18a8949d9d718fc7a0ec019ba202276e40f5ae48df1b9ccd->enter($__internal_931214529c9449db18a8949d9d718fc7a0ec019ba202276e40f5ae48df1b9ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_931214529c9449db18a8949d9d718fc7a0ec019ba202276e40f5ae48df1b9ccd->leave($__internal_931214529c9449db18a8949d9d718fc7a0ec019ba202276e40f5ae48df1b9ccd_prof);

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
