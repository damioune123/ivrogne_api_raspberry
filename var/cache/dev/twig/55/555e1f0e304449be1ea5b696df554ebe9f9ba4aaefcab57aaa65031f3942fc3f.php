<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b13ef28adb003b0bd4900b52071f47fefafef52cf9a057ac40ffcee6ca29ad94 extends Twig_Template
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
        $__internal_e1ece8c96f711b432fed22688a126297c6123e8146ddcb901df42b445f8ee856 = $this->env->getExtension("native_profiler");
        $__internal_e1ece8c96f711b432fed22688a126297c6123e8146ddcb901df42b445f8ee856->enter($__internal_e1ece8c96f711b432fed22688a126297c6123e8146ddcb901df42b445f8ee856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e1ece8c96f711b432fed22688a126297c6123e8146ddcb901df42b445f8ee856->leave($__internal_e1ece8c96f711b432fed22688a126297c6123e8146ddcb901df42b445f8ee856_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
