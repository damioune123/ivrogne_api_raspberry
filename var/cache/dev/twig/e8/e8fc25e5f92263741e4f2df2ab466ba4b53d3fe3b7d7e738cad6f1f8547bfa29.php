<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d9ded4b7e8d230d1bafbbc3658ca6e22928920972dc7f423bbc079b01209fc4d extends Twig_Template
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
        $__internal_66360e229109bbbdfbe3af83cd433ccf2aceadd621602e99ba72a6a978b210f3 = $this->env->getExtension("native_profiler");
        $__internal_66360e229109bbbdfbe3af83cd433ccf2aceadd621602e99ba72a6a978b210f3->enter($__internal_66360e229109bbbdfbe3af83cd433ccf2aceadd621602e99ba72a6a978b210f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_66360e229109bbbdfbe3af83cd433ccf2aceadd621602e99ba72a6a978b210f3->leave($__internal_66360e229109bbbdfbe3af83cd433ccf2aceadd621602e99ba72a6a978b210f3_prof);

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
